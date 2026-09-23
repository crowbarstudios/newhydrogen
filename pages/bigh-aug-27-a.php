<style>
    body {
        font-family: "Manrope", sans-serif;
    }

    body .bigh-brand-green,
    body .text-custom-green-100,
    body .text-custom-green-200,
    body .text-custom-green-400,
    body [class~="text-[#00bc05]"],
    body [class~="!text-[#00bc05]"] {
        color: #12B34F !important;
    }

    body .bigh-information-section .bigh-brand-green {
        color: #19C957 !important;
    }

    body .bigh-headline-green {
        color: #12B34F !important;
    }

    body .bg-custom-green-200,
    body .bg-custom-green-300,
    body .bg-custom-green-500,
    body .bg-custom-green-700 {
        background-color: #12B34F !important;
    }

    body .border-custom-green-500,
    body .border-custom-green-600 {
        border-color: #12B34F !important;
    }

    body footer.bg-custom-gray-dark-100 {
        background-color: #514B4F !important;
    }

    body footer.bg-custom-gray-dark-100 input.bg-custom-gray-dark-200 {
        background-color: #514B4F !important;
        border: 1px solid #ffffff !important;
    }

    .header-top nav,
    .header-top nav a,
    .header-top #mobile-menu,
    .header-top #mobile-menu a {
        font-family: "Manrope", sans-serif;
    }

    @media (min-width: 900px) {
        body .header-top .bigh-desktop-nav-links {
            transform: translateX(14px);
        }
    }

    .header-top > .bg-black {
        display: none;
    }

    .bigh-inline-social {
        display: inline-flex;
        align-items: center;
        gap: 14px;
        margin-left: 6px;
        margin-right: 14px;
    }

    .bigh-inline-social a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #000000;
        font-size: 19px;
        line-height: 1;
        text-decoration: none;
    }

    .bigh-replacement-banner {
        font-family: inherit;
        padding: 144px 20px;
    }

    .bigh-replacement-banner h1 {
        max-width: 1200px;
        font-size: clamp(2rem, 4.3vw, 4.5rem);
        font-weight: 300;
        letter-spacing: -0.015em;
        line-height: 1.04;
    }

    @media (min-width: 768px) {
        .bigh-replacement-banner {
            padding: 180px 32px;
        }

        .bigh-headline-second-line {
            white-space: nowrap;
        }
    }

    @media (max-width: 767px) {
        .bigh-replacement-banner {
            padding: 76px 20px;
        }

        .bigh-replacement-banner h1 {
            font-size: clamp(1.8rem, 7.2vw, 2.4rem);
            line-height: 1.02;
        }
    }

    .bigh-information-section {
        font-family: "Manrope", sans-serif;
        background: #514B4F;
        color: #ffffff;
        padding: 32px 16px;
    }

    .bigh-information-section ul {
        box-sizing: border-box;
        width: min(100%, 1200px);
        margin: 0 auto;
        padding: 0 28px;
    }

    .bigh-information-section li {
        padding-left: 7px;
        margin-bottom: 28px;
        font-size: 21px;
        line-height: 1.35;
    }

    .bigh-information-section .bigh-trademark {
        display: inline-block;
        margin-left: 2px;
        font-family: inherit;
        font-size: 0.65em;
        font-weight: 400;
        line-height: 0;
        top: -0.35em;
    }

    .bigh-information-section li:last-child {
        margin-bottom: 0;
    }

    .bigh-news-section {
        font-family: "Manrope", sans-serif;
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        align-items: center;
        gap: 28px;
        min-height: 560px;
        padding: 30px;
        background: #f4f5f6;
    }

    .bigh-news-panel {
        align-self: center;
        padding: 12px 22px 12px 8px;
        background: transparent;
    }

    .bigh-news-panel h2 {
        position: relative;
        margin: 0 0 20px;
        padding-bottom: 12px;
        color: #000000;
        font-size: 36px;
        letter-spacing: -0.04em;
        line-height: 1.1;
        font-weight: 700;
    }

    .bigh-news-panel h2::after {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 64px;
        height: 4px;
        background: #12B34F;
        border-radius: 999px;
        content: "";
    }

    .bigh-news-panel ul {
        counter-reset: bigh-news-item;
        list-style: none;
        margin: 0;
        padding: 0;
        color: #000000;
    }

    .bigh-news-panel li {
        box-sizing: border-box;
        display: grid;
        align-items: center;
        grid-template-columns: 145px minmax(0, 1fr);
        column-gap: 22px;
        counter-increment: bigh-news-item;
        margin: 0;
        min-height: 132px;
        padding: 18px 0;
        border-top: 1px solid rgba(23, 51, 64, 0.28);
        font-size: 18px;
        line-height: 1.3;
        font-weight: 700;
    }

    .bigh-news-panel li::before {
        padding-top: 3px;
        color: #12B34F;
        content: attr(data-date);
        font-size: 16px;
        letter-spacing: 0;
        line-height: 1.3;
        font-weight: 800;
        white-space: nowrap;
    }

    .bigh-news-panel li:last-child {
        border-bottom: 1px solid rgba(23, 51, 64, 0.28);
    }

    .bigh-news-panel--copy {
        padding-right: 30px;
    }

    .bigh-news-panel--copy .bigh-home-copy {
        list-style: none;
        margin: 0;
        padding-left: 28px;
    }

    .bigh-news-panel--copy .bigh-home-copy li {
        display: grid;
        grid-template-columns: 16px minmax(0, 1fr);
        column-gap: 12px;
    }

    .bigh-news-panel--copy .bigh-home-copy li::before {
        align-self: start;
        color: #12B34F;
        content: "•";
        font-size: 28px;
        line-height: 0.85;
        transform: translateY(-3px);
    }

    .bigh-news-panel--copy .bigh-home-copy li::marker {
        display: none;
    }

    .bigh-news-panel--copy .bigh-home-copy li > * {
        grid-column: 2;
    }

    .bigh-news-panel--copy .bigh-home-copy li {
        min-height: 0;
        padding: 0 0 24px;
        border: 0;
        font-size: 19px;
        line-height: 1.4;
        font-weight: 400;
    }

    .bigh-news-panel--copy .bigh-home-copy li:last-child {
        padding-bottom: 0;
    }

    .bigh-news-panel a {
        display: block;
        color: inherit;
        font-size: 18px;
        line-height: 1.3;
        font-weight: 700;
        text-decoration: none;
    }

    .bigh-news-panel a:hover {
        color: #12B34F;
        text-decoration: underline;
        text-decoration-thickness: 2px;
        text-underline-offset: 4px;
    }

    .bigh-video-column {
        align-self: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
    }

    .bigh-video-label {
        margin: 0;
        color: #000000;
        font-size: 18px;
        line-height: 1.2;
        font-weight: 700;
        text-align: center;
    }

    .bigh-explainer-video {
        position: relative;
        display: block;
        justify-self: center;
        width: 80%;
        height: auto;
        aspect-ratio: 16 / 9;
        overflow: hidden;
        background: #f1f1f1;
        border: 0;
        border-radius: 14px;
        line-height: 0;
    }

    .bigh-explainer-thumbnail {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: radial-gradient(circle at center, #ffffff 0%, #f5f5f5 48%, #d9d9d9 100%);
    }

    .bigh-explainer-thumbnail img {
        display: block;
        width: 64%;
        height: auto;
        object-fit: contain;
    }

    .bigh-explainer-play {
        position: absolute;
        top: 50%;
        left: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 95px;
        height: 95px;
        transform: translate(-50%, -50%);
        background: #12B34F;
        border-radius: 50%;
        border: 4px solid #ffffff;
        box-sizing: border-box;
    }

    .bigh-explainer-play svg {
        width: 100%;
        height: 100%;
    }

    .bigh-sep19-features {
        background: #ffffff;
        color: #091113;
        padding: 104px 24px 116px;
    }

    .bigh-sep19-features-inner {
        width: min(100%, 1180px);
        margin: 0 auto;
    }

    .bigh-sep19-eyebrow {
        margin: 0 0 14px;
        color: #12B34F;
        font-size: 14px;
        font-weight: 800;
        letter-spacing: 0.16em;
        line-height: 1.2;
        text-transform: uppercase;
    }

    .bigh-sep19-features h2 {
        max-width: 720px;
        margin: 0 0 46px;
        color: #091113;
        font-size: clamp(2.25rem, 4vw, 4rem);
        font-weight: 300;
        letter-spacing: -0.04em;
        line-height: 1.02;
    }

    .bigh-sep19-feature-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 22px;
    }

    .bigh-sep19-feature-card {
        position: relative;
        min-height: 270px;
        padding: 32px 32px 34px;
        overflow: hidden;
        border: 1px solid #dfe7e3;
        border-radius: 22px;
        background: linear-gradient(145deg, #ffffff 0%, #f5faf7 100%);
        box-shadow: 0 14px 30px rgba(9, 17, 19, 0.06);
    }

    .bigh-sep19-feature-card::before {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: #12B34F;
        content: "";
    }

    .bigh-sep19-feature-number {
        display: block;
        margin-bottom: 30px;
        color: #12B34F;
        font-size: 14px;
        font-weight: 800;
        letter-spacing: 0.14em;
        line-height: 1;
    }

    .bigh-sep19-feature-card h3 {
        margin: 0 0 14px;
        color: #091113;
        font-size: clamp(1.45rem, 2.5vw, 2.1rem);
        font-weight: 700;
        letter-spacing: -0.035em;
        line-height: 1.05;
    }

    .bigh-sep19-feature-card p {
        margin: 0;
        color: #364246;
        font-size: 18px;
        line-height: 1.5;
    }

    <?php if (empty($isSep2HomeBullets)) : ?>
        .bigh-information-section--with-bullets ul {
            list-style: disc;
        }

        .bigh-information-section--with-bullets li::marker {
            color: #ffffff;
            font-size: 1.21em;
        }
    <?php endif; ?>

    @media (max-width: 767px) {
        .bigh-information-section {
            padding: 28px 12px;
        }

        .bigh-information-section ul {
            width: 100%;
            padding: 0 24px 0 48px;
        }

        .bigh-information-section li {
            padding-left: 4px;
            margin-bottom: 24px;
            font-size: 17px;
            line-height: 1.4;
        }

        .bigh-news-section {
            grid-template-columns: 1fr;
            gap: 28px;
            min-height: 0;
            padding: 14px;
        }

        .bigh-video-column {
            order: 1;
            padding: 48px 0;
        }

        .bigh-news-panel {
            order: 2;
            padding: 8px 4px 8px 0;
        }

        .bigh-news-panel h2 {
            margin-bottom: 16px;
            padding-bottom: 10px;
            font-size: 28px;
        }

        .bigh-news-panel h2::after {
            width: 52px;
            height: 3px;
        }

        .bigh-news-panel li {
            grid-template-columns: 125px minmax(0, 1fr);
            column-gap: 13px;
            min-height: 170px;
            padding: 16px 0;
            font-size: 16px;
            line-height: 1.35;
        }

        .bigh-news-panel li::before {
            padding-top: 2px;
            font-size: 14px;
        }

        .bigh-news-panel a {
            font-size: 16px;
            line-height: 1.35;
        }

        .bigh-video-label {
            font-size: 16px;
        }

        .bigh-explainer-video {
            width: 80%;
            height: auto;
        }

        .bigh-sep19-features {
            padding: 68px 18px 76px;
        }

        .bigh-sep19-features h2 {
            margin-bottom: 30px;
            font-size: 2.35rem;
        }

        .bigh-sep19-feature-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .bigh-sep19-feature-card {
            min-height: 0;
            padding: 26px 22px 28px;
        }

        .bigh-sep19-feature-number {
            margin-bottom: 22px;
        }

        .bigh-sep19-feature-card p {
            font-size: 16px;
            line-height: 1.48;
        }
    }

    <?php if (!empty($isSep19Home)) : ?>
        @media (max-width: 767px) {
            .bigh-news-section {
                padding-left: 18px;
                padding-right: 18px;
            }

            .bigh-news-panel,
            .bigh-news-panel--copy {
                padding-right: 0;
                padding-left: 0;
            }

            .bigh-news-panel--copy .bigh-home-copy {
                padding-right: 0;
                padding-left: 0;
            }

            .bigh-news-panel--copy .bigh-home-copy li {
                grid-template-columns: 14px minmax(0, 1fr);
                column-gap: 10px;
            }

            .bigh-explainer-video {
                width: 100%;
            }

            .bigh-mission-section {
                padding-left: 18px;
                padding-right: 18px;
            }

            .bigh-mission-section > .mx-auto {
                padding-right: 0;
                padding-left: 0;
            }
        }
    <?php endif; ?>

    <?php if (!empty($isSep2HomeBullets)) : ?>
        .bigh-information-section--with-video {
            display: grid;
            grid-template-columns: minmax(0, 1.08fr) minmax(320px, 0.92fr);
            align-items: center;
            gap: 32px;
        }

        .bigh-information-section--with-video ul {
            width: auto;
            margin: 0;
            padding: 0 0 0 52px;
            list-style: disc;
        }

        .bigh-information-section--with-video li {
            font-size: 23.1px;
        }

        .bigh-information-section--with-video li::marker {
            color: #ffffff;
            font-size: 1.21em;
        }

        .bigh-information-section--with-video .bigh-video-column {
            padding: 0 10px 0 0;
        }

        .bigh-information-section--with-video .bigh-video-label {
            color: #ffffff;
        }

        .bigh-information-section--with-video .bigh-explainer-video {
            width: 100%;
            max-width: 560px;
        }

        @media (max-width: 767px) {
            .bigh-information-section--with-video {
                grid-template-columns: 1fr;
                gap: 28px;
            }

            .bigh-information-section--with-video ul {
                padding: 0 24px 0 52px;
            }

            .bigh-information-section--with-video li {
                font-size: 18.7px;
            }

            .bigh-information-section--with-video .bigh-video-column {
                padding: 0;
            }
        }

        .bigh-news-section--centered {
            grid-template-columns: minmax(0, 1fr) minmax(360px, 0.82fr);
            align-items: center;
            gap: 32px;
        }

        .bigh-news-section--centered .bigh-news-panel {
            width: 100%;
            max-width: none;
        }

        .bigh-breaking-news-promo {
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 560px;
            min-height: 420px;
            padding: 36px 38px 42px;
            justify-self: center;
            background: #e9e9e9;
            border-radius: 20px;
            color: #000000;
            text-align: center;
            text-decoration: none;
        }

        .bigh-breaking-news-promo:hover {
            color: #000000;
        }

        .bigh-breaking-news-promo-badge {
            display: inline-block;
            margin-bottom: 34px;
            padding: 17px 35px;
            background: #f51f2a;
            border-radius: 999px;
            box-shadow: 0 16px 22px rgba(0, 0, 0, 0.2);
            color: #ffffff;
            font-size: 23px;
            letter-spacing: 0.08em;
            line-height: 1;
            font-weight: 800;
        }

        .bigh-breaking-news-promo-date {
            margin: 0 0 12px;
            font-size: 21px;
            line-height: 1.2;
            font-weight: 800;
        }

        .bigh-breaking-news-promo-title {
            margin: 0;
            font-size: 28px;
            line-height: 1.16;
            font-weight: 800;
        }

        .bigh-breaking-news-promo-cta {
            display: block;
            margin-top: 18px;
            color: #f51f2a;
            font-size: 23px;
            line-height: 1.15;
            font-weight: 800;
        }

        @media (max-width: 767px) {
            .bigh-news-section--centered {
                grid-template-columns: 1fr;
                gap: 28px;
            }

            .bigh-news-section--centered .bigh-news-panel {
                width: 100%;
            }

            .bigh-breaking-news-promo {
                min-height: 320px;
                max-width: 100%;
                padding: 28px 20px 32px;
            }

            .bigh-breaking-news-promo-badge {
                margin-bottom: 25px;
                padding: 13px 24px;
                font-size: 16px;
            }

            .bigh-breaking-news-promo-date {
                margin-bottom: 10px;
                font-size: 17px;
            }

            .bigh-breaking-news-promo-title {
                font-size: 22px;
            }

            .bigh-breaking-news-promo-cta {
                margin-top: 14px;
                font-size: 18px;
            }
        }
    <?php endif; ?>
</style>

<?php
$news = include "./data/news-data.php";
$recentNewsItems = array_slice($news, !empty($isSep2HomeBullets) ? 1 : 0, 4);
?>

<section class="bigh-replacement-banner bg-black flex items-center justify-center px-5 sm:px-8">
    <h1 class="max-w-[1120px] text-center text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight text-white">
        Using Heat and Water to Produce
        <br class="hidden sm:block">
        Massive Amounts
        <br class="hidden sm:block">
        <span class="bigh-headline-second-line">of the World’s Cheapest <span class="bigh-headline-green" style="white-space: nowrap;">Clean Hydrogen</span></span>
    </h1>
</section>

<?php if (empty($hideBighInformationSection)) : ?>
<section class="bigh-information-section<?= !empty($isSep2HomeBullets) ? ' bigh-information-section--with-video' : ' bigh-information-section--with-bullets' ?>">
    <ul>
        <li>
            NewHydrogen is developing <strong>ThermoLoop<sup class="bigh-trademark">®</sup></strong> - a breakthrough thermochemical technology that uses heat to split water into the world&apos;s cheapest <span class="bigh-brand-green">clean hydrogen</span> at industrial scale.
        </li>
        <li>
            Over 98% of the world&apos;s dedicated hydrogen is produced using dirty fossil fuel feedstocks. These large-scale hydrogen plants are critical infrastructure designed to meet massive industrial demand across refining, chemical manufacturing, and power generation.
        </li>
        <li>
            ThermoLoop is designed to produce continuous <span class="bigh-brand-green">clean hydrogen</span> at a scale matching the largest of the world&apos;s existing hydrogen plants.
        </li>
    </ul>
    <?php if (!empty($isSep2HomeBullets)) : ?>
        <div class="bigh-video-column">
            <h3 class="bigh-video-label">Short Explainer Video</h3>
            <a
                class="bigh-explainer-video popup-youtube"
                href="https://www.youtube.com/watch?v=734Ia_BN2ww"
                aria-label="Play Short Explainer Video">
                <span class="bigh-explainer-thumbnail">
                    <img src="<?php echo $full_url; ?>/assets/images/logo-dark-bigh-aug-27-a.svg" alt="NewHydrogen">
                </span>
                <span class="bigh-explainer-play" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 56 56" fill="none">
                        <circle cx="27.8926" cy="28.1125" r="27.5" fill="#12B34F" />
                        <path d="M39.1753 28.1126L21.5537 38.2864L21.5537 17.9387L39.1753 28.1126Z" fill="white" />
                    </svg>
                </span>
            </a>
        </div>
    <?php endif; ?>
</section>
<?php endif; ?>

<section class="bigh-news-section<?= !empty($isSep2HomeBullets) ? ' bigh-news-section--centered' : '' ?>">
    <div class="bigh-news-panel<?= !empty($isSep19Home) ? ' bigh-news-panel--copy' : '' ?>">
        <?php if (!empty($isSep19Home)) : ?>
            <ul class="bigh-home-copy">
                <li>
                    <span>NewHydrogen is developing <strong>ThermoLoop<sup class="bigh-trademark">®</sup></strong> - a breakthrough thermochemical technology that uses heat to split water into the world's cheapest <span class="bigh-brand-green">clean hydrogen</span> at industrial scale.</span>
                </li>
                <li>
                    <span>Over 98% of the world's dedicated hydrogen is produced using dirty fossil fuel feedstocks. These large-scale hydrogen plants are critical infrastructure designed to meet massive industrial demand across refining, chemical manufacturing, and power generation.</span>
                </li>
                <li>
                    <span><strong>ThermoLoop<sup class="bigh-trademark">®</sup></strong> is designed to produce continuous <span class="bigh-brand-green">clean hydrogen</span> at a scale matching the largest of the world's existing hydrogen plants.</span>
                </li>
            </ul>
        <?php else : ?>
            <h2>Recent News</h2>
            <ul>
                <?php foreach ($recentNewsItems as $recentNewsItem) : ?>
                    <li data-date="<?= htmlspecialchars($recentNewsItem["date"], ENT_QUOTES, "UTF-8") ?>">
                        <a href="/single-news.php?id=<?= urlencode($recentNewsItem["id"]) ?>">
                            <?= htmlspecialchars($recentNewsItem["title"], ENT_QUOTES, "UTF-8") ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

    <?php if (empty($isSep2HomeBullets)) : ?>
    <div class="bigh-video-column">
        <h3 class="bigh-video-label">Short Explainer Video</h3>
        <a
            class="bigh-explainer-video popup-youtube"
            href="https://www.youtube.com/watch?v=734Ia_BN2ww"
            aria-label="Play Short Explainer Video">
            <span class="bigh-explainer-thumbnail">
                <img src="<?php echo $full_url; ?>/assets/images/logo-dark-bigh-aug-27-a.svg" alt="NewHydrogen">
            </span>
            <span class="bigh-explainer-play" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 56 56" fill="none">
                    <circle cx="27.8926" cy="28.1125" r="27.5" fill="#12B34F" />
                    <path d="M39.1753 28.1126L21.5537 38.2864L21.5537 17.9387L39.1753 28.1126Z" fill="white" />
                </svg>
            </span>
        </a>
    </div>
    <?php endif; ?>

    <?php if (!empty($isSep2HomeBullets)) : ?>
    <a
        class="bigh-breaking-news-promo"
        href="/single-news.php?id=104"
        aria-label="Read the NewHydrogen patent news">
        <span class="bigh-breaking-news-promo-badge">BREAKING NEWS</span>
        <span class="bigh-breaking-news-promo-title">NewHydrogen Files Third Patent to Protect Its Breakthrough Technology</span>
        <span class="bigh-breaking-news-promo-cta">CLICK HERE TO READ MORE</span>
    </a>
    <?php endif; ?>
</section>

<?php if (!empty($isSep19Home)) : ?>
<section class="bigh-sep19-features">
    <div class="bigh-sep19-features-inner">
        <div class="bigh-sep19-feature-grid">
            <article class="bigh-sep19-feature-card">
                <h3>The Real Hydrogen Crisis: Supply, Not Demand</h3>
                <p>Critical industries like agriculture, refining, and steelmaking demand vast amounts of hydrogen every day, with total demand projected to jump 50% by 2030. Demand is not the problem. The real hydrogen crisis is supply: over 98% of today&apos;s hydrogen is still produced using fossil fuels.</p>
            </article>
            <article class="bigh-sep19-feature-card">
                <h3>Heat + Water = Industrial Scale Production</h3>
                <p>ThermoLoop<sup class="bigh-trademark">®</sup> converts water directly into hydrogen using heat. Covering 71% of the planet, water provides a vast, reliable feedstock alternative to scarce natural gas in Europe, Asia and many of other parts of the world. Using abundantly available local water eliminates costly fuel imports and secures energy independence.</p>
            </article>
            <article class="bigh-sep19-feature-card">
                <h3>Future-Proof Heat Source</h3>
                <p>ThermoLoop<sup class="bigh-trademark">®</sup> is engineered to couple with high-temperature nuclear microreactors and advanced nuclear technology, unlocking continuous, cheap, clean hydrogen production off-grid, while preserving flexibility for other high-temperature sources.</p>
            </article>
            <article class="bigh-sep19-feature-card">
                <h3>The Scale Electrolyzers Can&apos;t Reach</h3>
                <p>Global hydrogen demand requires true industrial scale, a threshold traditional electrolyzers have never reached. ThermoLoop<sup class="bigh-trademark">®</sup> heat-driven water splitting technology delivers the clearest path to massive amounts of the world&rsquo;s cheapest clean hydrogen production.</p>
            </article>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- <section class="bg-coming-soon-new bg-cover bg-center bg-no-repeat bg-black relative py-12 sm:py-32">
    <div class="px-2 sm:px-4 z-10 relative">
        <div class="text-5xl sm:text-6xl text-white text-center font-bold sm:leading-[76px]">
            NewHydrogen Completes critical
            <br class="hidden md:inline-block" />
            Pre-Pilot Plant Technical Validation
        </div>
        <p class="text-2xl text-center text-white font-medium mt-4">
            View Special Report Video Below
        </p>
        <div class="max-w-[830px] mx-auto relative youtube-video-wrapper mt-5" data-video-id="bZ4xhMRHFtw">
            <iframe id="youtube-player" src="https://www.youtube.com/embed/bZ4xhMRHFtw?enablejsapi=1&controls=0&playsinline=1&rel=0&modestbranding=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="w-full aspect-video relative z-10"></iframe>

            <button type="button" class="absolute inset-0 flex items-center justify-center cursor-pointer z-20 youtube-custom-btn">
                <svg class="sm:w-[100px] sm:h-[100px] w-16 h-16" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 56 56" fill="none">
                    <circle cx="27.8926" cy="28.1125" r="27.5" fill="white" fill-opacity="1"></circle>
                    <path d="M39.1753 28.1126L21.5537 38.2864L21.5537 17.9387L39.1753 28.1126Z" fill="black"></path>
                </svg>
            </button>
        </div>
    </div>
</section> -->
<section class="bigh-mission-section bg-white py-20 sm:py-40 relative">
    <div class="mx-auto max-w-screen-xl px-2 sm:px-4">
        <div class="max-w-[910px] mx-auto relative z-10">
            <h3 class="text-left md:text-[42px] text-4xl">Our mission is to help produce unlimited <br class="hidden md:inline-block" /> amounts of the world’s cheapest <span class="bigh-brand-green">clean <br class="hidden md:inline-block" /> hydrogen</span>, and usher in the <span class="bigh-brand-green">clean hydrogen</span> <br class="hidden md:inline-block" /> economy that Goldman Sachs estimated to be <br class="hidden md:inline-block" /> worth <span class="text-black">$12 trillion</span> in the near future.</h3>
        </div>
    </div>
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <img src="./assets/images/h-icon.png" alt="hydrogen">
    </div>
</section>