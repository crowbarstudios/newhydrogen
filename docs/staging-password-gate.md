# Temporary staging password gate

This gate runs only when HTTP_HOST is staging.newhydrogen.com (case-insensitive,
with an optional port). It does not activate on production or the Replit preview.
It must remain on dev only. Do not promote it or its PHP bootstrap lines to main.

All existing PHP files load includes/staging-gate.php before any output, including
direct page templates, data files, and the signup endpoint. New PHP entry points
must also require this file before output. Do not remove an individual bootstrap
while the gate is enabled.

## Private configuration in cPanel

Create /home3/biosolar/.newh-staging-access.php OUTSIDE every public document root.
Do not reuse or edit the Jotform secrets file. Never put either the password or its
hash into Git, a public directory, logs, or a web-based password-hashing tool.

In cPanel Terminal, run the following. Type the intended staging password at the
hidden prompt. The command writes a password hash directly to the private file;
it does not print or put the password in shell history.

```bash
(
  umask 077
  read -r -s -p 'Staging password: ' NEWH_GATE_PASSWORD
  printf '\n'
  if [ -z "$NEWH_GATE_PASSWORD" ]; then
    printf 'Empty password refused.\n' >&2
    exit 1
  fi
  printf '%s' "$NEWH_GATE_PASSWORD" | php -r '
    $password = stream_get_contents(STDIN);
    $contents = "<?php\nreturn " . var_export([
      "password_hash" => password_hash($password, PASSWORD_DEFAULT)
    ], true) . ";\n";
    $path = "/home3/biosolar/.newh-staging-access.php";
    if (file_put_contents($path, $contents, LOCK_EX) === false) {
      fwrite(STDERR, "Could not write private staging configuration.\n");
      exit(1);
    }
    chmod($path, 0600);
    echo "Private staging password configuration saved.\n";
  '
  unset NEWH_GATE_PASSWORD
)
```

The resulting private file has this structure (the actual hash is generated
locally, not this placeholder):

```php
<?php
return [
    'password_hash' => 'GENERATED_PASSWORD_HASH',
];
```

Keep permissions 0600 and ownership readable by the staging web PHP process.
Deploy dev through the existing staging-only cPanel deployment. No .htaccess
changes are needed. A missing or invalid private configuration returns HTTP 503
without page content. Correct configuration enables the browser's HTTP Basic
prompt. Username: staging. Password: the value entered above.

Use HTTPS. Plain HTTP is redirected to the fixed HTTPS staging origin before
authentication. If CGI/FastCGI strips Authorization entirely, the gate remains
closed; ask the host to pass Authorization to PHP rather than weakening the gate.
PHP_AUTH_USER/PHP_AUTH_PW, HTTP_AUTHORIZATION, REDIRECT_HTTP_AUTHORIZATION and the
Authorization request header are supported.

## Limits

This is not whole-directory server protection. Direct static URLs remain public:
images, CSS, JavaScript, fonts, PDFs, downloadable documents, and any other files
served without PHP. Externally hosted videos and Jotform URLs remain accessible.
Any static HTML file is also public. Protecting those requires web-server-level
access control. Other hostname aliases are deliberately outside this gate.
Previously cached content cannot be recalled; purge staging CDN/page caches when
activating this gate and disable caching of protected PHP responses.

No cookie is used. Browsers may remember HTTP Basic credentials until closed.
There is no application-level rate limiter; enable hosting-level throttling if
needed. To rotate access, rerun the private configuration command. To remove the
gate, remove all PHP bootstrap lines and the gate together in a dev-only release;
deleting the private file alone intentionally locks staging rather than opens it.
