# Privacy policy — staging review, October 12, 2026

Status: **draft, not publication-ready**. The supplied policy is preserved,
including all thirteen sections and unresolved bracketed disclosures. The
staging page is visibly marked as a draft and sends `X-Robots-Tag: noindex,
nofollow`. Nothing in this review certifies legal compliance.

## Observed implementation

- The shared header initializes Google Analytics 4 (`G-4TKDKXJVVE`) and Meta
  Pixel (`1435998830509717`) with a PageView event. Their scripts are loaded
  without a consent gate in the inspected source. These providers can receive
  visitor request, device/browser and page/interaction information; actual
  cookie creation and payloads depend on provider/browser settings.
- Shared resources load from Vimeo, jsDelivr and cdnjs. YouTube embeds,
  thumbnails and its iframe API are used for video content. Requests to those
  external services expose request metadata such as IP address and browser
  information. Video providers can receive additional information on playback.
- The original footer newsletter uses Jotform `242986385047065`; report
  registration uses `250137276726055`; contact uses `241317693348058`.
  Existing newsletter/contact hCaptcha scripts can send browser information
  to hCaptcha. These unrelated forms/security scripts are unchanged.
- The primary homepage red signup uses isolated staging Jotform
  `262847331355056`. Its own flow has no CAPTCHA. Replit uses the managed
  connector; an external PHP deployment uses an authenticated server-side
  Jotform API request. Jotform receives the email and consent metadata, not
  an intentionally forwarded visitor IP from this new handler.
- A first-party HttpOnly, SameSite=Lax PHP session cookie supports the red
  signup's CSRF protection, retries and verified Thank You state. Session
  records include a hash of the submitted email and saved submission ID.
- Jotform account reads found no exposed webhooks on these four forms.
  The staging clone's autoresponder and notification emails are disabled.
  The original newsletter has an enabled autoresponder; contact has an
  enabled notification. No email configuration was reported for the separate
  report-registration form by this API read.
- No direct Mailchimp, HubSpot, Constant Contact, ActiveCampaign, SendGrid,
  Brevo or Klaviyo integration was found in the inspected shared source.
  This does **not** establish that account automations or off-site mailing
  systems do not exist.

## Consent record and enforcement

The checkbox is optional and initially unchecked. Jotform stores:

- Question 3: email.
- Question 5: explicit marketing choice, `Yes` or `No` (absent checkbox = `No`).
- Question 6: server-recorded UTC timestamp.
- Question 7: exact consent wording:
  `I agree to receive NewHydrogen news and marketing emails. Unsubscribe anytime.`

The handler reads the stored submission back and verifies the email, choice,
timestamp and wording before acknowledging success. Failure preserves the
email in the browser and does not redirect. A preference changed during a
retry updates the existing record and is reverified before success.

This code does not enroll either choice in an external marketing list or
send ongoing marketing. Future exports/automations must select only explicit
`Yes` records and honor later withdrawals. Blank legacy consent is not opt-in.

## Required owner/legal confirmations

1. Confirm the designated privacy email and official mailing address. The
   placeholders are retained; an investor-relations address is not assumed
   to be the privacy contact.
2. Confirm contact-list sales, independent marketers, advertising-related
   sharing and any applicable opt-out mechanisms. Meta Pixel alone is not a
   sufficient basis to invent a legal sale/sharing classification.
3. Review section 4's promise of additional choices: no cookie consent
   manager, prior tracking opt-in or advertising-sharing opt-out was found
   in the inspected source. Do not treat marketing-email consent as cookie
   consent. Determine applicable requirements before production publication.
4. Confirm actual email delivery, open/click measurement, unsubscribe links,
   suppression lists and all account/off-site marketing integrations.
   Existing form settings alone do not verify these operational practices.
5. Confirm retention periods, deletion/de-identification, rights-request
   verification, security measures, children's-data handling and international
   transfers. The draft's statements about these processes cannot be
   substantiated solely by this website's source.
6. Confirm that marketing exports/integrations will not subscribe unchecked
   visitors and will recognize withdrawals.

## External staging deployment prerequisite

Before cPanel staging deployment, provide a Full Access Jotform API key
using the private server environment variable `JOTFORM_API_KEY`, or the
fallback file `/home3/biosolar/.newh-staging-secrets.php` outside the public
website and Git repository. The environment variable takes priority.
The private file must return a PHP array with the string key
`JOTFORM_API_KEY`. Keep it owned by the cPanel account, with permissions
`0600` and readable by the site's PHP worker. Never commit or publicly
expose the file or key. Replit's connected account does not automatically
authenticate cPanel. Missing credentials or an unverified save produce a
visible failure, never a fake success.

The branch update is staging-only. No main promotion or cPanel deployment
is part of this work.
