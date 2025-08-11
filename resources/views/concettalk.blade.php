<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Concettalk</title>
    <link rel="icon" type="image/png" href="{{ asset('head_logo.png') }}">

    <!-- Open Graph meta tags (Facebook, WhatsApp, LinkedIn, etc) -->
    <meta property="og:title" content="Concettalk" />
    <meta property="og:description" content="Let's Talk with Us About Your Session Plan!" />
    <meta property="og:image" content="{{ url('concettalk_seo_image.jpg') }}" />
    <meta property="og:url" content="https://www.concettaphotos.com/concettalk" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Concetta Photos" />

    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Concettalk" />
    <meta name="twitter:description" content="Let's Talk with Us About Your Session Plan!" />
    <meta name="twitter:image" content="{{ url('concettalk_seo_image.jpg') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital,wght@0,400..700;1,400..700&display=swap"
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

        html {
            scroll-behavior: smooth;
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

        .responsive-text {
            font-size: clamp(0.8rem, 0.8vw, 1rem);
            word-break: break-word;
            overflow-wrap: break-word;
            white-space: normal;
            text-align: left;
        }

        .responsive-text-1 {
            font-size: clamp(0.8rem, 0.8vw, 1rem);
            word-break: break-word;
            overflow-wrap: break-word;
            white-space: normal;
            text-align: right;
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

        /* Video Preview */
        .video-container {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: auto;
        }

        video {
            width: 100%;
            display: block;
        }

        /* Common button styles */
        .video-btn {
            position: absolute;
            border: none;
            background: none;
            cursor: pointer;
            padding: 8px;
            opacity: 1;
            transition: opacity 0.5s ease;
        }

        .video-container:not(:hover) .video-btn.fade {
            opacity: 0;
            pointer-events: none;
        }

        .video-btn svg {
            fill: #F7F7F7;
        }

        /* Positioning */
        .center {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .bottom-right {
            bottom: 10px;
            right: 10px;
        }

        .bg-primary {
            background-color: #3674B5 !important;
            border-color: #3674B5 !important;
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
            <img src="{{ asset('location.jpg') }}" alt="concettalk picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
        <div class="position-relative w-100 d-flex d-lg-none" style="height: 636px;">
            <img src="{{ asset('location_mobile.jpg') }}" alt="concettalk picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
    </section>

    <section id="vlog">
        <div class="py-5 px-4 text-center d-flex flex-column align-items-center"> <svg
                xmlns="http://www.w3.org/2000/svg" width="77" height="77" fill="currentColor"
                class="bi bi-camera2 icon my-4" viewBox="0 0 16 16">
                <path d="M5 8c0-1.657 2.343-3 4-3V4a4 4 0 0 0-4 4" />
                <path
                    d="M12.318 3h2.015C15.253 3 16 3.746 16 4.667v6.666c0 .92-.746 1.667-1.667 1.667h-2.015A5.97 5.97 0 0 1 9 14a5.97 5.97 0 0 1-3.318-1H1.667C.747 13 0 12.254 0 11.333V4.667C0 3.747.746 3 1.667 3H2a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1h.682A5.97 5.97 0 0 1 9 2c1.227 0 2.367.368 3.318 1M2 4.5a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0M14 8A5 5 0 1 0 4 8a5 5 0 0 0 10 0" />
            </svg>
            <h1 class="display-5 aesthetic-text-1">Vlogs & Blogs</h1>
            <div class="col-10 col-sm-8 col-md-6 col-lg-4 col-xl-2 mx-auto mb-3 custom-border-divider mb-5"></div>

            <div class="container-fluid py-5">

                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-4">
                    @foreach($concettalks as $item)
                        @if($item->category === 'vlog')
                            <div class="col">
                                <div class="card border-1 shadow-sm rounded-4">
                                    @if(Str::contains($item->image_url, ['.mp4', '.mov', '.webm']))
                                        <div class="video-container">
                                            <video class="myVideo rounded-4" src="{{ asset('storage/' . $item->image_url) }}" muted
                                                loop></video>

                                            <!-- Play/Pause Button -->
                                            <button class="playPauseBtn video-btn center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                                    class="bi bi-play-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                                </svg>
                                            </button>

                                            <!-- Mute/Unmute Button -->
                                            <button class="muteBtn video-btn bottom-right">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="#F7F7F7" width="28" height="28"
                                                    class="bi bi-volume-mute-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06m7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0" />
                                                </svg>
                                            </button>
                                        </div>
                                    @else
                                        <img src="{{ asset('storage/' . $item->image_url) }}" class="card-img-top rounded-4"
                                            alt="Image">
                                    @endif

                                    <div class="card-body d-flex flex-column justify-content-start px-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#578FCA"
                                                    class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                                                </svg>
                                                <p class="mx-2 my-0 custom-text-0 responsive-text">0 Likes</p>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#578FCA"
                                                    class="bi bi-chat-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15" />
                                                </svg>
                                                <p class="mx-2 my-0 custom-text-0 responsive-text">0 Comments</p>
                                            </div>

                                            <small
                                                class="text-muted custom-text-0 responsive-text-1">{{ $item->created_at->diffForHumans() }}</small>
                                        </div>

                                        <span class="badge bg-primary mt-3 custom-text-2"
                                            style="width: fit-content;">{{ $item->category }}</span>

                                        <div class="d-flex justify-content-between align-items-center mt-3">


                                            <div class="card-text text-start custom-text-0">

                                                @php
                                                    // Get the first 3 sentences from the caption
                                                    $rawCaption = strip_tags($item->caption, '<strong><em><u><p><br>');

                                                    // Force line breaks to be treated as sentence endings
                                                    $normalized = preg_replace("/(\r\n|\n|\r)/", ". ", $rawCaption);

                                                    // Break the caption into sentences
                                                    preg_match_all('/[^.?!\n]+(?:[.?!\n]+|$)/u', $normalized, $sentences);

                                                    // If the first sentence is empty, initialize it with the raw caption
                                                    if (empty($sentences[0])) {
                                                        $sentences[0][] = $rawCaption;
                                                    }

                                                    // Take the first 3 sentences for preview
                                                    $previewSentences = implode(' ', array_slice($sentences[0], 0, 3));
                                                @endphp

                                                <span class="caption-preview">{!! $previewSentences !!}</span>
                                                <span class="caption-full d-none">{!! $rawCaption !!}</span>
                                                @if(count($sentences[0]) > 3)
                                                    <a href="#" class="read-more-toggle d-block mt-2 custom-text-5"
                                                        onclick="toggleCaption(this); return false;">Read more</a>
                                                @endif
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>

            </div>
        </div>
    </section>

    <section id="location">
        <div class="py-5 px-4 text-center bg-body-custom d-flex flex-column align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="77" height="77" fill="currentColor"
                class="bi bi-map-fill icon my-4" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.5.5 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.5.5 0 0 0-.196 0zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1z" />
            </svg>
            <h1 class="display-6 aesthetic-text-1 lang-content lang-en">Favorite & Best Location</h1>
            <h1 class="display-6 aesthetic-text-1 lang-content lang-id d-none">Lokasi Favorit & Terbaik</h1>
            <div class="col-10 col-sm-8 col-md-6 col-lg-4 col-xl-2 mx-auto mb-3 custom-border-divider mb-5"></div>

            <div class="container-fluid py-5">

                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-4">
                    @foreach($concettalks as $item)
                        @if($item->category === 'location')
                            <div class="col">
                                <div class="card border-1 shadow-sm rounded-4">
                                    @if(Str::contains($item->image_url, ['.mp4', '.mov', '.webm']))
                                        <div class="video-container">
                                            <video class="myVideo rounded-4" src="{{ asset('storage/' . $item->image_url) }}" muted
                                                loop></video>

                                            <!-- Play/Pause Button -->
                                            <button class="playPauseBtn video-btn center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                                    class="bi bi-play-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                                </svg>
                                            </button>

                                            <!-- Mute/Unmute Button -->
                                            <button class="muteBtn video-btn bottom-right">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="#F7F7F7" width="28" height="28"
                                                    class="bi bi-volume-mute-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06m7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0" />
                                                </svg>
                                            </button>
                                        </div>
                                    @else
                                        <img src="{{ asset('storage/' . $item->image_url) }}" class="card-img-top rounded-4"
                                            alt="Image">
                                    @endif

                                    <div class="card-body d-flex flex-column justify-content-start px-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#578FCA"
                                                    class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                                                </svg>
                                                <p class="mx-2 my-0 custom-text-0 responsive-text">0 Likes</p>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#578FCA"
                                                    class="bi bi-chat-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15" />
                                                </svg>
                                                <p class="mx-2 my-0 custom-text-0 responsive-text">0 Comments</p>
                                            </div>

                                            <small
                                                class="text-muted custom-text-0 responsive-text-1">{{ $item->created_at->diffForHumans() }}</small>
                                        </div>

                                        <span class="badge bg-primary mt-3 custom-text-2"
                                            style="width: fit-content;">{{ $item->category }}</span>

                                        <div class="d-flex justify-content-between align-items-center mt-3">


                                            <div class="card-text text-start custom-text-0">

                                                @php
                                                    // Get caption text without excessive HTML
                                                    $rawCaption = strip_tags($item->caption, '<strong><em><u><p><br>');

                                                    // Force line breaks to become separate sentences
                                                    $normalized = preg_replace("/(\r\n|\n|\r)/", ". ", $rawCaption);

                                                    // Break into sentences based on punctuation or end of phrase (including emojis/emoticons)
                                                    preg_match_all('/[^.?!\n]+(?:[.?!\n]+|$)/u', $normalized, $sentences);

                                                    // If no sentences are recognized, use the entire caption
                                                    if (empty($sentences[0])) {
                                                        $sentences[0][] = $rawCaption;
                                                    }

                                                    // Take only the first 3 sentences
                                                    $previewSentences = implode(' ', array_slice($sentences[0], 0, 3));
                                                @endphp

                                                <span class="caption-preview">{!! $previewSentences !!}</span>
                                                <span class="caption-full d-none">{!! $rawCaption !!}</span>
                                                @if(count($sentences[0]) > 3)
                                                    <a href="#" class="read-more-toggle d-block mt-2 custom-text-5"
                                                        onclick="toggleCaption(this); return false;">Read more</a>
                                                @endif
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>

            </div>
        </div>
    </section>

    <section id="hook">
        <main class="container">
            <div
                class="p-4 p-md-5 rounded text-body-emphasis d-flex justify-content-center align-items-center text-center">
                <div class="col-lg-6 px-0">
                    <h2 class="display-7 aesthetic-text-1 mb-3 lang-content lang-en">Let's book your session now!</h2>
                    <h2 class="display-7 aesthetic-text-1 mb-3 lang-content lang-id d-none">Yuk, booking sesi fotomu
                        sekarang!</h2>

                    <h5 class="display-10 custom-text-0 lang-content lang-en">Are we feeling familiar with each other
                        now?
                    </h5>
                    <h5 class="display-10 custom-text-0 lang-content lang-id d-none">Sekarang kita sudah cukup saling
                        mengenal kan?</h5>

                    <a href="/faqs#inquiry">
                        <button type="button" class="btn btn-primary btn-lg my-3 lang-content lang-en">Book
                            Now!</button>
                    </a>
                    <a href="/faqs#inquiry">
                        <button type="button" class="btn btn-primary btn-lg my-3 lang-content lang-id d-none">Booking
                            Sekarang!</button>
                    </a>
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

        const pauseIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="#F7F7F7" width="56" height="56" class="bi bi-pause-fill" viewBox="0 0 16 16"><path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5m5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5"/></svg>`;
        const playIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="#F7F7F7" width="56" height="56" class="bi bi-play-fill" viewBox="0 0 16 16"><path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/></svg>`;
        const muteIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="#F7F7F7" width="28" height="28" class="bi bi-volume-mute-fill" viewBox="0 0 16 16"><path d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06m7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0"/></svg>`;
        const unmuteIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="#F7F7F7" width="28" height="28" fill="currentColor" class="bi bi-volume-up-fill" viewBox="0 0 16 16"><path d="M11.536 14.01A8.47 8.47 0 0 0 14.026 8a8.47 8.47 0 0 0-2.49-6.01l-.708.707A7.48 7.48 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303z"/><path d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.48 5.48 0 0 1 11.025 8a5.48 5.48 0 0 1-1.61 3.89z"/><path d="M8.707 11.182A4.5 4.5 0 0 0 10.025 8a4.5 4.5 0 0 0-1.318-3.182L8 5.525A3.5 3.5 0 0 1 9.025 8 3.5 3.5 0 0 1 8 10.475zM6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06"/></svg>`;

        document.querySelectorAll('.video-container').forEach(container => {
            const video = container.querySelector('.myVideo');
            const playPauseBtn = container.querySelector('.playPauseBtn');
            const muteBtn = container.querySelector('.muteBtn');

            // Play/Pause toggle
            playPauseBtn.addEventListener('click', () => {
                if (video.paused) {
                    video.play();
                    playPauseBtn.innerHTML = pauseIcon;
                } else {
                    video.pause();
                    playPauseBtn.innerHTML = playIcon;
                }
            });

            // Mute/Unmute toggle
            muteBtn.addEventListener('click', () => {
                video.muted = !video.muted;
                muteBtn.innerHTML = video.muted ? muteIcon : unmuteIcon;
            });

            // Fade out after inactivity
            const controls = document.querySelectorAll('.video-btn');
            let fadeTimeout;

            const resetFade = () => {
                controls.forEach(btn => btn.classList.remove('fade'));
                clearTimeout(fadeTimeout);
                fadeTimeout = setTimeout(() => {
                    if (!video.paused) {
                        controls.forEach(btn => btn.classList.add('fade'));
                    }
                }, 2000);
            };

            video.addEventListener('play', resetFade);
            video.addEventListener('mousemove', resetFade);
            video.addEventListener('pause', () => controls.forEach(btn => btn.classList.remove('fade')));
            controls.forEach(btn => btn.addEventListener('mouseenter', resetFade));
        });

        function toggleCaption(link) {
            const container = link.closest('.custom-text-0');
            const preview = container.querySelector('.caption-preview');
            const full = container.querySelector('.caption-full');

            if (full.classList.contains('d-none')) {
                // Show full caption
                preview.classList.add('d-none');
                full.classList.remove('d-none');
                link.textContent = 'Read less';
            } else {
                // Show preview, scroll to .container
                full.classList.add('d-none');
                preview.classList.remove('d-none');
                link.textContent = 'Read more';

                // Scroll to the closest .col
                const nearestContainer = link.closest('.col');
                if (nearestContainer) {
                    const offset = 140; // scroll offset in px

                    const rect = nearestContainer.getBoundingClientRect();
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                    window.scrollTo({
                        top: rect.top + scrollTop - offset,
                        behavior: 'smooth'
                    });
                }
            }
        }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>