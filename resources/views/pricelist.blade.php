<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Concetta Photos - Price List</title>
    <link rel="icon" type="image/png" href="{{ asset('head_logo.png') }}">

    <!-- Open Graph meta tags (Facebook, WhatsApp, LinkedIn, etc) -->
    <meta property="og:title" content="Concetta Photos - Price List" />
    <meta property="og:description" content="Our Price List in Prewedding Service" />
    <meta property="og:image" content="{{ url('pricelist_seo_image.jpg') }}" />
    <meta property="og:url" content="https://www.concettaphotos.com/pricelist" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Concetta Photos" />

    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Concetta Photos - Price List" />
    <meta name="twitter:description" content="Our Price List in Prewedding Service" />
    <meta name="twitter:image" content="{{ url('pricelist_seo_image.jpg') }}" />

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

        .fit-col {
            height: 320px !important;
        }

        .fit-col-1 {
            height: 370px !important;
        }

        .fit-col-2 {
            height: 420px !important;
        }

        .fit-col-3 {
            height: 395px !important;
        }

        .fit-col-4 {
            height: 440px !important;
        }

        @media (max-width: 720px) {
            .copyright-text {
                font-size: 0.8rem;
            }
        }

        @media (max-width: 1200px) {
            .fit-col {
                height: fit-content !important;
                max-width: 500px !important;
                margin: auto;
            }

            .fit-col-1 {
                height: fit-content !important;
                max-width: 500px !important;
                margin: auto;
            }

            .fit-col-2 {
                height: fit-content !important;
                max-width: 500px !important;
                margin: auto;
            }

            .fit-col-3 {
                height: fit-content !important;
                max-width: 500px !important;
                margin: auto;
            }

            .fit-col-4 {
                height: fit-content !important;
                max-width: 500px !important;
                margin: auto;
            }
        }

        .card-custom-color {
            border-color: #3674B5 !important;
        }

        .card-custom-color .card-header {
            background: linear-gradient(to bottom, #3674B5, #578FCA) !important;
        }

        .card-custom-color-1 {
            border-color: #3674B5 !important;
        }

        .card-custom-color-1 .card-header {
            background: linear-gradient(to bottom, #3674B5, #578FCA) !important;
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
        <div class="position-relative w-100 d-none d-lg-flex" style="height: 636px;">
            <img src="{{ asset('price.jpg') }}" alt="Price picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
        <div class="position-relative w-100 d-flex d-lg-none" style="height: 636px;">
            <img src="{{ asset('price_mobile.jpg') }}" alt="Price picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
    </section>

    <section id="disclaimer">
        <div class="container py-3">
            <div class="pricing-header p-5 mx-auto text-center">
                <h1 class="display-5 aesthetic-text-1 mb-3">Disclaimer</h1>
                <p class="fs-5 custom-text-0 mb-3 lang-content lang-en">We are committed to engaging with serious
                    potential clients and
                    welcome all inquiries and discussions. However, if a potential client demonstrates a lack of genuine
                    interest or commitment, we reserve the right to discontinue communication without prior notice.</p>

                <p class="fs-5 custom-text-0 mb-3 lang-content lang-id d-none">Kami berkomitmen untuk berinteraksi
                    dengan calon klien yang serius
                    dan menyambut semua jenis pertanyaan
                    serta diskusi. Namun, jika calon klien menunjukkan kurangnya minat atau komitmen (hit & run), kami
                    berhak untuk menghentikan komunikasi tanpa pemberitahuan sebelumnya.</p>

                <a href="/about#tac"><button type="button" class="btn btn-primary px-4 lang-content lang-en">Terms &
                        Conditions</button></a>
                <a href="/about#tac"><button type="button"
                        class="btn btn-primary px-4 lang-content lang-id d-none">Syarat & Ketentuan</button></a>
            </div>
        </div>
    </section>

    <section id="pricelist" class="bg-body-custom">
        <div class="container py-5 px-5">
            <main>
                <h1 class="display-5 text-center aesthetic-text-1 mt-3">Prewedding 2025</h1>
                <div class="col-10 col-sm-9 col-md-8 col-lg-6 col-xl-5 mx-auto custom-border-divider mb-5"></div>
                <div class="col-12 col-md-10 col-lg-8 mx-auto mt-5 custom-border"></div>
                <h2 class="display-7 text-center aesthetic-text-1 my-4 lang-content lang-en">Photo Only</h2>
                <h2 class="display-7 text-center aesthetic-text-1 my-4 lang-content lang-id d-none">Hanya Foto</h2>
                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-5 custom-border"></div>
                <div class="row row-cols-1 row-cols-xl-3 mb-4 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color fit-col">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Express</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">2 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">2 Jam</h6>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center flex-column text-center"
                                style="height: 100%;">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    1,699K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    1,699K</h1>
                                <ul class="list-unstyled mt-3 mb-3 custom-text-0">
                                    <li class="lang-content lang-en">1 location</li>
                                    <li class="lang-content lang-id d-none">1 lokasi</li>
                                    <li>100 edited + 20 fine edited</li>
                                    <li>Via Google Drive</li>
                                </ul>
                                <a href="/faqs#inquiry"><button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-en">Book</button></a>
                                <a href="/faqs#inquiry"><button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-id d-none">Pesan</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color fit-col">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Half Day</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">6 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">6 Jam</h6>
                            </div>
                            <div
                                class="card-body d-flex justify-content-between align-items-center flex-column text-center">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    3,399K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    3,399K</h1>
                                <ul class="list-unstyled mt-3 mb-4 custom-text-0">
                                    <li class="lang-content lang-en">2 locations</li>
                                    <li class="lang-content lang-id d-none">2 lokasi</li>
                                    <li>160 edited + 30 fine edited</li>
                                    <li>Via Google Drive</li>
                                </ul>
                                <a href="/faqs#inquiry"><button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-en">Book</button></a>
                                <a href="/faqs#inquiry"><button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-id d-none">Pesan</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color-1 fit-col">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Full Day</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">12 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">12 Jam</h6>
                            </div>
                            <div
                                class="card-body d-flex justify-content-between align-items-center flex-column text-center">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    5,899K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    5,899K</h1>
                                <ul class="list-unstyled mt-3 mb-4 custom-text-0">
                                    <li class="lang-content lang-en">up to 3 locations</li>
                                    <li class="lang-content lang-id d-none">Sampai 3 lokasi</li>
                                    <li>200 edited + 50 fine edited</li>
                                    <li>Via Google Drive</li>
                                </ul>
                                <a href="/faqs#inquiry"><button type="button"
                                        class="btn btn-primary px-4 me-md-2 lang-content lang-en">Book</button></a>
                                <a href="/faqs#inquiry"><button type="button"
                                        class="btn btn-primary px-4 me-md-2 lang-content lang-id d-none">Pesan</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-3 custom-border"></div>
                <h2 class="display-7 text-center aesthetic-text-1 my-4 lang-content lang-en">Photo & Video</h2>
                <h2 class="display-7 text-center aesthetic-text-1 my-4 lang-content lang-id d-none">Foto & Video</h2>
                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-5 custom-border"></div>

                <div class="row row-cols-1 row-cols-xl-3 mb-4 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color fit-col-1">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Express</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">2 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">2 Jam</h6>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center flex-column text-center"
                                style="height: 100%;">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    2,959K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    2,959K</h1>
                                <ul class="list-unstyled mt-3 mb-3 custom-text-0">
                                    <li class="lang-content lang-en">1 location</li>
                                    <li class="lang-content lang-id d-none">1 lokasi</li>
                                    <li class="lang-content lang-en">100 edited + 20 fine edited</li>
                                    <li class="lang-content lang-id d-none">100 edited + 20 fine edited</li>
                                    <li class="lang-content lang-en">2-3 minutes cinematic video</li>
                                    <li class="lang-content lang-id d-none">2-3 menit video sinematik</li>
                                    <li>Via Google Drive</li>
                                </ul>
                                <a href="/faqs#inquiry"><button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-en">Book</button></a>
                                <a href="/faqs#inquiry"><button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-id d-none">Pesan</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color fit-col-1">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Half Day</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">6 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">6 Jam</h6>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center flex-column text-center"
                                style="height: 100%;">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    5,099K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    5,099K</h1>
                                <ul class="list-unstyled mt-3 mb-3 custom-text-0">
                                    <li class="lang-content lang-en">2 locations</li>
                                    <li class="lang-content lang-id d-none">2 lokasi</li>
                                    <li class="lang-content lang-en">160 edited + 30 fine edited</li>
                                    <li class="lang-content lang-id d-none">160 edited + 30 fine edited</li>
                                    <li class="lang-content lang-en">2-3 minutes Cinematic video with drone</li>
                                    <li class="lang-content lang-id d-none">2-3 menit Video sinematik dengan drone</li>
                                    <li class="lang-content lang-en">1 minute highlight video</li>
                                    <li class="lang-content lang-id d-none">1 menit video sorotan</li>
                                    <li>Via Google Drive</li>
                                </ul>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-en">Book</button>
                                </a>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-id d-none">Pesan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color-1 fit-col-1">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Full Day</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">12 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">12 Jam</h6>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center flex-column text-center"
                                style="height: 100%;">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    8,499K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    8,499K</h1>
                                <ul class="list-unstyled mt-3 mb-3 custom-text-0">
                                    <li class="lang-content lang-en">3 locations</li>
                                    <li class="lang-content lang-id d-none">3 lokasi</li>

                                    <li class="lang-content lang-en">200 edited + 50 fine edited</li>
                                    <li class="lang-content lang-id d-none">200 edited + 50 fine edited</li>

                                    <li class="lang-content lang-en">2-3 minutes cinematic video with drone</li>
                                    <li class="lang-content lang-id d-none">2-3 menit video sinematik dengan drone</li>

                                    <li class="lang-content lang-en">1 minute highlight video</li>
                                    <li class="lang-content lang-id d-none">1 menit video sorotan</li>

                                    <li>Via Google Drive</li>
                                </ul>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 lang-content lang-en">Book</button>
                                </a>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 lang-content lang-id d-none">Pesan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-3 custom-border"></div>
                <h2 class="display-7 text-center aesthetic-text-1 my-4 lang-content lang-en">Photo & Video with MUA</h2>
                <h2 class="display-7 text-center aesthetic-text-1 my-4 lang-content lang-id d-none">Foto & Video dengan
                    MUA
                </h2>
                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-5 custom-border"></div>

                <div class="row row-cols-1 row-cols-xl-3 mb-4 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color fit-col-2">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Express</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">2 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">2 Jam</h6>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center flex-column text-center"
                                style="height: 100%;">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    3,549K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    3,549K</h1>
                                <ul class="list-unstyled mt-3 mb-3 custom-text-0">
                                    <li class="lang-content lang-en">1 location</li>
                                    <li class="lang-content lang-id d-none">1 lokasi</li>

                                    <li class="lang-content lang-en">100 edited + 20 fine edited</li>
                                    <li class="lang-content lang-id d-none">100 edited + 20 fine edited</li>

                                    <li class="lang-content lang-en">2-3 minutes cinematic video</li>
                                    <li class="lang-content lang-id d-none">2-3 menit video sinematik</li>

                                    <li>Via Google Drive</li>

                                    <li class="lang-content lang-en">Makeup & hair without following and no retouch</li>
                                    <li class="lang-content lang-id d-none">Makeup & rambut tanpa mengikuti dan tanpa
                                        retouch</li>

                                </ul>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-en">Book</button>
                                </a>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-id d-none">Pesan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color fit-col-2">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Half Day</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">6 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">6 Jam</h6>
                            </div>
                            <div
                                class="card-body d-flex justify-content-between align-items-center flex-column text-center">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    6,199K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    6,199K</h1>
                                <ul class="list-unstyled mt-3 mb-4 custom-text-0">
                                    <li class="lang-content lang-en">2 locations</li>
                                    <li class="lang-content lang-id d-none">2 lokasi</li>

                                    <li class="lang-content lang-en">160 edited + 30 fine edited</li>
                                    <li class="lang-content lang-id d-none">160 edited + 30 fine edited</li>

                                    <li class="lang-content lang-en">2-3 minutes cinematic video with drone</li>
                                    <li class="lang-content lang-id d-none">2-3 menit video sinematik dengan drone</li>

                                    <li class="lang-content lang-en">1 minute highlight video</li>
                                    <li class="lang-content lang-id d-none">1 menit video sorotan</li>

                                    <li>Via Google Drive</li>

                                    <li class="lang-content lang-en">Makeup & hair with following, include retouch & 2
                                        hairstyles</li>
                                    <li class="lang-content lang-id d-none">Makeup & rambut dengan mengikuti, termasuk
                                        retouch & 2 gaya rambut</li>

                                </ul>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-en">Book</button>
                                </a>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-id d-none">Pesan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color-1 fit-col-2">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Full Day</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">12 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">12 Jam</h6>
                            </div>
                            <div
                                class="card-body d-flex justify-content-between align-items-center flex-column text-center">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">
                                    IDR 9,699K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP 9,699K
                                </h1>
                                <ul class="list-unstyled mt-3 mb-4 custom-text-0">
                                    <li class="lang-content lang-en">3 locations</li>
                                    <li class="lang-content lang-id d-none">3 lokasi</li>

                                    <li class="lang-content lang-en">200 edited + 50 fine edited</li>
                                    <li class="lang-content lang-id d-none">200 edited + 50 fine edited</li>

                                    <li class="lang-content lang-en">2-3 minutes cinematic video with drone</li>
                                    <li class="lang-content lang-id d-none">2-3 menit video sinematik dengan drone</li>

                                    <li class="lang-content lang-en">1 minute highlight video</li>
                                    <li class="lang-content lang-id d-none">1 menit video sorotan</li>

                                    <li>Via Google Drive</li>

                                    <li class="lang-content lang-en">Makeup & hair with following, include retouch & 3–4
                                        hairstyles</li>
                                    <li class="lang-content lang-id d-none">Makeup & rambut dengan mengikuti, termasuk
                                        retouch & 3–4 gaya rambut</li>

                                </ul>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 lang-content lang-en">Book</button>
                                </a>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 lang-content lang-id d-none">Pesan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-3 custom-border"></div>
                <h2 class="display-7 text-center aesthetic-text-1 my-4 lang-content lang-en">Photo & Video with Gown
                </h2>
                <h2 class="display-7 text-center aesthetic-text-1 my-4 lang-content lang-id d-none">Foto & Video dengan
                    Gaun
                </h2>
                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-5 custom-border"></div>

                <div class="row row-cols-1 row-cols-xl-3 mb-4 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color fit-col-3">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Express</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">2 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">2 Jam</h6>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center flex-column text-center"
                                style="height: 100%;">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    3,499K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    3,499K</h1>
                                <ul class="list-unstyled mt-3 mb-3 custom-text-0">
                                    <li class="lang-content lang-en">1 location</li>
                                    <li class="lang-content lang-id d-none">1 lokasi</li>

                                    <li class="lang-content lang-en">100 edited + 20 fine edited</li>
                                    <li class="lang-content lang-id d-none">100 edited + 20 fine edited</li>

                                    <li class="lang-content lang-en">2-3 minutes cinematic video with drone</li>
                                    <li class="lang-content lang-id d-none">2-3 menit video sinematik dengan drone</li>

                                    <li class="lang-content lang-en">1 minute highlight video</li>
                                    <li class="lang-content lang-id d-none">1 menit video sorotan</li>

                                    <li>Via Google Drive</li>

                                    <li class="lang-content lang-en">1 gown</li>
                                    <li class="lang-content lang-id d-none">1 gaun</li>

                                </ul>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-en">Book</button>
                                </a>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-id d-none">Pesan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color fit-col-3">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Half Day</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">6 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">6 Jam</h6>
                            </div>
                            <div
                                class="card-body d-flex justify-content-between align-items-center flex-column text-center">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    6,149K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    6,149K</h1>
                                <ul class="list-unstyled mt-3 mb-4 custom-text-0">
                                    <li class="lang-content lang-en">2 locations</li>
                                    <li class="lang-content lang-id d-none">2 lokasi</li>

                                    <li class="lang-content lang-en">160 edited + 30 fine edited</li>
                                    <li class="lang-content lang-id d-none">160 edited + 30 fine edited</li>

                                    <li class="lang-content lang-en">2-3 minutes cinematic video with drone</li>
                                    <li class="lang-content lang-id d-none">2-3 menit video sinematik dengan drone</li>

                                    <li class="lang-content lang-en">1 highlight video</li>
                                    <li class="lang-content lang-id d-none">1 video sorotan</li>

                                    <li>Via Google Drive</li>

                                    <li class="lang-content lang-en">1 gown</li>
                                    <li class="lang-content lang-id d-none">1 gaun</li>
                                </ul>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-en">Book</button>
                                </a>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-id d-none">Pesan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color-1 fit-col-3">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Full Day</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">12 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">12 Jam</h6>
                            </div>
                            <div
                                class="card-body d-flex justify-content-between align-items-center flex-column text-center">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    9,699K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    9,699K</h1>
                                <ul class="list-unstyled mt-3 mb-4 custom-text-0">
                                    <li class="lang-content lang-en">3 locations</li>
                                    <li class="lang-content lang-id d-none">3 lokasi</li>

                                    <li class="lang-content lang-en">200 edited + 50 fine edited</li>
                                    <li class="lang-content lang-id d-none">200 edited + 50 fine edited</li>

                                    <li class="lang-content lang-en">2-3 minutes cinematic video with drone</li>
                                    <li class="lang-content lang-id d-none">2-3 menit video sinematik dengan drone</li>

                                    <li class="lang-content lang-en">1 highlight video</li>
                                    <li class="lang-content lang-id d-none">1 video sorotan</li>

                                    <li>Via Google Drive</li>

                                    <li class="lang-content lang-en">2 gowns</li>
                                    <li class="lang-content lang-id d-none">2 gaun</li>
                                </ul>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 lang-content lang-en">Book</button>
                                </a>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 lang-content lang-id d-none">Pesan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-3 custom-border"></div>
                <h2 class="display-7 text-center aesthetic-text-1 my-4 lang-content lang-en">Photo & Video All Include
                </h2>
                <h2 class="display-7 text-center aesthetic-text-1 my-4 lang-content lang-id d-none">Foto & Video Paket
                    Lengkap</h2>
                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-5 custom-border"></div>

                <div class="row row-cols-1 row-cols-xl-3 mb-4 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color fit-col-4">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Express</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">2 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">2 Jam</h6>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center flex-column text-center"
                                style="height: 100%;">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    4,199K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    4,199K</h1>
                                <ul class="list-unstyled mt-3 mb-3 custom-text-0">
                                    <li class="lang-content lang-en">1 location</li>
                                    <li class="lang-content lang-id d-none">1 lokasi</li>

                                    <li class="lang-content lang-en">100 edited + 20 fine edited</li>
                                    <li class="lang-content lang-id d-none">100 edited + 20 fine edited</li>

                                    <li class="lang-content lang-en">2-3 minutes cinematic video</li>
                                    <li class="lang-content lang-id d-none">2-3 menit video sinematik</li>

                                    <li>Via Google Drive</li>

                                    <li class="lang-content lang-en">Makeup & hair without following and no retouch</li>
                                    <li class="lang-content lang-id d-none">Rias & rambut tanpa pendampingan dan tanpa
                                        retouch</li>

                                    <li class="lang-content lang-en">1 Gown</li>
                                    <li class="lang-content lang-id d-none">1 Gaun</li>

                                </ul>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-en">Book</button>
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-id d-none">Pesan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color fit-col-4">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Half Day</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">6 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">6 Jam</h6>
                            </div>
                            <div
                                class="card-body d-flex justify-content-between align-items-center flex-column text-center">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    7,559K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    7,559K</h1>
                                <ul class="list-unstyled mt-3 mb-4 custom-text-0">
                                    <li class="lang-content lang-en">2 locations</li>
                                    <li class="lang-content lang-id d-none">2 lokasi</li>

                                    <li class="lang-content lang-en">160 edited + 30 fine edited</li>
                                    <li class="lang-content lang-id d-none">160 edited + 30 fine edited</li>

                                    <li class="lang-content lang-en">2-3 minutes cinematic video with drone</li>
                                    <li class="lang-content lang-id d-none">2-3 menit video sinematik dengan drone</li>

                                    <li class="lang-content lang-en">1 highlight video</li>
                                    <li class="lang-content lang-id d-none">1 video sorotan</li>

                                    <li>Via Google Drive</li>

                                    <li class="lang-content lang-en">Makeup & hair with following</li>
                                    <li class="lang-content lang-id d-none">Rias & rambut dengan pendampingan</li>

                                    <li class="lang-content lang-en">Include retouch & 2 hairstyles</li>
                                    <li class="lang-content lang-id d-none">Termasuk retouch & 2 gaya rambut</li>

                                    <li class="lang-content lang-en">1 Gown</li>
                                    <li class="lang-content lang-id d-none">1 Gaun</li>

                                </ul>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-en">Book</button>
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 btn-custom lang-content lang-id d-none">Pesan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm card-custom-color-1 fit-col-4">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal aesthetic-text-5">Full Day</h4>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-en">12 Hours</h6>
                                <h6 class="my-0 fw-normal custom-text-4 lang-content lang-id d-none">12 Jam</h6>
                            </div>
                            <div
                                class="card-body d-flex justify-content-between align-items-center flex-column text-center">
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-en">IDR
                                    12,099K
                                </h1>
                                <h1 class="card-title pricing-card-title aesthetic-text-3 lang-content lang-id d-none">
                                    RP
                                    12,099K</h1>
                                <ul class="list-unstyled mt-3 mb-4 custom-text-0">
                                    <li class="lang-content lang-en">3 locations</li>
                                    <li class="lang-content lang-id d-none">3 lokasi</li>

                                    <li class="lang-content lang-en">200 edited + 50 fine edited</li>
                                    <li class="lang-content lang-id d-none">200 edited + 50 fine edited</li>

                                    <li class="lang-content lang-en">2-3 minutes cinematic video with drone</li>
                                    <li class="lang-content lang-id d-none">2-3 menit video sinematik dengan drone</li>

                                    <li class="lang-content lang-en">1 highlight video</li>
                                    <li class="lang-content lang-id d-none">1 video sorotan</li>

                                    <li>Via Google Drive</li>

                                    <li class="lang-content lang-en">Makeup & hair with following</li>
                                    <li class="lang-content lang-id d-none">Rias & rambut dengan pendampingan</li>

                                    <li class="lang-content lang-en">Include retouch & 3-4 hairstyles</li>
                                    <li class="lang-content lang-id d-none">Termasuk retouch & 3-4 gaya rambut</li>

                                    <li class="lang-content lang-en">3 Gowns</li>
                                    <li class="lang-content lang-id d-none">3 Gaun</li>

                                </ul>
                                <a href="/faqs#inquiry">
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 lang-content lang-en">Book</button>
                                    <button type="button"
                                        class="btn btn-primary px-4 me-md-2 lang-content lang-id d-none">Pesan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <main class="container">
                    <div
                        class="p-4 p-md-5 rounded text-body-emphasis d-flex justify-content-center align-items-center text-center">

                        <a href="{{ asset('concetta_prewedding_2025.pdf') }}" download
                            class="btn mb-4 btn-lg btn-primary px-4 me-md-2 lang-content lang-en">
                            Download Price List PDF
                        </a>

                        <a href="{{ asset('concetta_prewedding_2025.pdf') }}" download
                            class="btn mb-4 btn-lg btn-primary px-4 me-md-2 lang-content lang-id d-none">
                            Unduh PDF Daftar Harga
                        </a>

                    </div>
                </main>

                <div class="col-12 col-md-10 mt-2 col-lg-8 mx-auto mb-3 custom-border"></div>

                <h2 class="display-7 text-center aesthetic-text-1 my-4">
                    <span class="lang-content lang-en">Transportation Fee</span>
                    <span class="lang-content lang-id d-none">Biaya Transportasi</span>
                </h2>

                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-5 custom-border"></div>

                <div class="table-responsive mb-5">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th class="text-start custom-text fw-bold" style="width: 34%;">
                                    <span class="lang-content lang-en">Location</span>
                                    <span class="lang-content lang-id d-none">Lokasi</span>
                                </th>
                                <th class="text-center custom-text fw-bold" style="width: 22%;">
                                    <span class="lang-content lang-en">Price</span>
                                    <span class="lang-content lang-id d-none">Harga</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start custom-text-0">
                                    <span class="lang-content lang-en">Denpasar</span>
                                    <span class="lang-content lang-id d-none">Denpasar</span>
                                </td>
                                <td class="custom-text-0">
                                    <span class="lang-content lang-en">Free</span>
                                    <span class="lang-content lang-id d-none">Gratis</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start custom-text-0">
                                    <span class="lang-content lang-en">Badung (Uluwatu, Jimbaran, Nusa Dua)</span>
                                    <span class="lang-content lang-id d-none">Badung (Uluwatu, Jimbaran, Nusa
                                        Dua)</span>
                                </td>
                                <td class="custom-text-0">
                                    <span class="lang-content lang-en">IDR 50,000</span>
                                    <span class="lang-content lang-id d-none">RP 50.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start custom-text-0">
                                    <span class="lang-content lang-en">Gianyar & Tabanan</span>
                                    <span class="lang-content lang-id d-none">Gianyar & Tabanan</span>
                                </td>
                                <td class="custom-text-0">
                                    <span class="lang-content lang-en">IDR 100,000</span>
                                    <span class="lang-content lang-id d-none">RP 100.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start custom-text-0">
                                    <span class="lang-content lang-en">Bangli & Karangasem</span>
                                    <span class="lang-content lang-id d-none">Bangli & Karangasem</span>
                                </td>
                                <td class="custom-text-0">
                                    <span class="lang-content lang-en">IDR 150,000</span>
                                    <span class="lang-content lang-id d-none">RP 150.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start custom-text-0">
                                    <span class="lang-content lang-en">Other Bali Areas</span>
                                    <span class="lang-content lang-id d-none">Wilayah Bali Lainnya</span>
                                </td>
                                <td class="custom-text-0">
                                    <span class="lang-content lang-en">IDR 200,000</span>
                                    <span class="lang-content lang-id d-none">RP 200.000</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-3 custom-border"></div>

                <h2 class="display-7 text-center aesthetic-text-1 my-4">
                    <span class="lang-content lang-en">Add-ons</span>
                    <span class="lang-content lang-id d-none">Tambahan</span>
                </h2>

                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-5 custom-border"></div>

                <div class="table-responsive mb-4">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th class="text-start custom-text fw-bold" style="width: 34%;">
                                    <span class="lang-content lang-en">Additionals</span>
                                    <span class="lang-content lang-id d-none">Tambahan</span>
                                </th>
                                <th class="text-center custom-text fw-bold" style="width: 22%;">
                                    <span class="lang-content lang-en">Price</span>
                                    <span class="lang-content lang-id d-none">Harga</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start custom-text-0">
                                    <span class="lang-content lang-en">All Files</span>
                                    <span class="lang-content lang-id d-none">Semua File</span>
                                </td>
                                <td class="custom-text-0">
                                    <span class="lang-content lang-en">IDR 500,000</span>
                                    <span class="lang-content lang-id d-none">RP 500.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start custom-text-0">
                                    <span class="lang-content lang-en">1 - 2 minutes video</span>
                                    <span class="lang-content lang-id d-none">Video 1 - 2 menit</span>
                                </td>
                                <td class="custom-text-0">
                                    <span class="lang-content lang-en">IDR 1,500,000</span>
                                    <span class="lang-content lang-id d-none">RP 1.500.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start custom-text-0">
                                    <span class="lang-content lang-en">Fine edit (10 photos)</span>
                                    <span class="lang-content lang-id d-none">Fine edit (10 foto)</span>
                                </td>
                                <td class="custom-text-0">
                                    <span class="lang-content lang-en">IDR 150,000</span>
                                    <span class="lang-content lang-id d-none">RP 150.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start custom-text-0">
                                    <span class="lang-content lang-en">Re-upload photos</span>
                                    <span class="lang-content lang-id d-none">Unggah ulang foto</span>
                                </td>
                                <td class="custom-text-0">
                                    <span class="lang-content lang-en">IDR 200,000</span>
                                    <span class="lang-content lang-id d-none">RP 200.000</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </section>

    <section id="hook">
        <main class="container">
            <div
                class="p-4 p-md-5 rounded text-body-emphasis d-flex justify-content-center align-items-center text-center">
                <div class="col-lg-6 px-0">
                    <h2 class="display-7 aesthetic-text-1 mb-3 lang-content lang-en">Let's book your session now!</h2>
                    <h2 class="display-7 aesthetic-text-1 mb-3 lang-content lang-id d-none">Yuk, jadwalkan sesi kamu
                        sekarang!</h2>
                    <h5 class="display-10 custom-text-0 lang-content lang-en">Are those rate aligned with your budget?
                    </h5>
                    <h5 class="display-10 custom-text-0 lang-content lang-id d-none">Apakah daftar harga tersebut sesuai
                        dengan budgetmu?</h5>
                    <a href="/faqs#inquiry"><button type="button"
                            class="btn btn-primary btn-lg my-3 lang-content lang-en">Book
                            Now!</button></a>
                    <a href="/faqs#inquiry"><button type="button"
                            class="btn btn-primary btn-lg my-3 lang-content lang-id d-none">Booking
                            Sekarang!</button></a>
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