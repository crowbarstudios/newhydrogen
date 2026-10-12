<?php
require __DIR__ . '/includes/red-signup.php';
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');
header('X-Content-Type-Options: nosniff');

function signupReply(int $status, array $body): void
{
    http_response_code($status);
    echo json_encode($body);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    signupReply(405, ['ok' => false, 'message' => 'Please use the registration form.']);
}
if ((int) ($_SERVER['CONTENT_LENGTH'] ?? 0) > 4096) {
    signupReply(413, ['ok' => false, 'message' => 'Registration request is too large.']);
}
try {
    newhSignupSession();
    $token = $_POST['csrf_token'] ?? '';
    if (!is_string($token) || !isset($_SESSION['signup_csrf'])
        || !hash_equals($_SESSION['signup_csrf'], $token)) {
        signupReply(403, ['ok' => false, 'message' => 'Please reload the page and try again.']);
    }
    $email = is_string($_POST['q3_email'] ?? null) ? trim($_POST['q3_email']) : '';
    $requestId = $_POST['request_id'] ?? '';
    if (strlen($email) > 254 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        signupReply(422, ['ok' => false, 'message' => 'Please enter a valid email address.']);
    }
    if (!is_string($requestId) || !preg_match('/^[a-f0-9]{32}$/', $requestId)
        || !empty($_POST['company'])) {
        signupReply(422, ['ok' => false, 'message' => 'This registration could not be accepted. Please reload and try again.']);
    }
    $hash = hash('sha256', strtolower($email));
    $choice = $_POST['marketing_consent'] ?? null;
    if ($choice !== null && $choice !== 'yes') {
        signupReply(422, ['ok' => false, 'message' => 'Please reload the form and select your marketing preference again.']);
    }
    $marketingConsent = $choice === 'yes' ? 'Yes' : 'No';
    $state = $_SESSION['signup_requests'][$requestId] ?? ['email_hash' => $hash];
    if ($state['email_hash'] !== $hash) {
        signupReply(409, ['ok' => false, 'message' => 'Please reload the page before registering a different email.']);
    }
    if (!empty($state['verified']) && ($state['marketing_consent'] ?? '') === $marketingConsent) {
        signupReply(200, ['ok' => true, 'redirect' => '/thank-you']);
    }
    $recordedAt = $state['consent_recorded_at'] ?? gmdate('Y-m-d\TH:i:s\Z');
    if (($state['marketing_consent'] ?? $marketingConsent) !== $marketingConsent) {
        $recordedAt = gmdate('Y-m-d\TH:i:s\Z');
    }
    $consentFields = [
        'submission[' . NEWH_MARKETING_CONSENT_QID . ']' => $marketingConsent,
        'submission[' . NEWH_CONSENT_TIMESTAMP_QID . ']' => $recordedAt,
        'submission[' . NEWH_CONSENT_WORDING_QID . ']' => NEWH_MARKETING_CONSENT_WORDING,
    ];
    if (empty($state['submission_id'])) {
        $attempts = array_filter($_SESSION['signup_attempts'] ?? [], fn($time) => $time > time() - 600);
        if (count($attempts) >= 5) {
            signupReply(429, ['ok' => false, 'message' => 'Please wait a few minutes before trying again.']);
        }
        $attempts[] = time();
        $_SESSION['signup_attempts'] = $attempts;
        $created = newhJotformRequest(
            '/form/' . NEWH_STAGING_FORM_ID . '/submissions',
            'POST',
            ['submission[' . NEWH_STAGING_EMAIL_QID . ']' => $email] + $consentFields
        );
        $id = (string) ($created['submissionID'] ?? $created['id'] ?? '');
        if (!ctype_digit($id)) {
            throw newhSignupFailure('submission_id_missing');
        }
        $state['submission_id'] = $id;
        $state['marketing_consent'] = $marketingConsent;
        $state['consent_recorded_at'] = $recordedAt;
        // Retain a saved ID before read-back so verification retries do not re-create it.
        $_SESSION['signup_requests'][$requestId] = $state;
    } elseif (($state['marketing_consent'] ?? '') !== $marketingConsent) {
        // A preference changed after a failed confirmation must not retain an old opt-in.
        newhJotformRequest('/submission/' . $state['submission_id'], 'POST', $consentFields);
        $state['marketing_consent'] = $marketingConsent;
        $state['consent_recorded_at'] = $recordedAt;
        $state['verified'] = false;
        $_SESSION['signup_requests'][$requestId] = $state;
    }
    $saved = newhJotformRequest('/submission/' . $state['submission_id']);
    if ((string) ($saved['form_id'] ?? '') !== NEWH_STAGING_FORM_ID) {
        throw newhSignupFailure('saved_form_mismatch');
    }
    if (($saved['status'] ?? '') !== 'ACTIVE') {
        throw newhSignupFailure('saved_status_not_active');
    }
    if (strcasecmp(trim((string) ($saved['answers'][NEWH_STAGING_EMAIL_QID]['answer'] ?? '')), $email) !== 0) {
        throw newhSignupFailure('saved_email_mismatch');
    }
    if (($saved['answers'][NEWH_MARKETING_CONSENT_QID]['answer'] ?? '') !== $marketingConsent
        || ($saved['answers'][NEWH_CONSENT_TIMESTAMP_QID]['answer'] ?? '') !== $recordedAt
        || ($saved['answers'][NEWH_CONSENT_WORDING_QID]['answer'] ?? '') !== NEWH_MARKETING_CONSENT_WORDING) {
        throw newhSignupFailure('saved_metadata_mismatch');
    }
    $state['verified'] = true;
    $_SESSION['signup_requests'][$requestId] = $state;
    $_SESSION['newh_signup_confirmed'] = true;
    signupReply(200, ['ok' => true, 'redirect' => '/thank-you']);
} catch (Throwable $error) {
    // Never redirect on timeout, missing credentials, provider failure or unverified save.
    signupReply(503, ['ok' => false, 'message' => 'We could not confirm your registration. Your email is still in the form. Please try again.']);
}
