<?php

// Preserve the standalone ETU presentation without a separate /newh-etu page.
$isSpecialReport = true;
$isCompletesEtu = true;
$isComingSoonTexture = true;
$isComingSoonRed = true;
$isNewhEtu = true;
?>
<style>
    .bigh-completes-etu-banner .bigh-coming-soon-red-content .bigh-special-report-premiere {
        margin: 12px 0 0;
        font-size: clamp(1.36rem, 2.924vw, 3.06rem);
        font-weight: 500;
        line-height: 1.3;
    }

    @media (max-width: 767px) {
        .bigh-completes-etu-banner .bigh-coming-soon-red-content .bigh-special-report-premiere {
            font-size: clamp(1.224rem, 4.896vw, 1.632rem);
        }
    }

    .bigh-completes-etu-banner .bigh-completes-etu-video-placeholder {
        margin-top: clamp(28px, 3vw, 40px);
    }

    .bigh-completes-etu-banner .bigh-special-report-video {
        padding: 0;
        background: #000000;
    }

    .bigh-completes-etu-banner .bigh-special-report-video::before,
    .bigh-completes-etu-banner .bigh-special-report-video::after {
        display: none;
    }

    .bigh-special-report-video iframe {
        position: absolute;
        inset: 0;
        display: block;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .bigh-special-report-video-poster {
        position: absolute;
        z-index: 2;
        inset: 0;
        width: 100%;
        height: 100%;
        padding: 0;
        border: 0;
        background: #000000;
        cursor: pointer;
    }

    .bigh-special-report-video-poster img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .bigh-special-report-video-poster svg {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 68px;
        height: 48px;
        transform: translate(-50%, -50%);
    }

    .bigh-special-report-video-poster:focus-visible {
        outline: 3px solid #ffffff;
        outline-offset: -5px;
    }
</style>
<?php
include __DIR__ . '/home.php';
