<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Concetta Photos</title>
    <link rel="icon" type="image/png" href="{{ asset('head_logo.png') }}">

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

        #tac {
            scroll-margin-top: 120.55px;
        }

        #tac-prewedding {
            scroll-margin-top: 168px;
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

        .motto {
            color: #393e46 !important;
            font-family: "Roboto Condensed", sans-serif !important;
            font-optical-sizing: auto !important;
            font-weight: 700 !important;
            font-style: normal !important;
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

        .custom-line-height {
            line-height: 28px !important;
            color: #3674b5 !important;
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

        .transition-header {
            background-color: transparent;
            transition: background-color 0.7s ease, box-shadow 0.7s ease;
        }

        .scrolled {
            background-color: rgba(255, 255, 255);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.7s ease;
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

        .text-justify {
            text-align: justify;
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

    <!-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.350);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a,0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4,0,1,1);--ease-out:cubic-bezier(0,0,.2,1);--ease-in-out:cubic-bezier(.4,0,.2,1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0,0,.2,1)infinite;--animate-pulse:pulse 2s cubic-bezier(.4,0,.6,1)infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}
            </style>
        @endif -->
</head>

<body>
    <section id="header">
        @include('partials.navbar')
    </section>

    <section id="picture" class="position-relative">
        <div class="position-relative w-100 d-none d-sm-flex" style="height: 400px;">
            <img src="{{ asset('about.jpg') }}" alt="about picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
        <div class="position-relative w-100 d-flex d-sm-none" style="height: 400px;">
            <img src="{{ asset('about_mobile.jpg') }}" alt="about picture"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
        </div>
    </section>

    <section id="about">
        <div class="px-5 py-5 text-center"> <img class="d-block mx-auto mb-4" src="{{ asset('logo_cp.png') }}"
                alt="Concetta Photos Logo" width="70px">
            <h1 class="display-5 aesthetic-text-1 mb-3">Concetta Photos</h1>
            <div class="col-lg-6 mx-auto mb-5">
                <p class="lead custom-text-0 mb-5">
                    <span class="lang-content lang-en">
                        Founded in 2018, Concetta Photos has been capturing timeless moments with passion and precision.
                        What began as a love for visual storytelling has grown into a professional photography service
                        trusted by clients across various occasions — from intimate portraits to grand celebrations.
                        <br><br>

                        With years of experience and a keen eye for detail, Concetta Photos brings a unique blend of
                        creativity, professionalism, and heartfelt dedication to every shoot. We believe that every
                        photo should not only tell a story but also preserve emotions that words cannot express.
                        <br><br>

                        Whether it's weddings, lifestyle sessions, events, or creative shoots, we strive to make every
                        frame meaningful, memorable, and beautifully authentic. <br><br>

                        <mark class="aesthetic-text-1">"Let’s make your memories remains forever."</mark>
                    </span>

                    <span class="lang-content lang-id d-none">
                        Didirikan pada tahun 2018, Concetta Photos telah menangkap momen-momen abadi dengan penuh
                        semangat dan ketelitian. Apa yang dimulai dari kecintaan terhadap bercerita secara visual kini
                        telah berkembang menjadi layanan fotografi profesional yang dipercaya oleh klien dalam berbagai
                        kesempatan — mulai dari potret intim hingga perayaan besar. <br><br>

                        Dengan pengalaman bertahun-tahun dan ketajaman dalam menangkap detail, Concetta Photos
                        menghadirkan perpaduan unik antara kreativitas, profesionalisme, dan dedikasi sepenuh hati di
                        setiap sesi pemotretan. Kami percaya bahwa setiap foto bukan hanya harus menceritakan sebuah
                        kisah, tetapi juga menyimpan emosi yang tak bisa diungkapkan dengan kata-kata. <br><br>

                        Baik itu pernikahan, sesi gaya hidup, acara, maupun pemotretan kreatif, kami berusaha menjadikan
                        setiap bingkai berarti, berkesan, dan autentik dengan indah. <br><br>

                        <mark class="aesthetic-text-1">"Let’s make your memories remains forever."</mark>
                    </span>
                </p>
            </div>
            <div class="col-10 col-md-8 col-lg-6 mx-auto custom-border"></div>
            <h1 class="display-7 aesthetic-text-1 mt-5 lang-content lang-en">Our Social Media</h1>
            <h1 class="display-7 aesthetic-text-1 mt-5 lang-content lang-id d-none">Sosial Media Kami</h1>

            <div class="container px-4" id="icon-grid">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4 pt-5">
                    <div class="col d-flex justify-content-center">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('instagram_logo.png') }}" alt="Instagram Logo" width="35px">
                            <h3 class="fw-bold mb-1 fs-4 text-body-emphasis aesthetic-text-1">Instagram</h3>
                            <p>@concettaphotos & @lovestorybyconcettaphotos</p>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('tiktok_logo.png') }}" alt="Tiktok Logo" width="35px">
                            <h3 class="fw-bold mb-1 fs-4 text-body-emphasis aesthetic-text-1">Tiktok</h3>
                            <p>@concettaphotos</p>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('thread_logo.png') }}" alt="Thread Logo" width="35px">
                            <h3 class="fw-bold mb-1 fs-4 text-body-emphasis aesthetic-text-1">Thread</h3>
                            <p>@concettaphotos</p>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('twitter_logo.png') }}" alt="Twitter Logo" width="35px">
                            <h3 class="fw-bold mb-1 fs-4 text-body-emphasis aesthetic-text-1">Twitter</h3>
                            <p>@ConcettaPhotos_</p>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="text-center">
                            <img class="mb-3" src="{{ asset('email_logo.png') }}" alt="Email Logo" width="35px">
                            <h3 class="fw-bold mb-1 fs-4 text-body-emphasis aesthetic-text-1">Email</h3>
                            <p>concettaphotosbali@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tac">
        <div class="p-5 text-center bg-body-custom">
            <div class="container">
                <h1 class="display-7 aesthetic-text-1 lang-content lang-en">Terms and Conditions</h1>
                <h1 class="display-7 aesthetic-text-1 lang-content lang-id d-none">Syarat dan Ketentuan</h1>
                <div class="col-4 mx-auto mb-3 custom-border-divider mb-5"></div>

                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-3 custom-border"></div>
                <h2 class="display-7 text-center my-4 aesthetic-text-1">Holiday & Family</h2>
                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-5 custom-border"></div>

                <div class="row g-4">

                    <div class="col-12">
                        <div class="bg-light p-4 rounded shadow-sm border custom-text-0 text-center">
                            <h6 class="lang-content lang-en custom-line-height fw-bold">
                                Make sure the client read this terms and conditions carefully. By placing an order and
                                making payment, the client must have agreed to and read all the terms and conditions
                                provided by Concetta Photos as written below.
                            </h6>
                            <h6 class="lang-content lang-id d-none custom-line-height fw-bold">
                                Klien diharapkan membaca setiap poin yang terdapat dalam syarat dan ketentuan ini dengan
                                seksama. Dengan melakukan pemesanan dan pembayaran, maka klien dianggap telah menyetujui
                                dan membaca semua syarat dan ketentuan yang diberikan oleh Concetta Photos yang tertulis
                                di bawah ini.
                            </h6>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                1. For a Portfolio, you can check our Instagram <mark>@concettaphotos</mark>.
                            </span>
                            <span class="lang-content lang-id d-none">
                                1. Cek di Instagram kami <mark>@concettaphotos</mark> untuk portofolio lengkap.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                2. A <mark>deposit of 50%</mark> of the selected package is required for bookings.
                                <mark>The deposit is not refundable</mark>. If you book for two or more sessions on
                                several different days, you must pay a <mark>deposit of 65%</mark>.
                            </span>
                            <span class="lang-content lang-id d-none">
                                2. Booking wajib melakukan <mark>pembayaran DP sebesar 50%</mark> dari paket yang
                                dipilih dan <mark>tidak dapat dikembalikan</mark>. Jika melakukan booking untuk dua atau
                                lebih sesi berbeda dalam beberapa hari yang berbeda, maka wajib untuk membayar <mark>DP
                                    sebesar 65%</mark> dari total paket yang dipilih.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                3. Location will be discussed after we received the deposit. <mark>Package can't be
                                    downgraded</mark> after the deposit, but you can upgrade the package if needed.
                            </span>
                            <span class="lang-content lang-id d-none">
                                3. Setelah pembayaran DP kami terima, client dapat berdiskusi dengan kami tentang lokasi
                                untuk sesi foto. <mark>Paket yang sudah dipilih tidak dapat didowngrade</mark> dengan
                                alasan apapun, tetapi paket dapat diupgrade bila diperlukan.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                4. <mark>The package is only valid for 1 day</mark>, cannot be divided into other days,
                                and is <mark>valid for one family</mark>.
                            </span>
                            <span class="lang-content lang-id d-none">
                                4. <mark>Paket hanya berlaku untuk 1 hari</mark>, tidak bisa dibagi ke hari lain dan
                                <mark>berlaku untuk 1 keluarga</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                5. Clients are expected to <mark>arrive/prepare on time</mark>. If there is a delay,
                                <mark>the shooting time will be deducted</mark> according to an agreement.
                            </span>
                            <span class="lang-content lang-id d-none">
                                5. Client diharapkan <mark>datang & siap tepat waktu</mark> sesuai dengan kesepakatan
                                sesi. Jika terjadi keterlambatan, maka <mark>waktu pemotretan tetap dihitung</mark>
                                sesuai kesepakatan awal.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                6. If shooting sessions are not possible due to <mark>force majeure (bad weather and
                                    natural disasters)</mark>, client can look for alternatives to other places or
                                reschedule.
                            </span>
                            <span class="lang-content lang-id d-none">
                                6. Bila sesi pemotretan tidak memungkinkan karena <mark>force majeure (cuaca buruk dan
                                    bencana alam)</mark>, bisa mencari alternatif tempat lain atau reschedule.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                7. Any schedule changes made by the client <mark>one day prior to or on the day of the
                                    photo session</mark> will be subject to a <mark>rescheduling fee of IDR
                                    350,000</mark>, unless the change is caused by force majeure circumstances.
                            </span>
                            <span class="lang-content lang-id d-none">
                                7. <mark>Perubahan jadwal yang dilakukan oleh klien pada 1 hari sebelum dan atau hari
                                    H</mark> sesi foto akan berlangsung, dikenakan <mark>biaya reschedule sebesar
                                    Rp350.000</mark>. Adapun perubahan jadwal yang dilakukan klien ini selain dari
                                alasan force majeure.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                8. If the client asking more than one shooting location, for example, in a 2-hour
                                session, then the <mark>travel time from location A to location B is also part of the 2
                                    hours session</mark>.
                            </span>
                            <span class="lang-content lang-id d-none">
                                8. Jika client mengusulkan lebih dari 1 lokasi pemotretan misalkan pada sesi 2 jam, maka
                                <mark>waktu perjalanan dari lokasi A ke lokasi B juga merupakan bagian dalam 2 jam
                                    tersebut</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                9. The <mark>location fees</mark> imposed by the local authorities vary at each place
                                and are <mark>entirely borne by the client</mark>. Suppose the client chooses a
                                photography location in a tourist attraction that requires an entrance ticket. In that
                                case, the client is <mark>responsible for covering the ticket expenses</mark> for the
                                entire Concetta Photos crew.
                            </span>
                            <span class="lang-content lang-id d-none">
                                9. <mark>Biaya lokasi pemotretan</mark> yang dipungut oleh pihak pengelola setempat
                                berbeda di setiap tempat dan <mark>sepenuhnya ditanggung oleh klien</mark>. Jika klien
                                memilih lokasi pemotretan di tempat wisata yang memiliki tiket masuk, maka klien
                                <mark>wajib menanggung biaya tiket</mark> tersebut untuk seluruh crew Concetta Photos.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                10. For additional time, <mark>IDR 350,000/hour</mark>. This price is only valid for
                                clients who take a 2-hour package.
                            </span>
                            <span class="lang-content lang-id d-none">
                                10. Untuk waktu tambahan, dikenakan <mark>charge sebesar Rp350.000/jam</mark>. Harga ini
                                hanya berlaku bagi client yang mengambil paket 2 jam.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                11. The files we give, and <mark>tone adjustments (exposure, saturation,
                                    contrast)</mark> have been sorted, so the files you received are the best.
                            </span>
                            <span class="lang-content lang-id d-none">
                                11. File yang kami kirim adalah file yang sudah melalui tahap seleksi dan
                                <mark>penyesuaian tone (exposure, saturasi, contrast)</mark>, sehingga file yang client
                                terima adalah yang terbaik.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                12. We will deliver photos via Google Drive. After shooting, we will send the links
                                <mark>H+1 and a maximum of H+2</mark> with a note that the client has paid off. The
                                <mark>link will be active for one month</mark>. If, in the future, the client asks for
                                reuploading, an <mark>additional fee of IDR 200,000</mark> will be charged.
                            </span>
                            <span class="lang-content lang-id d-none">
                                12. File dikirimkan melalui Google Drive dalam rentang waktu <mark>H+1 sampai H+2</mark>
                                setelah pemotretan dengan catatan client sudah melakukan pelunasan. <mark>Link tersebut
                                    akan aktif selama 1 bulan</mark> dan akan dikenakan <mark>biaya tambahan sebesar
                                    Rp200.000</mark> jika client meminta pengupload-an ulang.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="bg-light p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                13. <mark>Concetta Photos holds full copyright ownership</mark> of all photos taken
                                during the photography session. As the service provider, we have the right to <mark>use
                                    the photos for promotional purposes</mark>. For clients who wish to refrain from
                                having their photos published on our social media or other platforms for promotional
                                purposes by Concetta Photos, please <mark>inform us before or after the
                                    photoshoot</mark>.
                            </span>
                            <span class="lang-content lang-id d-none">
                                13. <mark>Hasil foto seutuhnya menjadi milik Concetta Photos</mark> dan akan
                                dipergunakan sebagai <mark>konten promosi</mark> di berbagai media sosial. Client yang
                                tidak berkenan, harap untuk <mark>memberitahukan di awal</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="bg-light p-4 rounded shadow-sm border custom-text-0 text-center">
                            <h6 class="lang-content lang-en custom-line-height fw-bold">
                                By paid deposit, the client is considered to have agreed with the T&Cs
                                above.
                            </h6>
                            <h6 class="lang-content lang-id d-none custom-line-height fw-bold">
                                Dengan membayar deposit, klien dianggap telah menyetujui syarat dan
                                ketentuan di atas.
                            </h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="tac-prewedding">
        <div class="pb-5 px-5 text-center">
            <div class="container">

                <div class="col-12 col-md-10 col-lg-8 mx-auto mt-5 mb-3 custom-border"></div>
                <h2 class="display-7 text-center my-4 aesthetic-text-1">Preweddding</h2>
                <div class="col-12 col-md-10 col-lg-8 mx-auto mb-5 custom-border"></div>

                <div class="row g-4">
                    <div class="col-12">
                        <div class="p-4 rounded shadow-sm border custom-text-0 text-center">
                            <h6 class="lang-content lang-en custom-line-height fw-bold">
                                Make sure the client read this terms and conditions carefully. By placing an order
                                and
                                making payment, the client must have agreed to and read all the terms and conditions
                                provided by Concetta Photos as written below.
                            </h6>
                            <h6 class="lang-content lang-id d-none custom-line-height fw-bold">
                                Klien diharapkan membaca setiap poin yang terdapat dalam syarat dan ketentuan ini
                                dengan
                                seksama. Dengan melakukan pemesanan dan pembayaran, maka klien dianggap telah
                                menyetujui
                                dan membaca semua syarat dan ketentuan yang diberikan oleh Concetta Photos yang
                                tertulis
                                di bawah ini.
                            </h6>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Booking and Payment</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Pemesanan dan Pembayaran</h5>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                1. Klien diwajibkan untuk melakukan pembayaran sebesar <mark>50% dari harga paket</mark>
                                yang dipilih
                                sebagai <mark>deposit pembayaran (DP)</mark> untuk pemesanan jadwal pemotretan.
                                <mark>Deposit ini bersifat
                                    tidak dapat dikembalikan</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                1. The client must to make a <mark>50% payment</mark> of the selected package price as a
                                <mark>non-refundable deposit (DP)</mark> for booking the photography session schedule.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                2. Harga yang tertera <mark>belum termasuk biaya transportasi dan biaya lokasi</mark>
                                (jika ada).
                                Biaya transportasi yang tercantum di atas hanya untuk <mark>fotografer &
                                    videografer</mark>, belum
                                termasuk biaya transportasi <mark>MUA</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                2. The listed price <mark>does not include transportation and location fees</mark> (if
                                applicable).
                                The transportation fee mentioned above is for <mark>photographers and
                                    videographers</mark> and does
                                not include the <mark>makeup artist’s transportation fee</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Cancellation</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Pembatalan</h5>
                    </div>

                    <div class="col-12">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                1. <mark>Pembatalan yang dilakukan oleh klien akan mengakibatkan kehilangan Deposit
                                    Pembayaran (DP)</mark> yang telah dibayarkan sebelumnya.
                                Pembatalan atau perubahan jadwal yang dilakukan oleh Concetta Photos akan disampaikan
                                kepada klien sesegera mungkin dan kami akan
                                memberikan <mark>opsi lain, penjadwalan ulang, atau pengembalian dana</mark> jika
                                diperlukan.
                            </span>
                            <span class="lang-content lang-en d-none">
                                1. <mark>Cancellation by the client will result in the loss of the previously paid
                                    Deposit Payment (DP)</mark>.
                                Cancellations or schedule changes made by Concetta Photos will be communicated to the
                                client as soon as possible, and we will provide
                                <mark>alternative options, rescheduling, or a refund</mark> if necessary.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Location</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Lokasi</h5>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                1. <mark>Klien berhak memilih lokasi</mark> sesuai dengan <mark>preferensinya</mark>
                                maupun berdasarkan
                                <mark>rekomendasi dari kami</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                1. <mark>The client can choose a location</mark> based on their <mark>preference</mark>
                                or <mark>our recommendations</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                2. Lokasi pemotretan yang kami cakup <mark>terbatas hanya di pulau utama Bali</mark>.
                                Khusus area <mark>Nusa Penida</mark>, untuk sementara wilayah tersebut <mark>diluar
                                    cakupan kami</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                2. The photography locations we cover are <mark>limited to the main island of
                                    Bali</mark>. However,
                                the <mark>Nusa Penida area</mark> is currently <mark>beyond our coverage</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                3. Untuk pemotretan yang dilakukan <mark>di luar Bali</mark> sesuai dengan keinginan
                                klien, dapat
                                didiskusikan terlebih dahulu kepada kami dengan catatan <mark>klien wajib menanggung
                                    seluruh biaya akomodasi dan transportasi seluruh kru Concetta Photos</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                3. For photography sessions <mark>outside of Bali</mark>, as desired by the client, it
                                can be
                                discussed with us, provided that the <mark>client bears all accommodation and
                                    transportation expenses for the entire Concetta Photos crew</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                4. <mark>Biaya lokasi pemotretan</mark> yang dipungut oleh pihak pengelola setempat
                                berbeda disetiap tempat dan sepenuhnya <mark>ditanggung oleh klien</mark>.
                                Jika klien memilih lokasi pemotretan di tempat wisata yang memiliki tiket masuk, maka
                                <mark>klien wajib menanggung biaya tiket tersebut untuk seluruh crew Concetta
                                    Photos</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                4. <mark>The location fees</mark> imposed by the local authorities vary at each place
                                and are
                                <mark>entirely borne by the client</mark>. Suppose the client chooses a photography
                                location in a
                                tourist attraction that requires an entrance ticket. In that case, the <mark>client is
                                    responsible for covering the ticket expenses for the entire Concetta Photos
                                    crew</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Date & Time</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Tanggal dan Waktu</h5>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                1. <mark>Pergantian tanggal dapat dilakukan maksimal 2 minggu sebelum hari H</mark>.
                                Klien <mark>diwajibkan untuk mencocokkan tanggal baru</mark> tersebut dengan jadwal
                                kami. Jika <mark>tanggal baru yang dipilih tidak tersedia</mark> dan tidak menemukan
                                jalan tengah, maka kami <mark>tidak berkewajiban untuk mengembalikan deposit</mark> yang
                                telah dibayarkan.
                            </span>
                            <span class="lang-content lang-en d-none">
                                1. <mark>Date changes can be made up to 2 weeks before the scheduled day</mark>. The
                                client is <mark>required to communicate the new date</mark> with our availability.
                                Suppose <mark>the new date chosen is unavailable</mark>, and no compromise can be
                                reached. In that case, <mark>we are not obligated to refund the deposit</mark> payment.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                2. <mark>Pergantian jam pemotretan dapat dilakukan maksimal H-2</mark> selama
                                <mark>jadwal kami masih memungkinkan</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                2. <mark>Changes in the photography session time can be made up to 2 days before</mark>
                                the scheduled time, <mark>as long as our schedule allows</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                3. <mark>Perubahan jadwal yang dilakukan oleh klien pada hari H sesi foto</mark> akan
                                berlangsung, <mark>dikenakan biaya reschedule sebesar Rp650.000</mark>. Adapun
                                <mark>perubahan jadwal yang dilakukan klien ini selain dari alasan force majeure</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                3. <mark>The client will be charged a rescheduling fee of IDR650.000</mark> for
                                <mark>any schedule changes made on the day of the photo session</mark>. These schedule
                                changes by the client are applicable, <mark>excluding force majeure reasons</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                4. Jika klien <mark>memilih paket foto dengan 2-3 lokasi</mark>, maka <mark>waktu yang
                                    ditempuh selama perjalanan</mark> antara lokasi 1 ke lokasi lainnya <mark>masuk ke
                                    dalam waktu sesi pemotretan</mark> yang telah dipilih.
                            </span>
                            <span class="lang-content lang-en d-none">
                                4. If the client <mark>chooses a photo package with 2-3 locations</mark>, the
                                <mark>travel time between locations</mark> 1 and 2 will be <mark>included in the
                                    selected session time</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                5. <mark>Klien diharapkan datang dan siap pada waktu yang telah disepakati</mark> karena
                                <mark>keterlambatan klien berpotensi mengakibatkan keterlambatan pada jadwal klien kami
                                    yang lainnya</mark>. Kami <mark>berhak untuk membatalkan kesepakatan</mark> dan kami
                                <mark>tidak berkewajiban mengembalikan deposit</mark> yang telah dibayarkan.
                            </span>
                            <span class="lang-content lang-en d-none">
                                5. <mark>The client is expected to arrive and be ready at the agreed-upon time</mark>,
                                as <mark>client delays may cause delays in our schedule with other clients</mark>. We
                                <mark>reserve the right to cancel the agreement</mark> and are <mark>not obligated to
                                    refund the deposit payment</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                6. Jika <mark>klien tidak datang sesuai waktu yang telah disepakati</mark> maka
                                <mark>waktu pemotretan tetap dihitung</mark> sesuai dengan kesepakatan awal. Kecuali
                                <mark>klien menyertakan alasan yang dapat kami terima</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                6. Suppose <mark>the client arrives after the agreed-upon time</mark>. In that case,
                                <mark>the photography session time will still be counted</mark> according to the initial
                                agreement unless <mark>the client provides a valid and acceptable reason</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                7. Kami <mark>memberikan toleransi waktu keterlambatan</mark> (dengan alasan yang dapat
                                kami terima) selama <mark>15 menit awal setelah sesi waktu yang disepakati
                                    berjalan</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                7. We <mark>provide a grace period for lateness</mark> with a valid reason accepted of
                                up to <mark>15 minutes after the agreed-upon session time has started</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Editing and Photo Delivery</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Pengeditan dan Pengiriman Foto</h5>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                1. Foto yang diberikan oleh <mark>Concetta Photos</mark> telah melalui <mark>tahap
                                    seleksi dan penyesuaian tone</mark> meliputi <mark>eksposur, saturasi,
                                    kontras</mark> untuk memberikan hasil terbaik kepada klien.
                            </span>
                            <span class="lang-content lang-en d-none">
                                1. The photos provided by <mark>Concetta Photos</mark> have been through the
                                <mark>selection process and tone adjustments</mark>, including <mark>exposure,
                                    saturation, and contrast</mark>, to ensure the best results for the client.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                2. <mark>Jumlah foto</mark> yang kami berikan sesuai dengan yang tercantum pada
                                <mark>pricelist</mark> saat klien melakukan pemesanan. Bila klien ingin <mark>membeli
                                    foto lebih dari jumlah</mark> atau semua foto di luar yang tertera dalam pricelist,
                                maka akan <mark>dikenakan biaya tambahan</mark> sesuai dengan kesepakatan kedua belah
                                pihak.
                            </span>
                            <span class="lang-content lang-en d-none">
                                2. The <mark>number of photos</mark> we provide corresponds to the quantity stated in
                                the <mark>pricelist</mark> at the time of client booking. Suppose the client wishes to
                                <mark>purchase additional photos</mark> beyond the stated quantity or all photos not
                                listed in the pricelist. In that case, <mark>an additional fee will be applied</mark>
                                based on the agreement between both parties.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                3. Adapun <mark>fine edit</mark> yang dilakukan seperti <mark>mengecilkan bagian tubuh,
                                    menghilangkan jerawat, atau memuluskan kulit</mark>, akan dilakukan berdasarkan
                                <mark>permintaan klien</mark>. Foto yang akan menjalani fine edit akan <mark>dipilih
                                    oleh klien</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                3. Based on <mark>client requests</mark>, <mark>fine edits</mark> such as <mark>body
                                    slimming, blemish removal, or skin smoothing</mark> will be done. The <mark>client
                                    will choose</mark> the photos that will undergo fine edits.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                4. Foto-foto akan diberikan kepada klien melalui <mark>link Google Drive</mark> dalam
                                waktu <mark>paling cepat 2 hari</mark> setelah pemotretan dan <mark>paling lambat 3
                                    hari</mark> setelah pemotretan, dengan catatan <mark>klien sudah melunasi
                                    pembayaran</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                4. The photos will be delivered to the client via <mark>Google Drive link</mark> within
                                a <mark>minimum of 2 days</mark> and a <mark>maximum of 3 days</mark> after the
                                photoshoot, provided that the <mark>client has completed the payment</mark>.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                5. <mark>Link Google Drive</mark> akan aktif selama <mark>satu bulan</mark> terhitung
                                sejak Concetta Photos mengirimkan link. Jika dikemudian hari klien meminta
                                <mark>pengunggahan foto ulang</mark>, maka akan dikenakan <mark>biaya tambahan sebesar
                                    Rp100.000</mark>.
                            </span>
                            <span class="lang-content lang-en d-none">
                                5. The <mark>Google Drive link</mark> will be active for <mark>one month</mark> from the
                                date Concetta Photos sends the link. If, in the future, the client requests a
                                <mark>re-upload of the photos</mark> at a later date, an <mark>additional fee of
                                    IDR100.000</mark> will be applied.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Force Majeure</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Force Majeure</h5>
                    </div>

                    <div class="col-12">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-en">
                                1. Jika sesi pemotretan tidak dapat dilakukan karena <mark>keadaan yang di luar kendali
                                    manusia</mark> seperti <mark>cuaca buruk, bencana alam, pandemi</mark>, dan insiden
                                lainnya, Concetta Photos akan mencari <mark>alternatif tempat lain atau menjadwalkan
                                    ulang sesi</mark> sesuai kesepakatan kedua belah pihak.
                            </span>
                            <span class="lang-content lang-id d-none">
                                1. Suppose the photoshoot session cannot be conducted due to <mark>force majeure
                                    circumstances</mark> such as <mark>bad weather, natural disasters, pandemics</mark>,
                                and other incidents. In that case, Concetta Photos will seek <mark>alternative locations
                                    or reschedule the session</mark> according to the agreement between both parties.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-en">
                            Privacy</h5>
                        <h5 class="p-3 rounded shadow-sm border custom-text text-center lang-content lang-id d-none">
                            Privasi</h5>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                1. Kami selaku <mark>pemegang hak cipta</mark> yang berhak melakukan promosi dengan foto
                                yang telah kami ambil selama sesi. Bagi klien yang <mark>tidak bersedia fotonya kami
                                    publikasikan</mark> di sosial media atau media lainnya demi kepentingan promosi dari
                                Concetta Photos, harap untuk <mark>menginformasikan kepada kami</mark> sebelum atau
                                sesudah sesi foto berlangsung.
                            </span>
                            <span class="lang-content lang-en d-none">
                                1. As <mark>copyright holders</mark>, we can promote our services using the photos taken
                                during the session. For clients who <mark>wish to refrain from having their photos
                                    published</mark> on our social media or other platforms for promotional purposes by
                                Concetta Photos, please <mark>inform us</mark> before or after the photoshoot.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                2. Bagi klien yang <mark>tidak menginformasikan kepada kami</mark> mengenai poin 1, maka
                                kami anggap klien yang bersangkutan <mark>bersedia atau setuju foto yang telah diambil
                                    dipublikasikan</mark> untuk kepentingan promosi kami dan kami <mark>bebas dari
                                    kompensasi, pertanggungjawaban, gugatan hukum</mark>, dan <mark>tuntutan dalam jenis
                                    apapun</mark> dari pihak manapun dan dalam jumlah berapapun.
                            </span>
                            <span class="lang-content lang-en d-none">
                                2. For clients who <mark>do not inform us</mark> regarding point 1, we assume that the
                                client <mark>agrees or consents to the publication</mark> of the photos taken for our
                                promotional purposes. We are <mark>released from any compensation, liability, legal
                                    claims</mark>, and <mark>demands of any kind</mark> from any party in any amount.
                            </span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="p-4 rounded shadow-sm h-100 border custom-text-0 text-justify">
                            <span class="lang-content lang-id">
                                3. <mark>Concetta Photos memiliki secara penuh hak cipta</mark> atas semua foto yang
                                diambil selama sesi fotografi. Kami selaku penyedia jasa <mark>berhak menggunakan
                                    foto-foto</mark> yang telah kami ambil selama sesi berlangsung untuk keperluan
                                promosi kami, <mark>kecuali terjadi perjanjian antara kedua belah pihak</mark> sebelum
                                sesi berlangsung yang menyepakati bahwa foto klien bersifat privasi/tidak boleh
                                dipublikasi sesuai dengan poin sebelumnya.
                            </span>
                            <span class="lang-content lang-en d-none">
                                3. <mark>Concetta Photos holds full copyright ownership</mark> of all photos taken
                                during the photography session. As the service provider, we <mark>have the right to use
                                    the photos</mark> taken during the session for promotional purposes <mark>unless
                                    there is an agreement between both parties</mark> before the session stating that
                                the client’s photos are private/not to be published, as stated in previous point.
                            </span>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="p-4 rounded shadow-sm border custom-text-0 text-center">
                            <h6 class="lang-content lang-en custom-line-height fw-bold">
                                By paid deposit, the client is considered to have agreed with the T&Cs
                                above.
                            </h6>
                            <h6 class="lang-content lang-id d-none custom-line-height fw-bold">
                                Dengan membayar deposit, klien dianggap telah menyetujui syarat dan
                                ketentuan di atas.
                            </h6>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-10 col-md-8 col-lg-6 mx-auto custom-border"></div>
    </section>

    <section id="book" class="bg-body-custom">
        <main class="container">
            <div
                class="p-4 p-md-5 rounded text-body-emphasis d-flex justify-content-center align-items-center text-center">
                <div class="col-lg-6 px-0">
                    <h2 class="display-7 aesthetic-text-1 mb-3 lang-content lang-en">Let's book your session now!</h2>
                    <h2 class="display-7 aesthetic-text-1 mb-3 lang-content lang-id d-none">Yuk, booking sesi fotomu
                        sekarang!</h2>

                    <h5 class="display-10 custom-text-0 lang-content lang-en">Are the Terms and Conditions acceptable to
                        you?</h5>
                    <h5 class="display-10 custom-text-0 lang-content lang-id d-none">Apakah kamu setuju dengan Syarat &
                        Ketentuan di atas?</h5>

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