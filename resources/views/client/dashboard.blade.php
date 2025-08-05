<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Baskervville:ital,wght@0,400..700;1,400..700&display=swap"
    rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

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

    .btn-sm {
        border-radius: 4px !important;
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

    .motto {
        color: #393e46 !important;
        font-family: "Roboto Condensed", sans-serif !important;
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

    mark {
        background-color: transparent !important;
        font-weight: 600 !important;
        padding: 0 0.2rem !important;
        border-radius: 4px !important;
    }

    .custom-border {
        border-bottom: 1px solid #578fca;
    }

    .custom-border-divider {
        border-bottom: 5px solid #578fca;
    }

    .carousel-zoom img {
        transition: transform 0.7s ease;
    }

    .carousel-zoom:hover img {
        transform: scale(1.14);
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

    .custom-dropdown {
        height: 100%;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        font-size: 1.25rem;
    }

    button[aria-expanded="true"].custom-dropdown {
        background-color: #a1e3f9;
        border-color: #3674b5;
        color: #3674b5;
        height: 100%;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        font-size: 1.25rem;
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

    #opening {
        scroll-margin-top: 120.55px;
    }

    #testimonial {
        scroll-margin-top: 120.55px;
    }

    #service {
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

    #slide,
    #carouselExampleFade,
    .carousel-inner,
    .carousel-item,
    .carousel-item img {
        height: 100vh;
    }

    #carouselExampleCaptions1 .carousel-item img {
        height: 850px !important;
    }

    #carouselExampleCaptions1 .carousel-item .carousel-caption {
        height: 850px !important;
        top: 5% !important;
    }

    .carousel-item img {
        object-fit: cover;
    }

    .carousel-chevron-down {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1;
        text-decoration: none;
        animation: basketball-bounce 2.5s ease-in-out infinite;
    }

    .carousel-chevron-down svg {
        width: 40px;
        height: 40px;
        fill: white;
        filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.5));
        transition: transform 0.3s ease;
    }

    .carousel-chevron-down:hover svg {
        transform: scale(1.2);
    }

    @keyframes basketball-bounce {
        0% {
            transform: translate(-50%, 0);
        }

        10% {
            transform: translate(-50%, 25px);
        }

        20% {
            transform: translate(-50%, 0);
        }

        30% {
            transform: translate(-50%, 15px);
        }

        40% {
            transform: translate(-50%, 0);
        }

        50% {
            transform: translate(-50%, 8px);
        }

        60% {
            transform: translate(-50%, 0);
        }

        70% {
            transform: translate(-50%, 4px);
        }

        80% {
            transform: translate(-50%, 0);
        }

        100% {
            transform: translate(-50%, 0);
        }
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

    .zoom-on-scroll {
        transition: transform 1s ease;
        transform: scale(0.9);
        opacity: 1;
    }

    .zoom-on-scroll.zoomed {
        transform: scale(1);
        opacity: 1;
    }

    .custom-carousel-nav {
        --icon-color: #3674b5;
    }

    .custom-carousel-nav .carousel-control-prev,
    .custom-carousel-nav .carousel-control-next {
        width: auto;
        top: 50%;
        transform: translateY(45%);
        z-index: 1;
    }

    .custom-carousel-nav .carousel-control-prev {
        left: 15px;
    }

    .custom-carousel-nav .carousel-control-next {
        right: 15px;
    }

    .card {
        height: 450px !important;
    }

    @media (max-width: 720px) {
        .carousel-chevron-down {
            bottom: 140px;
        }

        .copyright-text {
            font-size: 0.8rem;
        }

        .card {
            height: fit-content !important;
        }
    }

    .custom-carousel-btn {
        background-color: transparent;
        border: none;
    }

    .custom-carousel-btn svg {
        fill: var(--icon-color);
    }

    .custom-carousel-nav .carousel-control-prev-icon,
    .custom-carousel-nav .carousel-control-next-icon {
        border-radius: 50%;
        width: 3rem;
        height: 3rem;
        background-size: 1.5rem;
        background-repeat: no-repeat;
        background-position: center;
    }

    .custom-carousel-nav .carousel-indicators {
        position: relative;
        margin-top: 1rem;
        bottom: unset;
        justify-content: center;
    }

    .custom-carousel-nav .carousel-indicators [data-bs-target] {
        background-color: var(--icon-color);
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin: 0 5px;
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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Client Dashboard</h2>
    </x-slot>

    <div class="p-6">
        <p>Welcome, Client!</p>
    </div>
</x-app-layout>

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
        const zoomElements = document.querySelectorAll(".zoom-on-scroll");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("zoomed");
                } else {
                    entry.target.classList.remove("zoomed");
                }
            });
        }, {
            threshold: 0.5
        });

        zoomElements.forEach(el => observer.observe(el));
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

    document.addEventListener('DOMContentLoaded', function () {
        const toastElList = [].slice.call(document.querySelectorAll('.toast'))
        toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl).show();
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>