<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Concetta Photos - Novita Family</title>
    <link rel="icon" type="image/png" href="{{ asset('head_logo.png') }}">

    <!-- Open Graph meta tags (Facebook, WhatsApp, LinkedIn, etc) -->
    <meta property="og:title" content="Concetta Photos - Client" />
    <meta property="og:description" content="Our Cient Photos." />
    <meta property="og:image" content="{{ url('novitafamily_mobile.jpg') }}" />
    <meta property="og:url" content="https://www.concettaphotos.com" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Concetta Photos" />

    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Concetta Photos - Client" />
    <meta name="twitter:description" content="Our Cient Photos." />
    <meta name="twitter:image" content="{{ url('novitafamily_mobile.jpg') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    <style>
        /* #3674B5 = Biru laut */
        /* #578FCA = Biru tua */
        /* #A1E3F9 = Biru langit */
        /* #D1F8EF = Biru muda */

        /* #F7F7F7 = Putih */
        /* #EEEEEE = Abu-abu muda */
        /* #393E46 = Hitam */
        /* #929AAB = Abu-abu tua */

        .transition-header {
            background-color: transparent;
            transition: background-color 0.7s ease, box-shadow 0.7s ease;
        }

        .scrolled {
            background-color: rgba(255, 255, 255) !important;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.7s ease;
        }

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
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5) !important;
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
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5) !important;
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

        #novitafamily {
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

        .img-modal {
            position: fixed;
            z-index: 1050;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.56);
            backdrop-filter: blur(3.5px);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .img-modal.show {
            display: flex;
        }

        .img-modal-content {
            max-width: 98%;
            max-height: 84%;
            object-fit: contain;
            box-shadow: 0 3.5px 14px rgba(0, 0, 0, 0.35);
            animation: zoom 0.3s ease-in-out;
        }

        .img-modal-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #3674B5;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            z-index: 1100;
        }

        .hidden-gallery {
            transition: all 0.4s ease-in-out;
        }

        @keyframes zoom {
            from {
                transform: scale(0.7);
            }

            to {
                transform: scale(1);
            }
        }

        @keyframes bounceDown {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(10px) rotate(0deg);
            }
        }

        @keyframes bounceUp {

            0%,
            100% {
                transform: translateY(0) rotate(180deg);
            }

            50% {
                transform: translateY(-10px) rotate(180deg);
            }
        }

        .carousel-chevron-down {
            animation: bounceDown 1s infinite ease-in-out;
        }

        .chevron-up {
            animation: bounceUp 1s infinite ease-in-out;
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
        <div class="position-relative w-100 d-none d-xl-flex" style="height: 636px;">
            <img src="{{ asset('novitafamily.jpg') }}" alt="Novita Family picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
        <div class="position-relative w-100 d-flex d-xl-none" style="height: 636px;">
            <img src="{{ asset('novitafamily_mobile.jpg') }}" alt="Novita Family picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
    </section>

    <section id="novitafamily">
        <div class="container-fluid py-5">
            <div class="px-4 py-3 text-center">
                <h1 class="display-5 aesthetic-text-1 mb-2 lang-content lang-en">Novita's Family Album</h1>
                <h1 class="display-5 aesthetic-text-1 mb-2 lang-content lang-id d-none">Album Keluarga Novita</h1>
                <div class="col-12 col-sm-12 col-md-9 col-lg-6 col-xl-3 mx-auto custom-border-divider mb-2"></div>
                <h1 class="display-7 aesthetic-text-3 mb-5 lang-content lang-en">At Bali Farm House</h1>
                <h1 class="display-7 aesthetic-text-3 mb-5 lang-content lang-id d-none">di Bali Farm House</h1>

                <div>

                    <div class="d-flex flex-wrap justify-content-center gap-1 px-3">
                        <div class="d-flex flex-column flex-grow-1 flex-shrink-0 gallery-column"
                            style="flex-basis: 180px;">
                            <img src="{{ asset('picture_10.jpg') }}" alt="picture 10" class="w-100 mb-1 preview-image"
                                id="picture_10">


                        </div>
                        <div class="d-flex flex-column flex-grow-1 flex-shrink-0 gallery-column"
                            style="flex-basis: 180px;">
                            <img src="{{ asset('picture_3.jpg') }}" alt="picture 3" class="w-100 mb-1 preview-image"
                                id="picture_3">
                            <img src="{{ asset('picture_4.jpg') }}" alt="picture 4" class="w-100 mb-1 preview-image"
                                id="picture_4">
                            <img src="{{ asset('picture_1.jpg') }}" alt="picture 1" class="w-100 mb-1 preview-image"
                                id="picture_1">
                        </div>
                        <div class="d-flex flex-column flex-grow-1 flex-shrink-0 gallery-column"
                            style="flex-basis: 180px;">
                            <img src="{{ asset('picture_5.jpg') }}" alt="picture 5" class="w-100 mb-1 preview-image"
                                id="picture_5">
                            <img src="{{ asset('picture_6.jpg') }}" alt="picture 6" class="w-100 mb-1 preview-image"
                                id="picture_6">
                        </div>
                        <div class="d-flex flex-column flex-grow-1 flex-shrink-0 gallery-column"
                            style="flex-basis: 180px;">
                            <img src="{{ asset('picture_7.jpg') }}" alt="picture 7" class="w-100 mb-1 preview-image"
                                id="picture_7">
                            <img src="{{ asset('picture_8.jpg') }}" alt="picture 8" class="w-100 mb-1 preview-image"
                                id="picture_8">
                            <img src="{{ asset('picture_2.jpg') }}" alt="picture 2" class="w-100 mb-1 preview-image"
                                id="picture_2">
                        </div>
                        <div class="d-flex flex-column flex-grow-1 flex-shrink-0 gallery-column"
                            style="flex-basis: 180px;">
                            <img src="{{ asset('picture_9.jpg') }}" alt="picture 9" class="w-100 mb-1 preview-image"
                                id="picture_9">

                        </div>
                    </div>

                    <div class="d-flex flex-wrap justify-content-center gap-1 px-3 hidden-gallery d-none">
                        <div class="d-flex flex-column flex-grow-1 flex-shrink-0 gallery-column"
                            style="flex-basis: 180px;">
                            <img src="{{ asset('picture_11.jpg') }}" alt="picture 11" class="w-100 mb-1 preview-image"
                                id="picture_11">
                            <img src="{{ asset('picture_12.jpg') }}" alt="picture 12" class="w-100 mb-1 preview-image"
                                id="picture_12">
                        </div>
                        <div class="d-flex flex-column flex-grow-1 flex-shrink-0 gallery-column"
                            style="flex-basis: 180px;">
                            <img src="{{ asset('picture_13.jpg') }}" alt="picture 13" class="w-100 mb-1 preview-image"
                                id="picture_13">
                            <img src="{{ asset('picture_14.jpg') }}" alt="picture 14" class="w-100 mb-1 preview-image"
                                id="picture_14">
                        </div>
                        <div class="d-flex flex-column flex-grow-1 flex-shrink-0 gallery-column"
                            style="flex-basis: 180px;">
                            <img src="{{ asset('picture_15.jpg') }}" alt="picture 15" class="w-100 mb-1 preview-image"
                                id="picture_15">
                            <img src="{{ asset('picture_16.jpg') }}" alt="picture 16" class="w-100 mb-1 preview-image"
                                id="picture_16">
                        </div>
                        <div class="d-flex flex-column flex-grow-1 flex-shrink-0 gallery-column"
                            style="flex-basis: 180px;">
                            <img src="{{ asset('picture_17.jpg') }}" alt="picture 17" class="w-100 mb-1 preview-image"
                                id="picture_17">
                            <img src="{{ asset('picture_18.jpg') }}" alt="picture 18" class="w-100 mb-1 preview-image"
                                id="picture_18">
                        </div>
                        <div class="d-flex flex-column flex-grow-1 flex-shrink-0 gallery-column"
                            style="flex-basis: 180px;">
                            <img src="{{ asset('picture_19.jpg') }}" alt="picture 19" class="w-100 mb-1 preview-image"
                                id="picture_19">
                            <img src="{{ asset('picture_20.jpg') }}" alt="picture 20" class="w-100 mb-1 preview-image"
                                id="picture_20">
                        </div>
                    </div>

                </div>

                <div class="text-center mt-5">
                    <a id="toggleGallery">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="white"
                            class="bi bi-chevron-down icon carousel-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="hook" class="bg-body-custom">
        <main class="container">
            <div
                class="p-4 p-md-5 rounded text-body-emphasis d-flex justify-content-center align-items-center text-center">
                <div class="col-lg-6 px-0">
                    <h2 class="display-7 aesthetic-text-1 mb-3 lang-content lang-en">Let's book your session now!</h2>
                    <h2 class="display-7 aesthetic-text-1 mb-3 lang-content lang-id d-none">Yuk, jadwalkan sesi kamu
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

    <div id="imgModal" class="img-modal">
        <span class="img-modal-close" id="modalClose">&times;</span>
        <img class="img-modal-content" id="modalImg" />
    </div>
</body>

</html>