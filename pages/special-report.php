<?php

// Reuse the ETU page presentation while retaining the /special-report URL.
$isSpecialReport = true;
?>
<style>
    .bigh-completes-etu-banner .bigh-completes-etu-video-placeholder {
        margin-top: clamp(28px, 3vw, 40px);
    }
</style>
<?php
include __DIR__ . '/newh-etu.php';
