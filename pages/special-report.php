<?php

// Preserve the standalone ETU presentation without a separate /newh-etu page.
$isSpecialReport = true;
$isCompletesEtu = true;
$isComingSoonTexture = true;
$isComingSoonRed = true;
$isNewhEtu = true;
?>
<style>
    .bigh-completes-etu-banner .bigh-completes-etu-video-placeholder {
        margin-top: clamp(28px, 3vw, 40px);
    }
</style>
<?php
include __DIR__ . '/home.php';
