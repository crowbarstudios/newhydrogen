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

    body .header-top #mobile-menu > div > div {
        align-items: flex-end !important;
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
    }
</style>

<?php
$news = include "./data/news-data.php";
$recentNewsDates = array_column($news, "date", "id");
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

<section class="bigh-information-section">
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
</section>

<section class="bigh-news-section">
    <div class="bigh-news-panel">
        <h2>Recent News</h2>
        <ul>
            <li data-date="<?= htmlspecialchars($recentNewsDates["103"], ENT_QUOTES, "UTF-8") ?>">
                <a href="/single-news.php?id=103">NewHydrogen Reveals Plan for Its Nuclear-Powered Clean Hydrogen Solution to Help Meet Trillion Annual Global Energy Market Demand</a>
            </li>
            <li data-date="<?= htmlspecialchars($recentNewsDates["102"], ENT_QUOTES, "UTF-8") ?>">
                <a href="/single-news.php?id=102">NewHydrogen Reveals Plan to Automate Its Engineering Test Unit</a>
            </li>
            <li data-date="<?= htmlspecialchars($recentNewsDates["101"], ENT_QUOTES, "UTF-8") ?>">
                <a href="/single-news.php?id=101">NewHydrogen Drives Toward Commercial Success</a>
            </li>
            <li data-date="<?= htmlspecialchars($recentNewsDates["100"], ENT_QUOTES, "UTF-8") ?>">
                <a href="/single-news.php?id=100">NewHydrogen Announces Strategic Collaboration with <u>NuCube</u> Energy to Explore Nuclear-Powered Clean Hydrogen Production</a>
            </li>
        </ul>
    </div>

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
</section>

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
<section class="bg-white py-20 sm:py-40 relative">
    <div class="mx-auto max-w-screen-xl px-2 sm:px-4">
        <div class="max-w-[910px] mx-auto relative z-10">
            <h3 class="text-left md:text-[42px] text-4xl">Our mission is to help produce unlimited <br class="hidden md:inline-block" /> amounts of the world’s cheapest <span class="bigh-brand-green">clean <br class="hidden md:inline-block" /> hydrogen</span>, and usher in the <span class="bigh-brand-green">clean hydrogen</span> <br class="hidden md:inline-block" /> economy that Goldman Sachs estimated to be <br class="hidden md:inline-block" /> worth <span class="text-black">$12 trillion</span> in the near future.</h3>
        </div>
    </div>
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <img src="./assets/images/h-icon.png" alt="hydrogen">
    </div>
</section>