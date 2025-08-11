<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Concetta Photos - Branding</title>
    <link rel="icon" type="image/png" href="{{ asset('head_logo.png') }}">

    <!-- Open Graph meta tags (Facebook, WhatsApp, LinkedIn, etc) -->
    <meta property="og:title" content="Branding Session" />
    <meta property="og:description"
        content="Professional images that bring your brand to life. Ideal for entrepreneurs, businesses, and creatives seeking impactful visual content." />
    <meta property="og:image" content="{{ url('branding_seo_image.jpg') }}" />
    <meta property="og:url" content="https://www.concettaphotos.com/branding" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Concetta Photos" />

    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Branding Session" />
    <meta name="twitter:description"
        content="Professional images that bring your brand to life. Ideal for entrepreneurs, businesses, and creatives seeking impactful visual content." />
    <meta name="twitter:image" content="{{ url('branding_seo_image.jpg') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    <style>
        .transition-header {
            background-color: transparent;
            transition: background-color 0.7s ease, box-shadow 0.7s ease;
        }

        .scrolled {
            background-color: rgba(255, 255, 255) !important;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.7s ease;
        }

        /* #3674B5 = Biru laut */
        /* #578FCA = Biru tua */
        /* #A1E3F9 = Biru langit */
        /* #D1F8EF = Biru muda */

        /* #F7F7F7 = Putih */
        /* #EEEEEE = Abu-abu muda */
        /* #393E46 = Hitam */
        /* #929AAB = Abu-abu tua */

        .bg-body-custom {
            background-color: #f7f7f7 !important;
        }

        .accordion-button,
        .nav-link {
            color: #3674b5 !important;
            font-family: "Jost", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 600 !important;
            font-style: normal !important;
            text-align: center;
        }

        .nav-link:hover {
            color: #a1e3f9 !important;
        }

        .lang-toggle {
            display: inline-block;
            position: relative;
        }

        .lang-toggle input {
            display: none;
        }

        .lang-toggle label {
            display: block;
            width: 60px;
            height: 35px;
            border: 2px solid #3674b5;
            border-radius: 30px;
            background: transparent;
            position: relative;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .lang-toggle .switch-thumb {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 27px;
            height: 27px;
            border-radius: 50%;
            background-color: white;
            background-image: url('{{ asset('en_flag.jpg') }}');
            background-size: cover;
            background-position: center;
            transition: all 0.3s;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
        }

        .lang-toggle input:checked+label .switch-thumb {
            left: 27px;
            background-image: url('{{ asset('id_flag.jpg') }}');
        }

        .btn-outline-primary {
            border-color: #3674b5 !important;
            color: #3674b5 !important;
            font-family: "Jost", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 600 !important;
            font-style: normal !important;
        }

        .btn-outline-primary:hover {
            border-color: #a1e3f9 !important;
            background-color: #a1e3f9 !important;
            color: #f7f7f7 !important;
        }

        .btn-outline-primary:active {
            border-color: #d1f8ef !important;
            background-color: #d1f8ef !important;
            color: #f7f7f7 !important;
        }

        .btn-primary {
            border-color: #3674b5 !important;
            background-color: #3674b5 !important;
            font-family: "Jost", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 600 !important;
            font-style: normal !important;
        }

        .btn-primary:hover {
            border-color: #a1e3f9 !important;
            background-color: #a1e3f9 !important;
            color: #f7f7f7 !important;
        }

        .btn-primary:active {
            border-color: #d1f8ef !important;
            background-color: #d1f8ef !important;
            color: #f7f7f7 !important;
        }

        .icon {
            fill: #3674b5 !important;
            transition: fill 0.3s !important;
        }

        .icon-2 {
            fill: #393e46 !important;
            transition: fill 0.3s !important;
        }

        .custom-text {
            color: #393e46 !important;
            font-family: "Jost", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 600 !important;
            font-style: normal !important;
        }

        .custom-text-0 {
            color: #393e46 !important;
            font-family: "Jost", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 400 !important;
            font-style: normal !important;
        }

        .custom-text-1 {
            color: #f7f7f7 !important;
            font-family: "Jost", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 600 !important;
            font-style: normal !important;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5) !important;
        }

        .custom-text-2 {
            color: #f7f7f7 !important;
            font-family: "Jost", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 400 !important;
            font-style: normal !important;
        }

        .custom-text-3 {
            color: #393e46 !important;
            font-family: "Jost", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 700 !important;
            font-style: normal !important;
        }

        .custom-text-4 {
            color: #f7f7f7 !important;
            font-family: "Jost", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 700 !important;
            font-style: normal !important;
        }

        .custom-text-5 {
            color: #3674b5 !important;
            font-family: "Jost", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 700 !important;
            font-style: normal !important;
        }

        .aesthetic-text-1 {
            color: #393e46 !important;
            font-family: "Baskervville", serif !important;
            font-optical-sizing: auto !important;
            font-weight: 700 !important;
            font-style: normal !important;
        }

        .aesthetic-text-2 {
            color: #393e46 !important;
            font-family: "Baskervville", serif !important;
            font-optical-sizing: auto !important;
            font-weight: 600 !important;
            font-style: normal !important;
        }

        .aesthetic-text-3 {
            color: #393e46 !important;
            font-family: "Baskervville", serif !important;
            font-optical-sizing: auto !important;
            font-weight: 400 !important;
            font-style: normal !important;
        }

        .aesthetic-text-4 {
            color: #f7f7f7 !important;
            font-family: "Baskervville", serif !important;
            font-optical-sizing: auto !important;
            font-weight: 700 !important;
            font-style: normal !important;
        }

        .aesthetic-text-5 {
            color: #f7f7f7 !important;
            font-family: "Baskervville", serif !important;
            font-optical-sizing: auto !important;
            font-weight: 600 !important;
            font-style: normal !important;
        }

        .aesthetic-text-6 {
            color: #f7f7f7 !important;
            font-family: "Baskervville", serif !important;
            font-optical-sizing: auto !important;
            font-weight: 400 !important;
            font-style: normal !important;
        }

        .custom-border {
            border-bottom: 1px solid #578fca;
        }

        .custom-border-divider {
            border-bottom: 5px solid #578fca;
        }

        .dropdown-item {
            color: #393E46 !important;
            font-family: "Jost", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 500 !important;
            font-style: normal !important;
        }

        .dropdown-item:hover {
            background-color: #A1E3F9 !important;
            color: #EEEEEE !important;
        }

        .dropdown-item:active {
            background-color: #D1F8EF !important;
            color: #F7F7F7 !important;
        }

        html {
            scroll-behavior: smooth;
        }

        #inquiry {
            scroll-margin-top: 120.55px;
        }

        .transition-header {
            background-color: transparent;
            transition: background-color 0.7s ease, box-shadow 0.7s ease;
        }

        .scrolled {
            background-color: rgba(255, 255, 255);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.7s ease;
        }

        #slide {
            margin-top: 0px;
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        .dropdown-menu {
            transition: none !important;
        }

        .accordion-item,
        .accordion-button,
        .accordion-button:not(.collapsed),
        .accordion-collapse {
            border: none !important;
            box-shadow: none !important;
            background-color: transparent !important;
            color: #3674B5 !important;
            font-family: "Jost", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 600 !important;
            font-style: normal !important;
        }

        .accordion-body a {
            font-weight: 400;
            color: #555;
            text-decoration: none;
            padding: 6px 0;
            display: block;
        }

        .accordion-body a:hover {
            color: #003366;
            text-decoration: underline;
        }

        .no-dropdown::after {
            display: none !important;
        }

        @media (max-width: 720px) {
            .copyright-text {
                font-size: 0.8rem;
            }

            .gallery-column {
                flex-basis: 100% !important;
                max-width: 100%;
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0.7);
            }

            to {
                transform: scale(1);
            }
        }

        .image-hover-wrapper {
            display: block;
            position: relative;
            border-radius: 15px 15px 0 0;
            width: 100%;
        }

        .image-hover-container {
            position: relative;
            overflow: hidden;
            border-radius: 15px 15px 0 0;
            height: 280px;
        }

        .image-hover-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
            transition: transform 0.7s ease;
        }

        .image-hover-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 15px 15px 0 0;
            background-color: rgba(0, 123, 255, 0);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            opacity: 0;
            transition: background-color 0.7s ease, opacity 0.7s ease;
        }

        .image-hover-overlay h1,
        .image-hover-overlay h4 {
            margin: 0.25rem 0;
        }

        .image-hover-container:hover .image-hover-img {
            transform: scale(1.14);
            transition: transform 0.7s ease;
            border-radius: 15px 15px 0 0;
        }

        .image-hover-container:hover .image-hover-overlay {
            background-color: #578fca;
            border-radius: 15px 15px 0 0;
            opacity: 0.77;
        }

        .dropdown-submenu .dropdown-menu {
            display: none !important;
            position: absolute !important;
            top: 0 !important;
            left: 100% !important;
            margin-top: -0.25rem !important;
            z-index: 1000 !important;
        }

        .dropdown-submenu .dropdown-menu.show {
            display: block !important;
        }

        .submenu-arrow {
            font-size: 20px;
            margin-left: auto;
            margin-bottom: 2px;
        }

        .dropdown-submenu>.dropdown-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dropdown-submenu>.dropdown-toggle::after {
            display: none !important;
        }

        .submenu-list {
            display: none;
        }

        .submenu-list.show {
            display: block;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>

<body>
    <section id="header">
        @include('layouts.navigation')
    </section>

    <section id="picture" class="position-relative">
        <div class="position-relative w-100 d-none d-md-flex" style="height: 636px;">
            <img src="{{ asset('branding.jpg') }}" alt="Holiday and Family Picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
        <div class="position-relative w-100 d-flex d-md-none" style="height: 636px;">
            <img src="{{ asset('branding_mobile.jpg') }}" alt="Holiday and Family Picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
    </section>

    <section id="holidayclient">
        <main class="container px-4">
            <div
                class="p-4 p-md-5 mb-4 text-body-emphasis d-flex justify-content-center align-items-center text-center">
                <div class="col-lg-6 px-0">
                    <h2 class="display-5 aesthetic-text-1 mt-3">Branding</h2>
                    <div class="col-10 col-md-8 col-lg-6 mx-auto pt-3 custom-border-divider"></div>
                </div>
            </div>

            <div class="album">
                <div class="container pb-5 px-0">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3 g-4">
                        <div class="col">
                            <div class="card rounded-4 h-100 shadow-sm">
                                <a href="/corenationsportwearbranding" class="image-hover-wrapper text-decoration-none">
                                    <div class="image-hover-container">
                                        <img src="{{ asset('sportwear_card.jpg') }}" alt="Sportwear Picture"
                                            class="card-img-top image-hover-img">
                                        <div class="image-hover-overlay p-4">
                                            <h2 class="aesthetic-text-5 lang-content lang-en">Corenation Sportwear
                                                Branding
                                            </h2>
                                            <h2 class="aesthetic-text-5 lang-content lang-id d-none">Branding Sportwear
                                                Corenation</h2>
                                            <h5 class="custom-text-2 lang-content lang-en">See more Corenation Sportwear
                                                branding
                                                Photos</h5>
                                            <h5 class="custom-text-2 lang-content lang-id d-none">Lihat lebih banyak
                                                foto-foto Branding Sportwear Corenation
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h3 class="card-text aesthetic-text-1 lang-content lang-en">Corenation Sportwear
                                        Branding
                                    </h3>
                                    <h3 class="card-text aesthetic-text-1 lang-content lang-id d-none">Branding
                                        Sportwear
                                        Corenation</h3>
                                    <p class="card-text custom-text-0 lang-content lang-en">
                                        Sportwear’s brand transformation with Corenation — shaping a powerful identity
                                        with
                                        purposeful meaning.
                                    </p>
                                    <p class="card-text custom-text-0 lang-content lang-id d-none">
                                        Transformasi identitas Sportwear bersama Corenation, merangkai kekuatan brand
                                        dengan
                                        makna yang mendalam.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="/corenationsportwearbranding"
                                                class="btn btn-sm btn-primary rounded-3 lang-content lang-en">View
                                                More</a>
                                            <a href="/corenationsportwearbranding"
                                                class="btn btn-sm btn-primary rounded-3 lang-content lang-id d-none">Lihat
                                                Lebih
                                                Banyak</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card rounded-4 h-100 shadow-sm">
                                <a href="/corenationswimwearbranding" class="image-hover-wrapper text-decoration-none">
                                    <div class="image-hover-container">
                                        <img src="{{ asset('swimwear_card.jpg') }}" alt="Swimwear Picture"
                                            class="card-img-top image-hover-img">
                                        <div class="image-hover-overlay p-4">
                                            <h2 class="aesthetic-text-5 lang-content lang-en">Corenation Swimwear
                                                Branding
                                            </h2>
                                            <h2 class="aesthetic-text-5 lang-content lang-id d-none">Branding Baju
                                                Renang
                                                Corenation</h2>
                                            <h5 class="custom-text-2 lang-content lang-en">See more Corenation Swimwear
                                                Branding
                                                Photos</h5>
                                            <h5 class="custom-text-2 lang-content lang-id d-none">Lihat lebih banyak
                                                foto-foto Branding Baju Renang Corenation
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h3 class="card-text aesthetic-text-1 lang-content lang-en">Corenation Swimwear
                                        Branding</h3>
                                    <h3 class="card-text aesthetic-text-1 lang-content lang-id d-none">Branding Baju
                                        Renang
                                        Corenation</h3>
                                    <p class="card-text custom-text-0 lang-content lang-en">
                                        Corenation redefines swimwear branding — blending style, function, and a bold
                                        identity.
                                    </p>
                                    <p class="card-text custom-text-0 lang-content lang-id d-none">
                                        Sentuhan baru Corenation dalam branding baju renang — memadukan gaya, fungsi,
                                        dan identitas yang kuat.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group"> <a href="/corenationswimwearbranding"
                                                class="btn btn-sm btn-primary rounded-3 lang-content lang-en">View
                                                More</a>
                                            <a href="/corenationswimwearbranding"
                                                class="btn btn-sm btn-primary rounded-3 lang-content lang-id d-none">Lihat
                                                Lebih
                                                Banyak</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card rounded-4 h-100 shadow-sm">
                                <a href="/tamakidsbranding" class="image-hover-wrapper text-decoration-none">
                                    <div class="image-hover-container">
                                        <img src="{{ asset('tamakids_card.jpg') }}" alt="Couple Picture"
                                            class="card-img-top image-hover-img">
                                        <div class="image-hover-overlay p-4">
                                            <h2 class="aesthetic-text-5 lang-content lang-en">Tama Kids
                                                Branding
                                            </h2>
                                            <h2 class="aesthetic-text-5 lang-content lang-id d-none">Branding Tama Kids
                                            </h2>
                                            <h5 class="custom-text-2 lang-content lang-en">See more Tama Kids
                                                Branding
                                                Photos</h5>
                                            <h5 class="custom-text-2 lang-content lang-id d-none">Lihat lebih banyak
                                                foto-foto Branding Tama Kids
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h3 class="card-text aesthetic-text-1 lang-content lang-en">Tama Kids
                                        Branding</h3>
                                    <h3 class="card-text aesthetic-text-1 lang-content lang-id d-none">Branding Tama
                                        Kids</h3>
                                    <p class="card-text custom-text-0 lang-content lang-en">
                                        Tama Kids steps into a vibrant new look—playful branding designed to grow with
                                        every little dreamer.
                                    </p>
                                    <p class="card-text custom-text-0 lang-content lang-id d-none">
                                        Tama Kids hadir dengan wajah baru—branding yang ceria, penuh warna, dan siap
                                        tumbuh bersama si kecil.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group"> <a href="/tamakidsbranding"
                                                class="btn btn-sm btn-primary rounded-3 lang-content lang-en">View
                                                More</a>
                                            <a href="/tamakidsbranding"
                                                class="btn btn-sm btn-primary rounded-3 lang-content lang-id d-none">Lihat
                                                Lebih
                                                Banyak</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </main>
        <div class="col-10 col-md-8 col-lg-6 mx-auto pt-4 custom-border"></div>
    </section>

    <section id="hook">
        <main class="container">
            <div
                class="p-4 p-md-5 rounded text-body-emphasis d-flex justify-content-center align-items-center text-center">
                <div class="col-lg-6 px-0">
                    <h2 class="display-7 aesthetic-text-1 mb-3 lang-content lang-en">Let's book your session now!</h2>
                    <h2 class="display-7 aesthetic-text-1 lang-content lang-id d-none">Yuk, jadwalkan sesi kamu
                        sekarang!</h2>
                    <h5 class="display-10 custom-text-0 lang-content lang-en">Are those photos aligned with your taste?
                    </h5>
                    <h5 class="display-10 custom-text-0 lang-content lang-id d-none">Apakah foto-foto tersebut sesuai
                        dengan seleramu?</h5>
                    <a href="/faqs#inquiry" type="button" class="btn btn-primary btn-lg my-3 lang-content lang-en">Book
                        Now!</a>
                    <a href="/faqs#inquiry" type="button"
                        class="btn btn-primary btn-lg my-3 lang-content lang-id d-none">Booking Sekarang!</a>
                </div>
            </div>
        </main>
    </section>

    <section id="footer">
        @include('partials.footer')
    </section>

    <script>
        window.addEventListener("scroll", function () {
            const header = document.getElementById("mainHeader");
            if (window.scrollY > 14) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });

        document.addEventListener("DOMContentLoaded", function () {
            const switches = document.querySelectorAll("#langSwitch, #langSwitch1");
            const langEN = document.querySelectorAll(".lang-en");
            const langID = document.querySelectorAll(".lang-id");

            function updateLanguageUI(lang) {
                if (lang === "id") {
                    langEN.forEach(el => el.classList.add("d-none"));
                    langID.forEach(el => el.classList.remove("d-none"));
                    switches.forEach(sw => sw.checked = true);
                } else {
                    langEN.forEach(el => el.classList.remove("d-none"));
                    langID.forEach(el => el.classList.add("d-none"));
                    switches.forEach(sw => sw.checked = false);
                }
            }

            const savedLang = localStorage.getItem("selectedLang") || "id";
            updateLanguageUI(savedLang);

            switches.forEach(switcher => {
                switcher.addEventListener("change", function () {
                    const lang = switcher.checked ? "id" : "en";
                    localStorage.setItem("selectedLang", lang);
                    updateLanguageUI(lang);
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const offcanvasEl = document.getElementById('mobileMenu');
            const offcanvas = bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl);

            offcanvasEl.querySelectorAll('a.nav-link, a.accordion-button, a.text-decoration-none').forEach(function (link) {
                link.addEventListener('click', function () {
                    offcanvas.hide();
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            const modal = document.getElementById("imgModal");
            const modalImg = document.getElementById("modalImg");
            const closeBtn = document.getElementById("modalClose");

            document.querySelectorAll("img.preview-image").forEach(img => {
                img.addEventListener("click", () => {
                    modalImg.src = img.src;
                    modalImg.alt = img.alt;
                    modal.classList.add("show");
                });
            });

            closeBtn.onclick = function () {
                modal.classList.remove("show");
            };

            window.onclick = function (event) {
                if (event.target === modal) {
                    modal.classList.remove("show");
                }
            };
        });

        document.addEventListener("DOMContentLoaded", function () {
            const toggleButtons = document.querySelectorAll("[id^='toggleGallery']");

            toggleButtons.forEach(button => {
                const icon = button.querySelector("svg");
                const hiddenGallery = button.closest("section").querySelectorAll(".hidden-gallery");
                let isExpanded = false;

                button.addEventListener("click", function () {
                    hiddenGallery.forEach(el => el.classList.toggle("d-none"));
                    isExpanded = !isExpanded;

                    icon.classList.toggle("carousel-chevron-down", !isExpanded);
                    icon.classList.toggle("chevron-up", isExpanded);

                    if (!isExpanded) {
                        const parentSection = button.closest("section");
                        if (parentSection) {
                            parentSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                    }
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            const submenuToggles = document.querySelectorAll('.dropdown-submenu > a');
            let manuallyOpened = null;

            document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(menu => {
                menu.classList.remove('show');
            });

            submenuToggles.forEach(toggle => {
                const parentLi = toggle.parentElement;
                const submenu = toggle.nextElementSibling;

                parentLi.addEventListener('mouseenter', () => {
                    if (manuallyOpened !== submenu) {
                        submenu.classList.add('show');
                    }
                });

                parentLi.addEventListener('mouseleave', () => {
                    if (manuallyOpened !== submenu) {
                        submenu.classList.remove('show');
                    }
                });

                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    const isOpen = submenu.classList.contains('show');

                    if (manuallyOpened === submenu) {
                        submenu.classList.remove('show');
                        manuallyOpened = null;
                    } else {
                        document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(menu => {
                            menu.classList.remove('show');
                        });

                        submenu.classList.add('show');
                        manuallyOpened = submenu;
                    }
                });
            });

            document.addEventListener('click', function (e) {
                if (!e.target.closest('.dropdown-menu')) {
                    document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(menu => {
                        menu.classList.remove('show');
                    });
                    manuallyOpened = null;
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            const submenuToggles = document.querySelectorAll('.submenu-toggle');

            submenuToggles.forEach(toggle => {
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    const submenu = this.nextElementSibling;

                    const isShown = submenu.classList.contains('show');

                    document.querySelectorAll('.submenu-list').forEach(list => {
                        list.classList.remove('show');
                    });

                    if (!isShown) {
                        submenu.classList.add('show');
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>