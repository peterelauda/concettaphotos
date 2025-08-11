<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Concetta Photos - FAQs</title>
    <link rel="icon" type="image/png" href="{{ asset('head_logo.png') }}">

    <!-- Open Graph meta tags (Facebook, WhatsApp, LinkedIn, etc) -->
    <meta property="og:title" content="Concetta Photos - FAQs" />
    <meta property="og:description" content="Our Frequently Asked Questions" />
    <meta property="og:image" content="{{ url('faqs_seo_image.jpg') }}" />
    <meta property="og:url" content="https://www.concettaphotos.com/faqs" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Concetta Photos" />

    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Concetta Photos - FAQs" />
    <meta name="twitter:description" content="Our Frequently Asked Questions" />
    <meta name="twitter:image" content="{{ url('faqs_seo_image.jpg') }}" />

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
            font-weight: 400;
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

        .responsive-text {
            font-size: clamp(1.1rem, 2.5vw, 1.5rem);
            word-break: break-word;
            overflow-wrap: break-word;
            white-space: normal;
            text-align: left;
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
        }

        .chat-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }

        .chat-bubble {
            position: relative;
            padding: 1rem;
            border-radius: 1rem;
            margin-bottom: 1rem;
            max-width: 75%;
        }

        .admin-bubble {
            background-color: #EEEEEE;
            color: #000;
            align-self: flex-start;
            margin-right: auto;
        }

        .admin-bubble::before {
            content: "";
            position: absolute;
            top: 0.75rem;
            left: -10px;
            border: 10px solid transparent;
            border-right-color: #EEEEEE;
        }

        .client-bubble {
            background-color: #578FCA;
            color: #fff;
            align-self: flex-end;
            margin-left: auto;
        }

        .client-bubble::before {
            content: "";
            position: absolute;
            top: 0.75rem;
            right: -10px;
            border: 10px solid transparent;
            border-left-color: #578FCA;
        }

        .chat-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .chat-entry {
            display: flex;
            gap: 0.5rem;
            align-items: flex-start;
        }

        .chat-entry.client {
            flex-direction: row-reverse;
        }

        .category-title {
            margin-top: 3rem;
            margin-bottom: 1rem;
            font-weight: bold;
            font-size: 1.5rem;
            border-bottom: 2px solid #ccc;
            padding-bottom: 0.5rem;
        }

        .custom-dropdown .btn {
            border-top: 1px solid #578fca !important;
            border-bottom: 1px solid #578fca !important;
            font-size: 2rem !important;
            color: #578FCA !important;

        }

        .custom-dropdown .dropdown-toggle.collapsed::after {
            transform: rotate(0deg) !important;
            transition: transform 0.3s ease !important;
        }

        .custom-dropdown .dropdown-toggle:not(.collapsed)::after {
            transform: rotate(180deg) !important;
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

        .grecaptcha-badge {
            bottom: 135px !important;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>

<body>
    <section id="header">
        @include('layouts.navigation')
    </section>

    <section id="notification-faqs" class="position-fixed end-0 p-3" style="top: 100px; z-index: 1055;">
        @if(session('success'))
            <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive"
                aria-atomic="true" data-bs-delay="4000">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        @endif
    </section>

    <section id="picture" class="position-relative">
        <div class="position-relative w-100 d-none d-lg-flex" style="height: 636px;">
            <img src="{{ asset('faqs.jpg') }}" alt="about picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
        <div class="position-relative w-100 d-flex d-lg-none" style="height: 636px;">
            <img src="{{ asset('faqs_mobile.jpg') }}" alt="about picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
    </section>

    <section id="faqs">
        <div class="p-5 text-center">
            <div class="container">
                <h1 class="display-7 aesthetic-text-1 mb-3 lang-content lang-en">FAQs (Frequently Asked Questions)</h1>
                <h1 class="display-7 aesthetic-text-1 mb-3 lang-content lang-id d-none">FAQs (Pertanyaan yang Sering
                    Ditanyakan)</h1>
                <div class="col-7 mx-auto custom-border-divider mb-5 lang-content lang-en"></div>
                <div class="col-9 mx-auto custom-border-divider mb-5 lang-content lang-id d-none"></div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#photoSessionBooking"
                        aria-expanded="false" aria-controls="preweddingContent">
                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">
                                Photo
                                Session Booking</h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Booking Sesi Foto</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="photoSessionBooking">
                        <div class="row g-4">
                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">Is
                                    the
                                    deposit payment required
                                    at the time
                                    of booking?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah pembayaran DP
                                    wajib saat booking?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">Yes,
                                    a down
                                    payment is required.
                                    The purpose
                                    of the down payment is to secure the schedule for the day and date that the client
                                    wants,
                                    ensuring that there are no overlapping appointments and that the client gets a photo
                                    session
                                    slot. We prioritize and will give precedence to clients who make a down payment.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Wajib. Pembayaran DP bertujuan
                                    untuk mengunci slot jadwal pada hari & tanggal yang klien inginkan agar tidak ada
                                    jadwal
                                    yang bertumpuk atau tidak mendapatkan slot sesi foto. Kami memprioritaskan dan akan
                                    mendahulukan klien yang melakukan pembayaran DP.</div>
                            </div>

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">Is
                                    it
                                    possible to book the
                                    session in advance?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah bisa booking dari jauh-jauh hari?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">Yes,
                                    you
                                    can. We recommend
                                    booking as early as possible. If you already know the desired date for the photo
                                    session,
                                    you can contact us directly to book and pay the down payment.</div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Bisa.
                                    Saran kami, lebih cepat
                                    booking lebih baik. Jika sudah mengetahui tanggal yang diinginkan untuk sesi foto,
                                    dapat
                                    langsung menghubungi kami untuk booking dan membayar DP.</div>
                            </div>

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    What is the
                                    maximum number of
                                    days in advance that a photo session can be booked?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Maksimal booking sesi foto
                                    H-berapa hari?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">You
                                    can book
                                    a photo session one
                                    day in advance of the desired date. We strongly discourage and will not process
                                    last-minute
                                    bookings on the day of the photo session</div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Maksimal booking sesi foto H-1 dari tanggal yang diinginkan klien. Kami sangat tidak
                                    menyarankan dan tidak akan memproses booking dadakan pada hari H sesi foto.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#discountContent" aria-expanded="false"
                        aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Photo Packages
                                Promotion/Discount</h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Promosi/Diskon
                                Paket Foto</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="discountContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">Are
                                    there
                                    any promotions or
                                    discounts for photo packages?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah ada promo atau diskon
                                    untuk paket foto?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">The
                                    prices
                                    listed on the
                                    pricelist are net prices. Discounts and promotions will be announced through our
                                    social
                                    media channels. We recommend that clients follow our social media accounts
                                    (Instagram and
                                    TikTok) to stay updated on the latest promotions.</div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Harga
                                    yang tertera pada pricelist
                                    merupakan harga yang sudah nett. Diskon maupun promo akan diberitahukan melalui
                                    sosial media
                                    kami. Kami menyarankan agar klien dapat mengikuti sosial media kami (instagram dan
                                    tiktok)
                                    untuk mengetahui info promo terbaru.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#feesContent" aria-expanded="false"
                        aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Location Fees &
                                Transportation
                                Fees</h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">Retribusi
                                Lokasi & Biaya
                                Transportasi</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="feesContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">Are
                                    location fees and
                                    transportation fees included in the photo package?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah fee lokasi dan fee
                                    transportasi sudah termasuk dalam paket foto?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">No,
                                    they are
                                    not included.
                                    Transportation fees will be charged to the client based on the chosen location.
                                    Location
                                    fees are entirely the client's responsibility and should be paid directly to the
                                    staff at
                                    the location.</div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Belum. Fee transportasi akan
                                    dibebankan kepada klien sesuai dengan lokasi yang klien pilih. Fee lokasi ditanggung
                                    sepenuhnya oleh klien dan klien yang
                                    akan membayarnya langsung di lokasi kepada petugas.</div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#bestTimeContent" aria-expanded="false"
                        aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Best Time of Day
                                for a Photo
                                Session</h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">Waktu/Jam
                                yang Tepat
                                untuk Sesi Foto</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="bestTimeContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    When is the
                                    best time of day for
                                    a photo session?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Kapan waktu/jam yang tepat untuk
                                    sesi foto?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">The
                                    best
                                    times for a photo
                                    session are in the morning before 11 a.m. or in the afternoon after 3 p.m. These
                                    times
                                    correspond to the golden hours, which offer the best lighting for photography. If
                                    the
                                    session is done in the midday, the harsh and intense sunlight can create too much
                                    glare and
                                    harsh shadows.</div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Pagi
                                    hari dibawah jam 11 siang
                                    atau sore hari diatas jam 3 sore. rentang waktu tersebut merupakan situasi golden
                                    hour yang
                                    memiliki pencahayaan terbaik untuk melakukan sesi pemotretan. Bila pemotretan
                                    dilakukan di
                                    siang hari, selain matahari yang terik dan panas, cahaya juga terlalu keras dan
                                    silau.</div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#videoContent" aria-expanded="false"
                        aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Video Package
                                Without Photos</h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">Paket
                                Video Tanpa Foto</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="videoContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">Can
                                    you get
                                    a video package
                                    without including photos?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah bisa mengambil paket
                                    video tanpa foto?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">No,
                                    it isn't
                                    possible. The video
                                    package can only be obtained by choosing a package that includes both video and
                                    photo
                                    services or by adding the video option to a photo session.</div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Tidak
                                    bisa. Paket video hanya
                                    bisa didapatkan bila memilih paket yang sudah digabungkan dengan paket foto, atau
                                    dengan
                                    menambah add-on pada sesi foto.</div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#durationContent" aria-expanded="false"
                        aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Change Plan
                                After Down Payment</h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">Perubahan
                                Rencana Setelah DP</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="durationContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">Can
                                    you
                                    increase or decrease the
                                    duration of the photo session after making the down payment?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah bisa jika ingin menambah
                                    atau mengurangi durasi foto setelah DP?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    Clients are
                                    allowed to increase
                                    the duration of the photo session but not to decrease it. Please ensure you select
                                    the photo
                                    package with the most appropriate duration based on the number of people, location,
                                    or
                                    recommendations from our photography team.</div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Klien
                                    diperbolehkan untuk
                                    menambah durasi foto namun tidak diperbolehkan untuk mengurangi durasi foto. Harap
                                    pastikan
                                    telah memilih paket foto dengan durasi yang terbaik dilihat dari jumlah orang,
                                    lokasi,
                                    ataupun atas saran tim fotografer kami.</div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#rainingContent" aria-expanded="false"
                        aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Raining when
                                Photo Session</h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">Hujan
                                saat Sesi Foto</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="rainingContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    What if it
                                    rains on the day of
                                    the photo session?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Bagaimana jika hari H foto tetapi turun hujan?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">If
                                    it rains
                                    in the morning, we
                                    will wait until it stops. However, if it rains in the afternoon and the rain does
                                    not cease
                                    within an hour, the photo session will be rescheduled to the following day or as
                                    agreed
                                    upon.</div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Bila
                                    hujan terjadi di pagi hari,
                                    kita akan tunggu sampai reda. Tetapi bila hujan terjadi di sore hari, jika hujan
                                    tidak
                                    kunjung reda dalam jangka waktu 1 jam, maka sesi foto dijadwalkan ulang keesokan
                                    harinya
                                    atau sesuai kesepakatan.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#lateContent" aria-expanded="false"
                        aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Arrives Late for
                                the Photo Session</h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">Datang
                                Terlambat saat Sesi Foto</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="lateContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    What if the
                                    client arrives late
                                    for the photo session?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Bagaimana jika klien datang
                                    terlambat saat sesi foto?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">We
                                    allow a
                                    15-minute grace period
                                    for lateness. After this period, the photo session will proceed according to the
                                    scheduled
                                    time, regardless of whether the client has arrived or not.</div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Kami
                                    beri toleransi keterlambatan
                                    selama 15 menit. Setelah melewati batas toleransi tersebut, maka sesi foto akan
                                    dihitung
                                    sesuai jadwal baik klien sudah datang atau belum.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#portfolioContent" aria-expanded="false"
                        aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Photo Portfolio
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Portofolio Foto</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="portfolioContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    Where can
                                    you view the
                                    portofolio?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Contoh hasil fotonya bisa
                                    dilihat dimana?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    Clients can
                                    check our Instagram
                                    or TikTok at @concettaphotos for sample photos.</div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Klien
                                    bisa langsung cek di
                                    Instagram atau tiktok kami @concettaphotos</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#propertyContent" aria-expanded="false"
                        aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Photo Property
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Properti Foto</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="propertyContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">Can
                                    you
                                    bring photo props?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah boleh membawa properti foto?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">Yes,
                                    you
                                    can. Clients are free to
                                    bring any props they want to enhance their photo session. This can be discussed
                                    directly
                                    with our photography team.</div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Boleh. Klien bebas menentukan
                                    properti apa yang akan digunakan untuk menunjang sesi foto mereka tanpa terkecuali.
                                    Bisa
                                    langsung didiskusikan dengan tim fotografer kami.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#chooseContent" aria-expanded="false"
                        aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Choosing Photos
                                after Photo Session
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Memilih Foto setelah Sesi Foto</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="chooseContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    Will the
                                    client or the Concetta
                                    Photos team choose which photos to edit?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Nanti yang memilih foto untuk
                                    diedit itu apakah klien atau tim Concetta Photos?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">The
                                    Concetta
                                    Photos team will
                                    choose which photos to edit. Clients can trust us to select the best shots. They
                                    just need
                                    to relax and wait for the final photos.</div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Tim
                                    Concetta Photos yang akan
                                    memilih. Klien bisa percayakan kepada kami yang akan menyeleksi foto-foto yang
                                    terbaik.
                                    Klien hanya perlu duduk manis dan menunggu foto selesai :)</div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#whenContent" aria-expanded="false"
                        aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Time to Receive
                                the Final Photos
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Waktu untuk Menerima Foto Final</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="whenContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">How
                                    many
                                    days after the session
                                    will I receive the final photos?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    H+
                                    berapa saya bisa dapatkan
                                    hasil fotonya?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">The
                                    photos
                                    will be available as
                                    soon as 1 day after the session and no later than 3 days. The photos undergo an
                                    editing
                                    process first, and the duration of editing depends on the queue of other clients'
                                    photos.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Paling cepat H+1 dan paling lambat
                                    H+3. Foto akan melalui proses editing terlebih dahulu. Lamanya proses editing
                                    tergantung
                                    dari antrian foto klien-klien lainnya
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#receiveAllContent"
                        aria-expanded="false" aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Acceptable Photo
                                Limits
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Batasan Foto yang Diterima</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="receiveAllContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    Will I
                                    receive all the photo
                                    files?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah saya mendapatkan all
                                    files hasil foto?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">No,
                                    you will
                                    receive only the
                                    results specified in the pricelist. If you want all the photo files, you can add the
                                    all-files option.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Tidak. Hasil foto yang didapatkan sesuai dengan yang tertera di pricelist. Jika
                                    menginginkan
                                    all files foto, maka bisa menambah add-on all files.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#activeLinkContent"
                        aria-expanded="false" aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Google Drive
                                Link Active Duration
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Lama Aktif Link Google Drive</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="activeLinkContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">How
                                    long
                                    will the Google Drive
                                    link remain active?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Berapa lama link google drive akan aktif?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">1
                                    Month
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    1
                                    Bulan
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#unactiveLinkContent"
                        aria-expanded="false" aria-controls="preweddingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">If Google Drive
                                Link Unactive
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Jika Link Google Drive Mati</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="unactiveLinkContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    What should
                                    I do if the link is
                                    no longer active and I haven't downloaded all the photos?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apa
                                    yang harus saya
                                    lakukan ketika link tersebut
                                    tidak aktif dan saya belum
                                    download keseluruhan foto?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    Clients will
                                    incur an additional
                                    fee, as indicated in the pricelist add-ons, if they need the photos to be
                                    re-uploaded.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Klien
                                    akan dikenakan biaya
                                    tambahan lagi sesuai yang tertera di pricelist add-on jika ingin fotonya diupload
                                    kembali.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#rescheduleLinkContent"
                        aria-expanded="false" aria-controls="rescheduleContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Reschedule Photo
                                Session Date
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Reschedule Tanggal Sesi Foto</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="rescheduleLinkContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">Is
                                    it
                                    possible to reschedule the
                                    photo session date?</div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah bisa reschedule tanggal
                                    foto?</div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">The
                                    photo
                                    session can be
                                    rescheduled no later than 7 days before the agreed date. Please note that
                                    rescheduling is
                                    only allowed once.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Reschedule sesi foto dapat
                                    dilakukan paling lambat H-7 dari tanggal yang telah disepakati. Perlu diketahui,
                                    reschedule
                                    hanya dapat dilakukan sekali.
                                </div>
                            </div>
                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en mb-0">
                                    Rescheduling
                                    a photo session on
                                    the day of the shoot is not allowed. If you still wish to reschedule, clients are
                                    required
                                    to pay a reschedule fee in accordance with the terms and conditions provided along
                                    with the
                                    pricelist
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none mb-0">
                                    Reschedule sesi foto pada hari H
                                    tidak dapat dilakukan. Jika tetap ingin melakukan reschedule, klien diwajibkan
                                    membayar
                                    biaya reschedule sesuai dengan syarat dan ketentuan yang kami kirimkan bersamaan
                                    dengan
                                    pricelist.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#photoVideoBookingContent"
                        aria-expanded="false" aria-controls="photoVideoBookingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Book Photo &
                                Video Session</h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">Booking
                                Sesi Foto & Video</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="photoVideoBookingContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    Does the holiday & family photo package include video?
                                </div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah paket foto holiday & family sudah termasuk video?
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    Not including video
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Tidak termasuk video
                                </div>
                            </div>

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    Is it possible to book a photo session along with video coverage?
                                </div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah bisa booking sesi foto sekaligus video?
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    Yes, it’s possible. Please chat with our admin to get the add-on price list for
                                    video coverage.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Bisa. Silahkan chat admin kami untuk mendapatkan pricelist add-on untuk harga video
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#familySessionContent"
                        aria-expanded="false" aria-controls="familySessionContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Family Session
                                Photo Options</h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Pilihan Foto Sesi Keluarga</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="familySessionContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    For a family session, do the photos need to be taken together, or can individuals
                                    also have their own photos?
                                </div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Kalau booking family session apakah fotonya harus bareng-bareng terus atau bisa foto
                                    sendiri-sendiri juga?
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    You have the flexibility to choose. As long as it is within the booked session time,
                                    clients can opt for group photos or individual portraits, without any restrictions.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Bebas. Selama masih dalam waktu sesi foto yang telah dibooking, klien dibebaskan
                                    jika ingin foto bersama atau foto portrait sendiri tanpa terkecuali.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#splitPackageContent"
                        aria-expanded="false" aria-controls="splitPackageContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">
                                Splitting Time from Package
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Pembagian Waktu dari Paket
                            </h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="splitPackageContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    Can the 2-hour Holiday & Family package be split into different times (morning and
                                    afternoon) or different days (today and tomorrow)?
                                </div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah paket Holiday & Family 2 jam bisa dibagi beda waktu (pagi dan sore) atau beda
                                    hari (hari ini dan besok)?
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    No, the package is only valid for the same day and time.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Tidak bisa. Paket hanya berlaku di hari dan waktu yang sama.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#multipleSpotContent"
                        aria-expanded="false" aria-controls="multipleSpotContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">
                                Multiple Photo Spots in One Location
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Beberapa Spot Foto dalam Satu Lokasi
                            </h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="multipleSpotContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    If there are multiple photo spots within one location (such as a beach, garden,
                                    etc.), is it still considered as one location?
                                </div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Jika dalam 1 lokasi terdapat beberapa spot foto (misalnya pantai, taman, dll),
                                    apakah itu tetap dianggap sebagai 1 lokasi?
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    Yes, as long as the photo spots (such as a beach, garden, etc.) are within the same
                                    area, it will still be considered as one location.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Iya, selama spot foto tersebut (misalnya pantai, taman, dll) berada dalam 1 area
                                    yang sama, maka itu tetap dianggap sebagai 1 lokasi.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#photoFilesContent"
                        aria-expanded="false" aria-controls="photoFilesContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">
                                Getting All Photo Files
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Mendapatkan Semua File Foto
                            </h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="photoFilesContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    Will I receive all the photo files?
                                </div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah dapat semua file foto?
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    No, the number of photo files clients will receive is stated in the pricelist and
                                    varies depending on the selected session duration.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Tidak. Jumlah file foto yang akan klien dapatkan tertera pada pricelist (berbeda
                                    setiap durasi foto yang dipilih).
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    However, if clients wish to receive all photo files, please contact our admin to get
                                    the add-on pricelist for all files.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Namun, jika klien ingin mendapatkan semua file foto maka silakan hubungi admin untuk
                                    mendapatkan pricelist add-on untuk all files.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#fineEditContent" aria-expanded="false"
                        aria-controls="fineEditContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">
                                Requesting Fine Editing
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Request Fine Editing
                            </h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="fineEditContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    Can I request edits such as slimming arms, contouring the face, removing scars,
                                    etc.?
                                </div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apakah bisa request edit mengecilkan lengan, meniruskan muka, menghilangkan bekas
                                    luka, dan lain-lain?
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en mb-0">
                                    Yes, it's possible, but additional charges will apply. Please contact our admin to
                                    receive the add-on pricelist for fine editing.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none mb-0">
                                    Bisa, namun klien akan dikenakan biaya tambahan lagi. Silakan chat admin kami untuk
                                    mendapatkan pricelist add-on fine editing.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#editingProcessContent"
                        aria-expanded="false" aria-controls="editingProcessContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Editing Process
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">Proses
                                Editing</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="editingProcessContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    What editing processes are involved?
                                </div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apa saja proses editing yang dilakukan?
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    The editing processes include tone editing and fine editing. Tone editing involves
                                    adjustments to exposure, contrast, and similar aspects. Fine editing involves more
                                    detailed retouching and adjustments.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Editing tone dan fine editing. Editing hanya editing tone seperti exposure,
                                    contrast, dll.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#cinematicHighlightContent"
                        aria-expanded="false" aria-controls="cinematicHighlightContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Cinematic vs
                                Highlight Video</h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">Cinematic
                                vs Highlight Video</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="cinematicHighlightContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    What are cinematic and highlight videos?
                                </div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apa itu cinematic dan highlight video?
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    A cinematic video is a full-length video capturing the event in a comprehensive and
                                    artistic manner.
                                    A highlight video is a shorter summary or teaser of the main video, showcasing key
                                    moments.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Cinematic video adalah video berdurasi penuh yang merekam acara secara menyeluruh
                                    dan artistik.
                                    Highlight video adalah versi singkat atau teaser dari video utama, menampilkan
                                    momen-momen penting.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#vendorMuaDressContent"
                        aria-expanded="false" aria-controls="vendorMuaDressContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">
                                Vendor for MUA & Dress
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Vendor untuk MUA & Gaun
                            </h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="vendorMuaDressContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    Who are the vendors for makeup artists (MUA) and dresses?
                                </div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Siapa saja vendor untuk MUA dan gaunnya?
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    Currently, we partner with Mutha Wicaksana for makeup and hairdo, and with Carli
                                    Gown for dresses.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Sementara ini kami bekerjasama untuk MUA dan hairdo dengan Mutha Wicaksana dan gaun
                                    dengan Carli Gown.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#makeupHairdoContent"
                        aria-expanded="false" aria-controls="makeupHairdoContent">


                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">
                                Makeup & Hairdo with/out Following
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Makeup & Hairdo with/out Following
                            </h2>
                        </span>

                    </button>

                    <div class="collapse mt-3 px-4" id="makeupHairdoContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    What does "makeup & hairdo with/out following" mean?
                                </div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Apa itu makeup & hairdo with/out following?
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    If "with following," the MUA and hairdo team will stay at the location until the
                                    photo session is complete.
                                    If "without following," the MUA and hairdo team will only work before the photo
                                    session starts.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Kalau "with following", maka tim MUA dan hairdo akan ikut ke lokasi foto sampai
                                    selesai.
                                    Kalau "without following", maka tim MUA dan hairdo hanya bekerja sebelum sesi foto
                                    dimulai.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#photoSelectionContent"
                        aria-expanded="false" aria-controls="photoSelectionContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">
                                Photo Selection for Fine Editing
                            </h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">
                                Pemilihan Foto untuk Fine Editing
                            </h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="photoSelectionContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    How is the process for selecting photos for fine editing?
                                </div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Bagaimana mekanisme pemilihan foto untuk fine editing?
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    Photos selected for fine editing are chosen directly by the client, along with
                                    details or requests for specific edits.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Foto yang dipilih untuk tahap fine editing dipilih langsung oleh klien beserta
                                    keterangan/request bagian apa saja yang harus diedit.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="dropdown custom-dropdown w-100 mb-3">
                    <button
                        class="btn dropdown-toggle collapsed  w-100 rounded-0 text-start d-flex justify-content-between align-items-center border-bottom border-dark border-top border-start-0 border-end-0 py-3"
                        type="button" data-bs-toggle="collapse" data-bs-target="#fineEditingContent"
                        aria-expanded="false" aria-controls="fineEditingContent">

                        <span>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-en mb-0">Fine Editing
                                Duration</h2>
                            <h2 class="aesthetic-text-3 responsive-text lang-content lang-id d-none mb-0">Durasi
                                Fine Editing</h2>
                        </span>
                    </button>

                    <div class="collapse mt-3 px-4" id="fineEditingContent">
                        <div class="row g-4">

                            <div class="chat-entry client">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-plus-fill icon" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd"
                                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <div class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-en">
                                    How long does the fine editing process take?
                                </div>
                                <div
                                    class="chat-bubble client-bubble text-start custom-text-2 lang-content lang-id d-none">
                                    Berapa lama proses pengerjaan fine editing?
                                </div>
                            </div>

                            <div class="chat-entry admin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    class="bi bi-person-fill-lock icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
                                </svg>
                                <div class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-en">
                                    Approximately 7 days.
                                </div>
                                <div
                                    class="chat-bubble admin-bubble text-start custom-text-0 lang-content lang-id d-none">
                                    Kurang lebih 7 hari.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="inquiry">
        <div class="px-5 py-5 text-center bg-body-custom"> <svg xmlns="http://www.w3.org/2000/svg" width="77"
                height="77" fill="currentColor" class="bi bi-patch-question icon" viewBox="0 0 16 16">
                <path
                    d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.7 1.7 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745" />
                <path
                    d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z" />
                <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0" />
            </svg>

            <h1 class="display-5 aesthetic-text-1 mb-3">Inquiry</h1>

            <div class="form-center-wrapper d-flex justify-content-center align-items-center lang-content lang-en">
                <div class="col-md-7 col-lg-8 pb-0">

                    <form id="inquiry-form" action="{{ route('inquiry.store') }}" method="POST">
                        @csrf

                        <div class="row g-3 d-flex justify-content-center align-items-center">

                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label for="fullName" class="form-label custom-text-0">Full Name</label>
                                <input type="text" class="form-control custom-text-0" id="fullName" name="full_name"
                                    placeholder="Your Full Name" required>
                                <div class="invalid-feedback">Valid full name is required.</div>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <label for="phoneNumber" class="form-label custom-text-0">Phone Number</label>
                                <input type="text" class="form-control custom-text-0" id="phoneNumber"
                                    name="phone_number" placeholder="+6281234567890" required>
                                <div class="invalid-feedback">Valid phone number is required.</div>
                            </div>

                            <!-- Domicile -->
                            <div class="col-md-6">
                                <label for="domicile" class="form-label custom-text-0">Domicile</label>
                                <select id="domicile" name="domicile" class="form-select custom-text-0" required>
                                    <option value="">-- Select Domicile --</option>
                                    <option value="Badung">Badung</option>
                                    <option value="Bangli">Bangli</option>
                                    <option value="Buleleng">Buleleng</option>
                                    <option value="Gianyar">Gianyar</option>
                                    <option value="Jembrana">Jembrana</option>
                                    <option value="Karangasem">Karangasem</option>
                                    <option value="Klungkung">Klungkung</option>
                                    <option value="Tabanan">Tabanan</option>
                                    <option value="Denpasar">Denpasar</option>
                                </select>
                                <div class="invalid-feedback">Please enter your domicile.</div>
                            </div>

                            <!-- Country -->
                            <div class="col-md-6">
                                <label for="country" class="form-label custom-text-0">Country</label>
                                <select id="country" name="country" class="form-select mt-1 custom-text-0" required
                                    autofocus>
                                    <option value="">-- Select Country --</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands">Åland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic
                                        of
                                        The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                    </option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                        Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                        Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                    </option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The
                                        South
                                        Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying
                                        Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                </select>
                                <div class="invalid-feedback">Please select a valid country.</div>
                            </div>

                            <!-- Email -->
                            <div class="col-12">
                                <label for="email" class="form-label custom-text-0">Email</label>
                                <input type="email" class="form-control custom-text-0" id="email" name="email"
                                    placeholder="your@example.com" required>
                                <div class="invalid-feedback">Valid email is required.</div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <label for="message" class="form-label custom-text-0">Message</label>
                                <input type="text" class="form-control custom-text-0" id="message" name="message"
                                    placeholder="We would like to hear your message!" required>
                                <div class="invalid-feedback">Message required.</div>
                            </div>

                            <!-- Preference -->
                            <div class="col-12">
                                <label for="taste" class="form-label custom-text-0">Preference (Optional)</label>
                                <input type="text" class="form-control custom-text-0" id="taste" name="preference"
                                    placeholder="We would like to hear more about your wanted style in photo session!">
                            </div>

                            <!-- Category -->
                            <div class="col-md-6">
                                <label for="category" class="form-label custom-text-0">Category</label>
                                <select class="form-select custom-text-0" id="category" name="category" required>
                                    <option value="">-- Choose Session Category --</option>
                                    <option value="Holiday & Family">Holiday & Family</option>
                                    <option value="Couple">Couple</option>
                                    <option value="Prewedding">Prewedding</option>
                                    <option value="Wedding">Wedding</option>
                                    <option value="Branding">Branding</option>
                                </select>
                            </div>

                            <!-- Payment Method -->
                            <div class="col-md-6">
                                <label for="payment_method" class="form-label custom-text-0">Payment Method</label>
                                <select class="form-select custom-text-0" id="payment_method" name="payment_method"
                                    required>
                                    <option value="">-- Choose Payment Method --</option>
                                    <option value="Bank Transfer">Bank Transfer (Local Client)</option>
                                    <option value="Credit Card">Wise (International Client)</option>
                                </select>
                                <div class="invalid-feedback">Please select a payment method.</div>
                            </div>

                            <!-- Reference -->
                            <div class="col-12 mb-4">
                                <label for="reference" class="form-label custom-text-0">How did you hear about
                                    us?</label>
                                <input type="text" class="form-control custom-text-0" id="reference" name="reference"
                                    placeholder="e.g. Instagram, Google, Friend" required>
                                <div class="invalid-feedback">This field is required.</div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mb-4">
                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                            </div>

                        </div>
                    </form>

                    <h2 class="display-10 aesthetic-text-1 lang-content lang-en">Or</h2>
                    <h2 class="display-10 aesthetic-text-1 lang-content lang-id d-none">Atau</h2>
                    <a href="http://wa.me/6287762982309" class="btn btn-lg btn-primary mt-3 lang-content lang-en"
                        target="_blank" rel="noopener noreferrer">Contact
                        Us</a>
                    <a href="http://wa.me/6287762982309" class="btn btn-lg btn-primary mt-3 lang-content lang-id d-none"
                        target="_blank" rel="noopener noreferrer">Hubungi
                        Kami</a>
                </div>
            </div>

            <div
                class="form-center-wrapper d-flex justify-content-center align-items-center lang-content lang-id d-none">
                <div class="col-md-7 col-lg-8 pb-0">

                    <form id="inquiry-form-2" action="{{ route('inquiry.store') }}" method="POST">
                        @csrf

                        <div class="row g-3 d-flex justify-content-center align-items-center">

                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label for="fullName" class="form-label custom-text-0">Nama Lengkap</label>
                                <input type="text" class="form-control custom-text-0" id="fullName" name="full_name"
                                    placeholder="Masukan Nama Lengkapmu" required>
                                <div class="invalid-feedback">Nama lengkap harus diisi!</div>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <label for="phoneNumber" class="form-label custom-text-0">Nomer Telepon</label>
                                <input type="text" class="form-control custom-text-0" id="phoneNumber"
                                    name="phone_number" placeholder="+6281234567890" required>
                                <div class="invalid-feedback">Nomer telepon harus diisi!</div>
                            </div>

                            <!-- Domicile -->
                            <div class="col-md-6">
                                <label for="domicile" class="form-label custom-text-0">Domisili</label>
                                <select id="domicile" name="domicile" class="form-select custom-text-0" required>
                                    <option value="">-- Pilih Domisili --</option>
                                    <option value="Badung">Badung</option>
                                    <option value="Bangli">Bangli</option>
                                    <option value="Buleleng">Buleleng</option>
                                    <option value="Gianyar">Gianyar</option>
                                    <option value="Jembrana">Jembrana</option>
                                    <option value="Karangasem">Karangasem</option>
                                    <option value="Klungkung">Klungkung</option>
                                    <option value="Tabanan">Tabanan</option>
                                    <option value="Denpasar">Denpasar</option>
                                </select>
                                <div class="invalid-feedback">Please enter your domicile.</div>
                            </div>

                            <!-- Country -->
                            <div class="col-md-6">
                                <label for="country" class="form-label custom-text-0">Negara</label>
                                <select id="country-2" name="country" class="form-select mt-1 custom-text-0" required
                                    autofocus>
                                    <option value="">-- Pilih Negara --</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands">Åland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic
                                        of
                                        The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                    </option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                        Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                        Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                    </option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The
                                        South
                                        Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying
                                        Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                </select>
                                <div class="invalid-feedback">Negara harus diisi!</div>
                            </div>

                            <!-- Email -->
                            <div class="col-12">
                                <label for="email" class="form-label custom-text-0">Email</label>
                                <input type="email" class="form-control custom-text-0" id="email" name="email"
                                    placeholder="nama@contoh.com" required>
                                <div class="invalid-feedback">Email harus diisi!</div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <label for="message" class="form-label custom-text-0">Pesan</label>
                                <input type="text" class="form-control custom-text-0" id="message" name="message"
                                    placeholder="Kami ingin mendengar pesananmu!" required>
                                <div class="invalid-feedback">Pesan harus diisi!</div>
                            </div>

                            <!-- Preference -->
                            <div class="col-12">
                                <label for="taste" class="form-label custom-text-0">Preferensi (Opsional)</label>
                                <input type="text" class="form-control custom-text-0" id="taste" name="preference"
                                    placeholder="Kami ingin mendengar lebih banyak gaya foto dalam sesi foto yang kamu inginkan!">
                            </div>

                            <!-- Category -->
                            <div class="col-md-6">
                                <label for="category" class="form-label custom-text-0">Kategori</label>
                                <select class="form-select custom-text-0" id="category" name="category" required>
                                    <option value="">-- Pilih Kategori Sesi Foto --</option>
                                    <option>Holiday & Family</option>
                                    <option>Couple</option>
                                    <option>Prewedding</option>
                                    <option>Wedding</option>
                                    <option>Branding</option>
                                </select>
                            </div>

                            <!-- Payment Method -->
                            <div class="col-md-6">
                                <label for="payment_method" class="form-label custom-text-0">Metode Pembayaran</label>
                                <select class="form-select custom-text-0" id="payment_method" name="payment_method"
                                    required>
                                    <option value="">-- Pilih Metode Pembayaran --</option>
                                    <option value="bank_transfer">Bank Transfer (Klien Lokal)</option>
                                    <option value="credit_card">Wise (Klien Internasional)</option>
                                </select>
                                <div class="invalid-feedback">Mohon pilih metode pembayaran!</div>
                            </div>

                            <!-- Reference -->
                            <div class="col-12 mb-4">
                                <label for="reference" class="form-label custom-text-0">Bagaimana anda bisa tahu tentang
                                    kami?</label>
                                <input type="text" class="form-control custom-text-0" id="reference" name="reference"
                                    placeholder="contoh: Instagram, Google, Teman" required>
                                <div class="invalid-feedback">Mohon diisi juga!</div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mb-4">
                                <button type="submit" class="btn btn-lg btn-primary">Kirim</button>
                            </div>

                        </div>
                    </form>

                    <h2 class="display-10 aesthetic-text-1 lang-content lang-en">Or</h2>
                    <h2 class="display-10 aesthetic-text-1 lang-content lang-id d-none">Atau</h2>
                    <a href="http://wa.me/6287762982309" class="btn btn-lg btn-primary mt-3 lang-content lang-en"
                        target="_blank" rel="noopener noreferrer">Contact
                        Us</a>
                    <a href="http://wa.me/6287762982309" class="btn btn-lg btn-primary mt-3 lang-content lang-id d-none"
                        target="_blank" rel="noopener noreferrer">Hubungi
                        Kami</a>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        @include('partials.footer')
    </section>

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- jQuery dan Select2 JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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
            const toastElList = document.querySelectorAll('.toast');
            toastElList.forEach(function (toastEl) {
                const toast = new bootstrap.Toast(toastEl);
                toast.show();
            });
        });

        $(document).ready(function () {
            $('#country').select2({
                placeholder: "-- Select Country --",
                allowClear: true,
                width: '100%'
            });

            $('#country-2').select2({
                placeholder: "-- Pilih Negara --",
                allowClear: true,
                width: '100%'
            });

            if (!window.location.hash) {
                window.scrollTo(0, 0);
            }
        });
    </script>

    <script src="https://www.google.com/recaptcha/api.js?render=6Le8GJsrAAAAALJJ5kqD24IfHUDxDKtg5feF2-T6"></script>

    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', { action: 'submit' }).then(function (token) {
                const form = document.getElementById('inquiry-form');
                const input = document.createElement('input');
                input.setAttribute('type', 'hidden');
                input.setAttribute('name', 'g-recaptcha-response');
                input.setAttribute('value', token);
                form.appendChild(input);
            });
        });
        grecaptcha.ready(function () {
            grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', { action: 'submit' }).then(function (token) {
                const form = document.getElementById('inquiry-form-2');
                const input = document.createElement('input');
                input.setAttribute('type', 'hidden');
                input.setAttribute('name', 'g-recaptcha-response');
                input.setAttribute('value', token);
                form.appendChild(input);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>