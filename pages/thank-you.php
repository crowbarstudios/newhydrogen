<?php require_once __DIR__ . '/../includes/staging-gate.php'; ?>
<section style="padding:80px 24px;background:#f4f9f6;min-height:55vh;text-align:center;">
    <div style="max-width:680px;margin:0 auto;padding:48px 24px;background:#fff;border:1px solid #dce9e1;border-radius:24px;">
        <svg width="64" height="64" viewBox="0 0 64 64" aria-hidden="true" style="margin:0 auto 24px;">
            <circle cx="32" cy="32" r="32" fill="#e5f7eb"/>
            <path d="m19 32 9 9 18-19" fill="none" stroke="#19a550" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <h1 style="font-size:clamp(32px,5vw,48px);font-weight:600;color:#101b15;margin:0 0 16px;">Thank You</h1>
        <?php if (!empty($_SESSION['newh_signup_confirmed'])) : ?>
            <p style="font-size:20px;line-height:1.6;margin:0 0 28px;color:#39483f;">You’re registered! Your email has been saved for the NewHydrogen Special Report.</p>
        <?php else : ?>
            <p style="font-size:20px;line-height:1.6;margin:0 0 28px;color:#39483f;">Thank you for your interest in NewHydrogen.</p>
        <?php endif; ?>
        <a href="/" style="display:inline-block;padding:14px 28px;border-radius:999px;background:#19a550;color:#fff;font-weight:600;text-decoration:none;">
            Back to Home
        </a>
    </div>
</section>