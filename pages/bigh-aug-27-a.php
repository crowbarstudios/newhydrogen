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

    .bigh-coming-soon-red-content {
        transform: translateY(8px);
    }

    .bigh-coming-soon-red-banner {
        padding: 48px 32px;
    }

    .bigh-coming-soon-red-banner:not(.bigh-coming-soon-texture-banner) .bigh-coming-soon-red-content h1 {
        font-size: clamp(1.62rem, 3.48vw, 3.65rem);
    }

    .bigh-coming-soon-red-banner:not(.bigh-coming-soon-texture-banner) {
        padding: 34.56px 32px;
    }

    .bigh-coming-soon-red-date-banner .bigh-coming-soon-red-date {
        margin: 16px 0 0;
        color: #ffffff;
        font-size: clamp(1.75rem, 3vw, 3rem);
        font-weight: 700;
        line-height: 1.15;
    }

    .bigh-coming-soon-red-date-banner .bigh-coming-soon-red-content > p:not(.bigh-coming-soon-red-date) {
        margin-top: 12px;
    }

    .bigh-completes-etu-banner .bigh-coming-soon-red-content h1 {
        font-size: clamp(1.7rem, 3.655vw, 3.825rem);
        font-weight: 600 !important;
        line-height: 1.2;
    }

    .bigh-completes-etu-video-heading {
        position: relative;
        width: fit-content;
        max-width: 100%;
        margin: 28px auto 16px;
        padding-bottom: 9px;
        color: #09251c;
        font-size: clamp(1.05rem, 2.5vw, 1.55rem);
        font-weight: 800;
        letter-spacing: -0.035em;
        line-height: 1.15;
        text-align: center;
        text-wrap: balance;
    }

    .bigh-completes-etu-video-heading::after {
        position: absolute;
        right: 35%;
        bottom: 0;
        left: 35%;
        height: 3px;
        border-radius: 999px;
        background: linear-gradient(90deg, #16a34a, #74f0a3);
        content: "";
    }

    .bigh-completes-etu-video-placeholder {
        position: relative;
        isolation: isolate;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: center;
        width: min(100%, 760px);
        aspect-ratio: 16 / 9;
        overflow: hidden;
        margin: 0 auto;
        padding: clamp(18px, 4vw, 30px);
        border: 1px solid rgba(155, 255, 196, 0.34);
        border-radius: 20px;
        background:
            radial-gradient(circle at 15% 82%, rgba(0, 188, 87, 0.24), transparent 34%),
            radial-gradient(circle at 82% 18%, rgba(80, 255, 170, 0.16), transparent 29%),
            linear-gradient(135deg, #071613 0%, #102a25 52%, #06110f 100%);
        box-shadow:
            0 24px 64px rgba(3, 22, 17, 0.34),
            inset 0 1px 0 rgba(255, 255, 255, 0.15);
        color: #f4fff8;
        font-family: "Manrope", sans-serif;
    }

    .bigh-completes-etu-video-placeholder::before {
        position: absolute;
        z-index: 0;
        inset: 0;
        background-image:
            linear-gradient(rgba(184, 255, 216, 0.055) 1px, transparent 1px),
            linear-gradient(90deg, rgba(184, 255, 216, 0.055) 1px, transparent 1px);
        background-size: 38px 38px;
        content: "";
        mask-image: linear-gradient(115deg, rgba(0, 0, 0, 0.72), transparent 78%);
        pointer-events: none;
    }

    .bigh-completes-etu-video-placeholder::after {
        position: absolute;
        z-index: 0;
        top: 50%;
        right: -5%;
        width: 55%;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(104, 255, 168, 0.5), transparent);
        content: "";
        transform: rotate(-24deg);
        pointer-events: none;
    }

    .bigh-completes-etu-video-center {
        position: relative;
        z-index: 1;
    }

    .bigh-completes-etu-video-center {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .bigh-completes-etu-video-play {
        display: flex;
        align-items: center;
        justify-content: center;
        width: clamp(48px, 8vw, 66px);
        height: clamp(48px, 8vw, 66px);
        margin-bottom: clamp(9px, 1.7vw, 14px);
        border: 1px solid rgba(129, 255, 179, 0.8);
        border-radius: 50%;
        background: linear-gradient(145deg, rgba(39, 205, 108, 0.96), rgba(9, 121, 65, 0.96));
        box-shadow:
            0 0 0 8px rgba(35, 210, 112, 0.11),
            0 0 34px rgba(34, 230, 122, 0.42);
        animation: bigh-etu-play-pulse 3s ease-in-out infinite;
    }

    .bigh-completes-etu-video-play svg {
        width: 23px;
        height: 23px;
        margin-left: 3px;
        fill: #ffffff;
    }

    .bigh-completes-etu-video-center h2 {
        margin: 0;
        color: #ffffff;
        font-size: clamp(1.15rem, 2.8vw, 1.8rem);
        font-weight: 800;
        letter-spacing: -0.04em;
        line-height: 1.08;
        text-shadow: 0 2px 22px rgba(83, 255, 157, 0.22);
    }

    @keyframes bigh-etu-play-pulse {
        0%, 100% {
            box-shadow:
                0 0 0 8px rgba(35, 210, 112, 0.11),
                0 0 34px rgba(34, 230, 122, 0.36);
        }
        50% {
            box-shadow:
                0 0 0 12px rgba(35, 210, 112, 0.05),
                0 0 44px rgba(34, 230, 122, 0.56);
        }
    }

    @media (max-width: 480px) {
        .bigh-completes-etu-video-heading {
            margin-bottom: 12px;
            font-size: clamp(1rem, 4vw, 1.2rem);
        }

        .bigh-completes-etu-video-placeholder {
            border-radius: 14px;
            padding: 14px;
        }

    }

    @media (prefers-reduced-motion: reduce) {
        .bigh-completes-etu-video-play {
            animation: none;
        }
    }

    .bigh-coming-soon-texture-banner {
        background-position: center;
        background-size: cover;
    }

    .bigh-coming-soon-texture-banner .bigh-coming-soon-red-content h1,
    .bigh-coming-soon-texture-banner .bigh-coming-soon-red-content > p {
        color: #000000 !important;
    }

    .bigh-coming-soon-texture-banner .bigh-coming-soon-red-form-row {
        border-color: rgba(0, 0, 0, 0.78);
        background: rgba(255, 255, 255, 0.48);
        box-shadow: 0 10px 28px rgba(0, 0, 0, 0.14);
    }

    .bigh-coming-soon-texture-banner .bigh-coming-soon-red-form input[type="email"] {
        color: #000000;
    }

    .bigh-coming-soon-texture-banner .bigh-coming-soon-red-form input[type="email"]::placeholder {
        color: rgba(0, 0, 0, 0.68);
    }

    .bigh-coming-soon-texture-banner .bigh-coming-soon-red-form button {
        border-left-color: rgba(0, 0, 0, 0.78);
        color: #000000;
    }

    .bigh-coming-soon-texture-banner .bigh-coming-soon-red-form button:hover {
        background: #ffffff;
        color: #000000;
    }

    .bigh-coming-soon-red-title {
        font-weight: 700 !important;
    }

    .bigh-coming-soon-red-form {
        width: min(100%, 680px);
        margin: 30px auto 0;
        transform: scale(0.7);
        transform-origin: top center;
    }

    .bigh-coming-soon-red-banner:not(.bigh-coming-soon-texture-banner) .bigh-coming-soon-red-form {
        transform: scale(0.595);
    }

    .bigh-coming-soon-red-form-row {
        display: flex;
        align-items: stretch;
        min-height: 64px;
        overflow: hidden;
        border: 2px solid rgba(255, 255, 255, 0.92);
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.08);
        box-shadow: 0 10px 28px rgba(86, 0, 0, 0.18);
    }

    .bigh-coming-soon-red-form input[type="email"] {
        min-width: 0;
        flex: 1 1 auto;
        padding: 0 28px;
        border: 0;
        outline: 0;
        background: transparent;
        color: #ffffff;
        font: inherit;
        font-size: 18px;
    }

    .bigh-coming-soon-red-form input[type="email"]::placeholder {
        color: rgba(255, 255, 255, 0.82);
    }

    .bigh-coming-soon-red-form button {
        min-width: 190px;
        padding: 0 30px;
        border: 0;
        border-left: 2px solid rgba(255, 255, 255, 0.92);
        background: #ffffff;
        color: #b50f17;
        cursor: pointer;
        font: inherit;
        font-size: 24px;
        font-weight: 800;
    }

    .bigh-coming-soon-red-form button:disabled {
        cursor: not-allowed;
        opacity: 0.72;
    }

    @media (max-width: 767px) {
        .bigh-coming-soon-red-form {
            margin-top: 24px;
        }

        .bigh-coming-soon-red-form-row {
            min-height: 56px;
        }

        .bigh-coming-soon-red-form input[type="email"] {
            padding: 0 18px;
            font-size: 16px;
        }

        .bigh-coming-soon-red-form button {
            min-width: 126px;
            padding: 0 14px;
            font-size: 21px;
        }
    }

    @media (min-width: 768px) {
        .bigh-replacement-banner {
            padding: 180px 32px;
        }

        .bigh-coming-soon-red-banner {
            padding: 54px 32px;
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

        .bigh-completes-etu-banner .bigh-coming-soon-red-content h1 {
            font-size: clamp(1.53rem, 6.12vw, 2.04rem);
        }

        .bigh-coming-soon-red-content {
            transform: translateY(8px);
        }

        .bigh-coming-soon-red-content h1 {
            line-height: 0.96;
        }

        .bigh-coming-soon-red-content > p {
            margin-top: 18px !important;
            line-height: 1.3;
        }

        .bigh-coming-soon-red-banner {
            padding: 26px 20px;
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

    <?php if (!empty($isComingSoonRedSteve)) : ?>
    .bigh-steve-announcement-stage {
        position: sticky;
        z-index: 31;
        top: 64px;
        height: 50px;
        margin-top: -50px;
        background: #ffffff;
    }

    .header-top.bigh-steve-header {
        padding-bottom: 50px;
        background: #ffffff;
    }

    .header-top.bigh-steve-header > nav {
        position: relative;
        z-index: 1;
        background: #ffffff;
    }

    .header-top.bigh-steve-header.scrolled {
        box-shadow: none;
    }

    .header-top.bigh-steve-header.scrolled > nav {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .bigh-steve-announcement-card {
        position: absolute;
        z-index: 31;
        top: 7px;
        left: 50%;
        box-sizing: border-box;
        display: grid;
        grid-template-columns: 68px minmax(0, 1fr) minmax(270px, 300px);
        grid-template-rows: auto auto;
        grid-template-areas:
            "date copy form"
            "date description form";
        align-content: center;
        column-gap: 16px;
        row-gap: 3px;
        width: min(84%, 1280px);
        min-height: 86px;
        margin: 0;
        padding: 8px 18px;
        transform: translateX(-50%);
        border-radius: 18px;
        background: #d71920;
        box-shadow: 0 8px 22px rgba(0, 0, 0, 0.22);
        color: #ffffff;
    }

    .bigh-steve-announcement-date {
        grid-area: date;
        grid-row: 1 / 3;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 68px;
        height: 68px;
        border-radius: 10px;
        background: #ffffff;
        color: #11191d;
        font-variant-numeric: tabular-nums;
        text-align: center;
        text-decoration: none;
    }

    .bigh-steve-announcement-date-month {
        color: #d71920;
        font-size: 10px;
        font-weight: 800;
        letter-spacing: 0.15em;
        line-height: 1;
    }

    .bigh-steve-announcement-date-day {
        margin-top: 2px;
        font-size: 32px;
        font-weight: 800;
        line-height: 0.98;
    }

    .bigh-steve-announcement-date-year {
        margin-top: 3px;
        color: #4b5563;
        font-size: 10px;
        line-height: 1;
    }

    .bigh-steve-announcement-copy {
        grid-area: copy;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 3px;
        min-width: 0;
    }

    .bigh-steve-announcement-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 3px 9px;
        border-radius: 999px;
        background: #f4f7f8;
        color: #172126;
        font-size: 10px;
        font-weight: 800;
        letter-spacing: 0.12em;
        line-height: 1.15;
        text-transform: uppercase;
    }

    .bigh-steve-announcement-badge-dot {
        width: 8px;
        height: 8px;
        flex: 0 0 8px;
        border-radius: 50%;
        background: #11b865;
        box-shadow: 0 0 0 3px rgba(17, 184, 101, 0.14);
    }

    .bigh-steve-announcement-title {
        margin: 0;
        color: #ffffff;
        font-size: clamp(17px, 1.75vw, 21px);
        font-weight: 800;
        letter-spacing: 0.02em;
        line-height: 1.1;
        text-transform: uppercase;
    }

    .bigh-steve-announcement-description {
        grid-area: description;
        align-self: start;
        margin: 0;
        color: #ffffff;
        font-size: 13px;
        font-weight: 500;
        line-height: 1.2;
    }

    .bigh-steve-announcement-form {
        grid-area: form;
        grid-row: 1 / 3;
        align-self: center;
        display: flex;
        align-items: center;
        min-width: 0;
        height: 42px;
        overflow: hidden;
        padding: 3px;
        border-radius: 999px;
        background: #ffffff;
    }

    .bigh-steve-announcement-form input[type="email"] {
        box-sizing: border-box;
        min-width: 0;
        height: 100%;
        flex: 1 1 auto;
        padding: 0 14px;
        border: 0;
        outline: 0;
        background: transparent;
        color: #172126;
        font: inherit;
        font-size: 11px;
    }

    .bigh-steve-announcement-form input[type="email"]::placeholder {
        color: #7a8388;
        opacity: 1;
    }

    .bigh-steve-announcement-form button {
        box-sizing: border-box;
        min-width: 106px;
        height: 100%;
        flex: 0 0 106px;
        padding: 0 10px;
        border: 0;
        border-radius: 999px;
        background: #071013;
        color: #ffffff;
        cursor: pointer;
        font: inherit;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        white-space: nowrap;
    }

    .bigh-steve-announcement-form button:hover {
        background: #1b292e;
    }

    .bigh-replacement-banner.bigh-steve-black-hero {
        padding: 84px 20px 120px;
        background: #000000;
    }

    <?php if (!empty($isComingSoonRedSteveUnder)) : ?>
    .bigh-steve-black-hero--under {
        flex-direction: column;
    }

    .bigh-replacement-banner.bigh-steve-black-hero.bigh-steve-black-hero--under {
        --under-hero-spacing: 56px;
        gap: var(--under-hero-spacing);
        padding-top: var(--under-hero-spacing);
    }

    .bigh-steve-black-hero--under .bigh-steve-announcement-stage--under {
        position: static;
        z-index: auto;
        top: auto;
        display: flex;
        justify-content: center;
        width: 100%;
        height: auto;
        margin: 0;
        background: transparent;
    }

    .bigh-steve-black-hero--under .bigh-steve-announcement-stage--under .bigh-steve-announcement-card {
        position: relative;
        z-index: auto;
        top: auto;
        left: auto;
        width: min(84vw, 1280px);
        margin: 0 auto;
        transform: none;
    }

    @media (max-width: 767px) {
        .bigh-replacement-banner.bigh-steve-black-hero.bigh-steve-black-hero--under {
            --under-hero-spacing: clamp(32px, 8.25vw, 56px);
        }

        .bigh-steve-black-hero--under .bigh-steve-announcement-stage--under .bigh-steve-announcement-card {
            width: 100%;
        }
    }
    <?php endif; ?>

    @media (min-width: 768px) {
        .header-top.bigh-steve-header > nav {
            padding-top: 0;
            padding-bottom: 0;
        }
    }

    @media (min-width: 640px) and (max-width: 767px) {
        .bigh-steve-announcement-stage {
            top: 96px;
        }
    }

    @media (max-width: 767px) {
        .header-top.bigh-steve-header {
            padding-bottom: clamp(240px, 41.7vw, 267px);
        }

        .bigh-steve-announcement-stage {
            height: clamp(240px, 41.7vw, 267px);
            margin-top: calc(0px - clamp(240px, 41.7vw, 267px));
        }

        .bigh-steve-announcement-card {
            top: 19px;
            grid-template-columns: clamp(68px, 11.25vw, 72px) minmax(0, 1fr);
            grid-template-rows: auto auto auto;
            grid-template-areas:
                "date copy"
                "description description"
                "form form";
            align-content: start;
            column-gap: clamp(16px, 3.4vw, 22px);
            row-gap: 0;
            width: calc(100% - clamp(32px, 8.125vw, 52px));
            min-height: clamp(190px, 35vw, 230px);
            padding: clamp(14px, 2.5vw, 18px);
            border-radius: 18px;
        }

        .bigh-steve-announcement-date {
            grid-row: 1;
            width: clamp(68px, 11.25vw, 72px);
            height: clamp(68px, 11.25vw, 72px);
            border-radius: 12px;
        }

        .bigh-steve-announcement-date-month {
            font-size: 11px;
        }

        .bigh-steve-announcement-date-day {
            font-size: clamp(27px, 5vw, 32px);
        }

        .bigh-steve-announcement-date-year {
            margin-top: 3px;
            font-size: 10px;
        }

        .bigh-steve-announcement-copy {
            align-self: start;
            gap: 6px;
        }

        .bigh-steve-announcement-badge {
            gap: 6px;
            padding: 4px 8px;
            font-size: clamp(9px, 1.8vw, 11px);
        }

        .bigh-steve-announcement-badge-dot {
            width: 8px;
            height: 8px;
            flex-basis: 8px;
        }

        .bigh-steve-announcement-title {
            font-size: clamp(17px, 3vw, 20px);
            line-height: 1.2;
        }

        .bigh-steve-announcement-description {
            grid-row: 2;
            margin-top: clamp(10px, 2vw, 14px);
            font-size: clamp(14px, 2.5vw, 16px);
            line-height: 1.35;
        }

        .bigh-steve-announcement-form {
            grid-area: auto;
            grid-row: 3;
            grid-column: 1 / -1;
            display: flex;
            gap: 0;
            height: 44px;
            margin-top: clamp(8px, 1.5vw, 10px);
            overflow: hidden;
            padding: 3px;
            border-radius: 999px;
            background: #ffffff;
        }

        .bigh-steve-announcement-form input[type="email"] {
            width: auto;
            height: 100%;
            flex: 1 1 auto;
            padding: 0 12px;
            font-size: clamp(13px, 2.2vw, 14px);
        }

        .bigh-steve-announcement-form button {
            width: auto;
            min-width: 96px;
            min-height: 0;
            flex: 0 0 106px;
            padding: 0 8px;
            font-size: clamp(10px, 1.8vw, 11px);
        }

        .bigh-replacement-banner.bigh-steve-black-hero {
            padding: clamp(48px, 10vw, 72px) 20px 84px;
        }

        .bigh-replacement-banner.bigh-steve-black-hero h1 {
            font-size: clamp(2.05rem, 7.5vw, 3rem);
            line-height: 1.05;
        }
    }

    @media (min-width: 520px) and (max-width: 767px) {
        .bigh-steve-announcement-time-note {
            display: block;
        }
    }

    <?php if (!empty($isComingSoonRedSteveOver)) : ?>
    .bigh-steve-announcement-date-month {
        font-size: 11px;
    }

    .bigh-steve-announcement-date-day {
        font-size: 36px;
    }

    .bigh-steve-announcement-date-year {
        font-size: 11px;
    }

    .bigh-steve-announcement-badge {
        font-size: 12px;
    }

    .bigh-steve-announcement-title {
        font-size: clamp(20px, 2vw, 24px);
    }

    .bigh-steve-announcement-description {
        font-size: 20px;
    }

    .bigh-steve-announcement-form input[type="email"] {
        font-size: 13px;
    }

    .bigh-steve-announcement-form button {
        padding-right: 4px;
        padding-left: 4px;
        font-size: 13px;
        letter-spacing: 0.04em;
    }

    @media (min-width: 1024px) {
        .bigh-steve-announcement-date {
            align-self: center;
        }
    }

    @media (max-width: 767px) {
        .bigh-steve-announcement-date-month {
            font-size: 12px;
        }

        .bigh-steve-announcement-date-day {
            font-size: 32px;
        }

        .bigh-steve-announcement-date-year {
            font-size: 11px;
        }

        .bigh-steve-announcement-badge {
            font-size: 11px;
        }

        .bigh-steve-announcement-title {
            font-size: 20px;
        }

        .bigh-steve-announcement-description {
            font-size: 16px;
        }

        .bigh-steve-announcement-form input[type="email"] {
            font-size: 15px;
        }

        .bigh-steve-announcement-form button {
            font-size: 13px;
        }
    }
    <?php endif; ?>
    <?php endif; ?>
</style>

<?php
$news = include "./data/news-data.php";
$recentNewsItems = array_slice($news, !empty($isSep2HomeBullets) ? 1 : 0, 4);
?>

<?php if (!empty($isComingSoonRedSteve) && empty($isComingSoonRedSteveUnder)) : ?>
<div class="bigh-steve-announcement-stage">
    <section class="bigh-steve-announcement-card" aria-label="Special report announcement">
        <time class="bigh-steve-announcement-date" datetime="2026-10-<?= htmlspecialchars($bighAnnouncementCardDay ?? '20', ENT_QUOTES, 'UTF-8') ?>">
            <span class="bigh-steve-announcement-date-month">OCT</span>
            <span class="bigh-steve-announcement-date-day"><?= htmlspecialchars($bighAnnouncementCardDay ?? '20', ENT_QUOTES, 'UTF-8') ?></span>
            <span class="bigh-steve-announcement-date-year">2026</span>
        </time>
        <div class="bigh-steve-announcement-copy">
            <span class="bigh-steve-announcement-badge">
                <span class="bigh-steve-announcement-badge-dot" aria-hidden="true"></span>
                Special Report
            </span>
            <h2 class="bigh-steve-announcement-title">Major Milestone Announcement</h2>
        </div>
        <p class="bigh-steve-announcement-description">Join our broadcast October <?= htmlspecialchars($bighAnnouncementCardDay ?? '20', ENT_QUOTES, 'UTF-8') ?>, 2026 at <?php if (isset($bighAnnouncementTimeCopy)) : ?><?= htmlspecialchars($bighAnnouncementTimeCopy, ENT_QUOTES, 'UTF-8') ?><?php else : ?>(time <span class="bigh-steve-announcement-time-note">TBD)</span><?php endif; ?></p>
        <form id="jotformComingSoonRedSteve" action="https://submit.jotform.com/submit/242986385047065/" method="POST" autocomplete="off" class="bigh-steve-announcement-form">
            <input type="hidden" name="formID" value="242986385047065">
            <input type="email" name="q3_email" id="comingSoonRedSteveEmail" placeholder="Your email address" aria-label="Your email address" autocomplete="email" required>
            <button type="submit" id="submitButtonComingSoonRedSteve">Get the Link</button>
        </form>
    </section>
</div>
<?php elseif (!empty($isComingSoonRed) && empty($isComingSoonRedSteveUnder)) : ?>
<section class="bigh-replacement-banner bigh-coming-soon-red-banner<?= !empty($isComingSoonTexture) ? ' bigh-coming-soon-texture-banner' : '' ?><?= !empty($isComingSoonRedWithDate) ? ' bigh-coming-soon-red-date-banner' : '' ?><?= !empty($isCompletesEtu) ? ' bigh-completes-etu-banner' : '' ?> flex items-center justify-center" <?php if (!empty($isComingSoonWhite)) : ?>style="background-color: #ffffff;"<?php elseif (!empty($isCompletesEtu)) : ?>style="background-image: url('<?php echo $full_url; ?>/assets/images/completes-etu-background.png');"<?php elseif (!empty($isComingSoonTexture)) : ?>style="background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('<?php echo $full_url; ?>/assets/images/coming-soon-texture-light.png');"<?php else : ?>style="background-color: #d71920;"<?php endif; ?>>
    <div class="bigh-coming-soon-red-content w-full text-center">
        <h1 class="max-w-[1120px] mx-auto text-center text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight text-white">
            <?php if (!empty($isCompletesEtu)) : ?>
                NewHydrogen Completes Construction of Its ThermoLoop® Engineering Test Unit
            <?php else : ?>
                <span class="bigh-coming-soon-red-title">Coming Soon</span>
                <br>
                NewHydrogen to Make
                <br>
                a Special Announcement
            <?php endif; ?>
        </h1>
        <?php if (!empty($isComingSoonRedWithDate)) : ?>
            <p class="bigh-coming-soon-red-date">Date: WWWWWWWW</p>
        <?php endif; ?>
        <?php if (!empty($isCompletesEtu)) : ?>
            <h2 class="bigh-completes-etu-video-heading">Watch Special Report Webinar Now!</h2>
            <div class="bigh-completes-etu-video-placeholder" role="img" aria-label="Video Coming Soon">
                <div class="bigh-completes-etu-video-center" aria-hidden="true">
                    <div class="bigh-completes-etu-video-play">
                        <svg viewBox="0 0 24 24" focusable="false">
                            <path d="M8 5.8c0-.75.82-1.2 1.45-.8l10.1 6.2a.94.94 0 0 1 0 1.6l-10.1 6.2A.94.94 0 0 1 8 18.2V5.8Z" />
                        </svg>
                    </div>
                    <h2>Video Coming Soon</h2>
                </div>
            </div>
        <?php else : ?>
            <p class="max-w-[760px] mx-auto mt-8 px-4 text-center text-lg sm:text-xl lg:text-2xl font-normal leading-relaxed text-white">
                Sign up now to reserve your spot in our live event
            </p>
            <form id="jotformComingSoonRed" action="https://submit.jotform.com/submit/242986385047065/" method="POST" autocomplete="off" class="bigh-coming-soon-red-form">
                <input type="hidden" name="formID" value="242986385047065">
                <div class="bigh-coming-soon-red-form-row">
                    <input type="email" name="q3_email" id="comingSoonRedEmail" placeholder="Email" aria-label="Email" required>
                    <button type="submit" id="submitButtonComingSoonRed">Sign Up</button>
                </div>
            </form>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php if (empty($isNewhEtu)) : ?>
<section class="bigh-replacement-banner bg-black flex items-center justify-center px-5 sm:px-8<?= !empty($isComingSoonRedSteve) ? ' bigh-steve-black-hero' : '' ?><?= !empty($isComingSoonRedSteveUnder) ? ' bigh-steve-black-hero--under' : '' ?>">
    <?php if (!empty($isComingSoonRedSteveUnder)) : ?>
    <div class="bigh-steve-announcement-stage bigh-steve-announcement-stage--under">
        <section class="bigh-steve-announcement-card" aria-label="Special report announcement">
            <time class="bigh-steve-announcement-date" datetime="2026-10-20">
                <span class="bigh-steve-announcement-date-month">OCT</span>
                <span class="bigh-steve-announcement-date-day">20</span>
                <span class="bigh-steve-announcement-date-year">2026</span>
            </time>
            <div class="bigh-steve-announcement-copy">
                <span class="bigh-steve-announcement-badge">
                    <span class="bigh-steve-announcement-badge-dot" aria-hidden="true"></span>
                    Special Report
                </span>
                <h2 class="bigh-steve-announcement-title">Major Milestone Announcement</h2>
            </div>
            <p class="bigh-steve-announcement-description">Join our broadcast October 20, 2026 at (time <span class="bigh-steve-announcement-time-note">TBD)</span></p>
            <form id="jotformComingSoonRedSteve" action="https://submit.jotform.com/submit/242986385047065/" method="POST" autocomplete="off" class="bigh-steve-announcement-form">
                <input type="hidden" name="formID" value="242986385047065">
                <input type="email" name="q3_email" id="comingSoonRedSteveEmail" placeholder="Your email address" aria-label="Your email address" autocomplete="email" required>
                <button type="submit" id="submitButtonComingSoonRedSteve">Get the Link</button>
            </form>
        </section>
    </div>
    <?php endif; ?>
    <h1 class="max-w-[1120px] text-center text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight text-white">
        Using Heat and Water to Produce
        <br class="hidden sm:block">
        <?php if (!empty($bighHeadlineCompact)) : ?>
            <?= htmlspecialchars($bighHeadlineScaleWord ?? 'Massive', ENT_QUOTES, 'UTF-8') ?>
            <span class="bigh-headline-green" style="white-space: nowrap;">Clean Hydrogen</span>
        <?php else : ?>
            <?= htmlspecialchars($bighHeadlineScaleWord ?? 'Massive', ENT_QUOTES, 'UTF-8') ?> Amounts
            <br class="hidden sm:block">
            <span class="bigh-headline-second-line">of the World’s Cheapest <span class="bigh-headline-green" style="white-space: nowrap;">Clean Hydrogen</span></span>
        <?php endif; ?>
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
                <?php if (!empty($bighAnyHeatSourceCopy)) : ?>
                <p>ThermoLoop<sup class="bigh-trademark">®</sup> is engineered to couple with any source of heat, including nuclear microreactors and advanced nuclear technology, unlocking continuous, cheap, clean hydrogen production off-grid.</p>
                <?php else : ?>
                <p>ThermoLoop<sup class="bigh-trademark">®</sup> is engineered to couple with high-temperature nuclear microreactors and advanced nuclear technology, unlocking continuous, cheap, clean hydrogen production off-grid, while preserving flexibility for other high-temperature sources.</p>
                <?php endif; ?>
            </article>
            <article class="bigh-sep19-feature-card">
                <h3>The Scale Electrolyzers Can&apos;t <?= htmlspecialchars($bighHeadlineReachVerb ?? 'Reach', ENT_QUOTES, 'UTF-8') ?></h3>
                <p><?= htmlspecialchars($bighHydrogenDemandDescriptor ?? 'Global', ENT_QUOTES, 'UTF-8') ?> hydrogen demand requires true industrial scale, a threshold traditional electrolyzers have never <?= htmlspecialchars($bighParagraphReachVerb ?? 'reached', ENT_QUOTES, 'UTF-8') ?>. ThermoLoop<sup class="bigh-trademark">®</sup> heat-driven water splitting technology delivers the clearest path to massive amounts of the world&rsquo;s cheapest clean hydrogen production.</p>
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
            <?php if (!empty($bighMissionIndustrialScalePhrase)) : ?>
                <h3 class="text-center md:text-[42px] text-4xl" style="text-wrap: balance;">
                    Our mission is to <?= !empty($bighMissionUseHeatAndWaterCopy) ? 'use heat and water to produce' : 'help produce' ?> <span style="white-space: nowrap;">industrial-scale</span> <span class="bigh-brand-green">clean hydrogen</span>, and <?php if (!empty($bighMissionHelpUsherCopy)) : ?>help <?php endif; ?>usher in the <span class="text-black">clean hydrogen</span> economy that Goldman Sachs estimated to be worth <span class="text-black">$12 trillion</span>.
                </h3>
            <?php else : ?>
                <h3 class="text-left md:text-[42px] text-4xl">
                    Our mission is to help produce unlimited <br class="hidden md:inline-block" /> amounts of the world’s cheapest <span class="bigh-brand-green">clean <br class="hidden md:inline-block" /> hydrogen</span>, and usher in the <span class="bigh-brand-green">clean hydrogen</span> <br class="hidden md:inline-block" /> economy that Goldman Sachs estimated to be <br class="hidden md:inline-block" /> worth <span class="text-black">$12 trillion</span> in the near future.
                </h3>
            <?php endif; ?>
        </div>
    </div>
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <img src="./assets/images/h-icon.png" alt="hydrogen">
    </div>
</section>
<?php endif; ?>