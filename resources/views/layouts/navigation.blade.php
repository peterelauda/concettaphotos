<!-- resources/views/partials/navbar.blade.php -->
<header id="mainHeader"
    class="d-flex align-items-center justify-content-between py-3 position-fixed top-0 start-0 w-100 z-3 transition-header">
    <div class="d-none d-xxl-flex align-items-start" style="width: 20%">

        <div class="lang-toggle mx-3">
            <input type="checkbox" id="langSwitch">
            <label for="langSwitch">
                <span class="switch-thumb"></span>
            </label>
        </div>

    </div>

    <div class="d-none d-xxl-flex align-items-center justify-content-center" style="width: 80%">

        <div class="d-flex align-items-center justify-content-end" style="width: 45%">
            <li class="nav-item dropdown list-unstyled me-5">
                <a href="#" class="nav-link dropdown-toggle lang-content lang-en" data-bs-toggle="dropdown">ABOUT</a>
                <a href="#" class="nav-link dropdown-toggle lang-content lang-id d-none"
                    data-bs-toggle="dropdown">TENTANG</a>

                <ul class="dropdown-menu fs-7 py-2 custom-text-0">
                    <li><a class="dropdown-item" href="/concettateam">CONCETTA TEAM</a></li>
                    <li><a class="dropdown-item" href="/about">CONCETTA PHOTOS</a></li>

                    <li class="dropdown-submenu position-relative">
                        <a class="dropdown-item dropdown-toggle lang-content lang-en me-3" href="#">
                            TERMS AND CONDITIONS
                            <span class="submenu-arrow me-0">›</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item lang-content lang-en" href="/about#tac">HOLIDAY &
                                    FAMILY</a></li>
                            <li><a class="dropdown-item lang-content lang-en"
                                    href="/about#tac-prewedding">PREWEDDING</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu position-relative">
                        <a class="dropdown-item dropdown-toggle lang-content lang-id d-none me-3" href="#">
                            SYARAT DAN KETENTUAN
                            <span class="submenu-arrow">›</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item lang-content lang-id d-none" href="/about#tac">HOLIDAY &
                                    FAMILY</a></li>
                            <li><a class="dropdown-item lang-content lang-id d-none"
                                    href="/about#tac-prewedding">PREWEDDING</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown list-unstyled me-5">
                <a href="/pricelist" class="nav-link lang-content lang-en">PRICE LIST</a>
                <a href="/pricelist" class="nav-link lang-content lang-id d-none">DAFTAR HARGA</a>

            </li>

            <li class="nav-item dropdown list-unstyled">
                <a href="#" class="nav-link dropdown-toggle lang-content lang-en" data-bs-toggle="dropdown">OUR
                    SERVICES</a>
                <a href="#" class="nav-link dropdown-toggle lang-content lang-id d-none"
                    data-bs-toggle="dropdown">LAYANAN KAMI</a>
                <ul class="dropdown-menu fs-7 py-2 custom-text-0">
                    <li><a class="dropdown-item lang-content lang-en" href="/#service">CATALOG</a></li>
                    <li><a class="dropdown-item lang-content lang-id d-none" href="/#service">KATALOG</a></li>
                    <li><a class="dropdown-item" href="/holidayfamily">HOLIDAY & FAMILY</a></li>
                    <li><a class="dropdown-item" href="/couple">COUPLE</a></li>
                    <li><a class="dropdown-item" href="/prewedding">PREWEDDING</a></li>
                    <li><a class="dropdown-item" href="/wedding">WEDDING</a></li>
                    <li><a class="dropdown-item" href="/branding">BRANDING</a></li>
                </ul>
            </li>
        </div>

        <div class="mx-5" width="10%">
            <a href="{{ url('/') }}">
                <img src="{{ asset('logo_cp1.png') }}" alt="Logo Concetta Photos" width="70px">
            </a>
        </div>

        <div class="d-flex align-items-center justify-content-start" style="width: 45%">
            <li class="nav-item dropdown list-unstyled">
                <a href="/#testimonial" class="nav-link lang-content lang-en">TESTIMONIALS</a>
                <a href="/#testimonial" class="nav-link lang-content lang-id d-none">TESTIMONI</a>
            </li>

            <li class="nav-item dropdown list-unstyled ms-5">
                <a href="/concettalk" class="nav-link">CONCETTALK</a>
            </li>

            <li class="nav-item dropdown list-unstyled ms-5">
                <a href="/faqs" class="nav-link">FAQs</a>
            </li>
        </div>

    </div>

    <div class="dropdown d-none d-xxl-block text-end" style="width: 20%">
        @if (Route::has('your-inquiries'))
            <nav class="d-flex flex-wrap justify-content-center justify-content-xxl-end">
                @auth
                    @php
                        $user = Auth::user();
                        $dashboardRoute = match ($user->role) {
                            'admin' => route('admin.dashboard'),
                            'client' => route('client.dashboard'),
                            default => '#',
                        };

                        $buttonLabelEn = match ($user->role) {
                            'admin' => 'ADMIN DASHBOARD',
                            'client' => 'INQUIRY HISTORY',
                            default => 'Dashboard',
                        };

                        $buttonLabelId = match ($user->role) {
                            'admin' => 'DASBOR ADMIN',
                            'client' => 'RIWAYAT PERTANYAAN',
                            default => 'Dasbor',
                        };
                    @endphp

                @else
                    <a href="{{ route('your-inquiries') }}"
                        class="btn btn-outline-primary flex-fill me-3 my-1 lang-content lang-en" style="max-width: 154px">YOUR
                        INQUIRIES</a>
                    <a href="{{ route('your-inquiries') }}"
                        class="btn btn-outline-primary flex-fill me-3 my-1 lang-content lang-id d-none"
                        style="max-width: 154px">PERTANYAANMU</a>
                    @if (Route::has('join'))
                        <a href="{{ route('join') }}" class="btn btn-primary flex-fill me-3 my-1 lang-content lang-en"
                            style="max-width: 154px">JOIN</a>
                        <a href="{{ route('join') }}" class="btn btn-primary flex-fill me-3 my-1 lang-content lang-id d-none"
                            style="max-width: 154px">GABUNG</a>
                    @endif
                @endauth
            </nav>
        @endif

        @auth
            <a href="{{ $dashboardRoute }}" class="btn btn-primary flex-fill me-3 my-1 lang-content lang-en"
                style="max-width: 190px">{{ $buttonLabelEn }}</a>
            <a href="{{ $dashboardRoute }}" class="btn btn-primary flex-fill me-3 my-1 lang-content lang-id d-none"
                style="max-width: 190px">{{ $buttonLabelId }}</a>

            <button class="btn btn-light dropdown-toggle me-3 my-1" type="button" id="userDropdown" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ Str::before(Auth::user()->full_name, ' ') }}
            </button>
        @endauth

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li>
                <a class="dropdown-item lang-content lang-en" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
            </li>
            <li>
                <a class="dropdown-item lang-content lang-id d-none"
                    href="{{ route('profile.edit') }}">{{ __('Profil') }}</a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item lang-content lang-en">{{ __('Log Out') }}</button>
                    <button type="submit" class="dropdown-item lang-content lang-id d-none">{{ __('Keluar') }}</button>
                </form>
            </li>
        </ul>
    </div>

    <div class="d-flex align-items-center d-xxl-none w-100 justify-content-between px-3">
        <button class="btn p-0 bg-transparent border-0" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#mobileMenu" aria-controls="mobileMenu" style="width: 60px; height: 32px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="32" fill="#444" class="bi bi-list icon"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            </svg>
        </button>

        <a href="{{ url('/') }}">
            <img src="{{ asset('logo_cp1.png') }}" alt="Logo Concetta Photos" width="56px">
        </a>

        <div class="lang-toggle">
            <input type="checkbox" id="langSwitch1">
            <label for="langSwitch1">
                <span class="switch-thumb"></span>
            </label>
        </div>
    </div>

</header>

<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header position-relative justify-content-center">
        <h5 class="offcanvas-title m-0">
            <a href="{{ url('/') }}">
                <img src="{{ asset('logo_cp1.png') }}" alt="Logo Concetta Photos" width="56px">
            </a>
        </h5>

        <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="accordionMenu">

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-about">
                    <button class="accordion-button collapsed btn-primary lang-content lang-en" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse-about" aria-expanded="false"
                        aria-controls="collapse-about">
                        ABOUT
                    </button>
                    <button class="accordion-button collapsed btn-primary lang-content lang-id d-none" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse-about" aria-expanded="false"
                        aria-controls="collapse-about">
                        TENTANG
                    </button>
                </h2>
                <div id="collapse-about" class="accordion-collapse collapse" aria-labelledby="heading-about"
                    data-bs-parent="#accordionMenu">
                    <div class="accordion-body pb-4">
                        <ul class="list-unstyled mb-0">
                            <li><a class="nav-link text-start" href="{{ url('/concettateam') }}">CONCETTA
                                    TEAM</a></li>
                            <li><a class="nav-link text-start" href="{{ url('/about') }}">CONCETTA PHOTOS</a>
                            </li>

                            <li class="accordion-submenu lang-content lang-en mt-1">
                                <button type="button" class="nav-link text-start submenu-toggle btn w-100 text-start">
                                    TERMS AND CONDITIONS
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="32" fill="currentColor"
                                        class="bi bi-chevron-down ms-3 mb-1" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </button>
                                <ul class="list-unstyled submenu-list pt-4 ps-3">
                                    <li><a class="nav-link text-start" href="{{ url('/about#tac') }}">HOLIDAY &
                                            FAMILY</a></li>
                                    <li><a class="nav-link text-start"
                                            href="{{ url('/about#tac-prewedding') }}">PREWEDDING</a></li>
                                </ul>
                            </li>

                            <li class="accordion-submenu lang-content lang-id d-none mt-1">
                                <button type="button" class="nav-link text-start submenu-toggle btn w-100 text-start">
                                    SYARAT DAN KETENTUAN
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="32" fill="currentColor"
                                        class="bi bi-chevron-down ms-3 mb-1" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                    </svg>
                                </button>
                                <ul class="list-unstyled submenu-list pt-4 ps-3">
                                    <li><a class="nav-link text-start" href="{{ url('/about#tac') }}">HOLIDAY &
                                            FAMILY</a></li>
                                    <li><a class="nav-link text-start"
                                            href="{{ url('/about#tac-prewedding') }}">PREWEDDING</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-pricelist">
                    <a href="{{ url('/pricelist') }}"
                        class="accordion-button collapsed btn-primary text-decoration-none no-dropdown lang-content lang-en">
                        PRICE LIST
                    </a>
                    <a href="{{ url('/pricelist') }}"
                        class="accordion-button collapsed btn-primary text-decoration-none no-dropdown lang-content lang-id d-none">
                        DAFTAR HARGA
                    </a>
                </h2>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-service">
                    <button class="accordion-button collapsed btn-primary lang-content lang-en" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse-service" aria-expanded="false"
                        aria-controls="collapse-service">
                        OUR SERVICES
                    </button>
                    <button class="accordion-button collapsed btn-primary lang-content lang-id d-none" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse-service" aria-expanded="false"
                        aria-controls="collapse-service">
                        LAYANAN KAMI
                    </button>
                </h2>
                <div id="collapse-service" class="accordion-collapse collapse" aria-labelledby="heading-service"
                    data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <ul class="list-unstyled mb-0">
                            <li><a class="nav-link text-start lang-content lang-en"
                                    href="{{ url('/#service') }}">CATALOG</a>
                            </li>
                            <li><a class="nav-link text-start lang-content lang-id d-none"
                                    href="{{ url('/#service') }}">KATALOG</a>
                            </li>
                            <li><a class="nav-link text-start" href="{{ url('/holidayfamily') }}">HOLIDAY
                                    & FAMILY</a>
                            </li>
                            <li><a class="nav-link text-start" href="{{ url('/couple') }}">COUPLE</a>
                            </li>
                            <li><a class="nav-link text-start" href="{{ url('/prewedding') }}">PREWEDDING</a>
                            </li>
                            <li><a class="nav-link text-start" href="{{ url('/wedding') }}">WEDDING</a>
                            </li>
                            <li><a class="nav-link text-start" href="{{ url('/branding') }}">BRANDING</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-testimonial">
                    <a href="{{ url('/#testimonial') }}"
                        class="accordion-button collapsed btn-primary text-decoration-none no-dropdown lang-content lang-en">
                        TESTIMONIALS
                    </a>
                    <a href="{{ url('/#testimonial') }}"
                        class="accordion-button collapsed btn-primary text-decoration-none no-dropdown lang-content lang-id d-none">
                        TESTIMONI
                    </a>
                </h2>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-concettalk">
                    <a href="{{ url('/concettalk') }}"
                        class="accordion-button collapsed btn-primary text-decoration-none no-dropdown">
                        CONCETTALK
                    </a>
                </h2>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-faqs">
                    <a href="{{ url('/faqs') }}"
                        class="accordion-button collapsed btn-primary text-decoration-none no-dropdown">
                        FAQs
                    </a>
                </h2>
            </div>

        </div>

        <div class="mt-4">
            @auth
                <div class="fw-bold text-base text-dark">{{ Auth::user()->full_name }}</div>
                <div class="text-muted text-sm">{{ Auth::user()->email }}</div>
            @endauth
        </div>

        <div class="mt-4">
            @if (Route::has('join'))
                @auth
                    @php
                        $user = Auth::user();
                        $dashboardRoute = match ($user->role) {
                            'admin' => route('admin.dashboard'),
                            'client' => route('client.dashboard'),
                            default => '#',
                        };

                        $buttonLabelEn = match ($user->role) {
                            'admin' => 'Admin Dashboard',
                            'client' => 'Inquiry History',
                            default => 'Dashboard',
                        };

                        $buttonLabelId = match ($user->role) {
                            'admin' => 'Dasbor Admin',
                            'client' => 'Riwayat Pertanyaan',
                            default => 'Dasbor',
                        };
                    @endphp

                    <a href="{{ $dashboardRoute }}"
                        class="btn btn-primary w-100 mb-2 lang-content lang-en">{{ $buttonLabelEn }}</a>
                    <a href="{{ $dashboardRoute }}"
                        class="btn btn-primary w-100 mb-2 lang-content lang-id d-none">{{ $buttonLabelId }}</a>
                @else
                    <a href="{{ route('your-inquiries') }}" class="btn btn-outline-primary w-100 mb-2 lang-content lang-en">YOUR
                        INQUIRIES</a>
                    <a href="{{ route('your-inquiries') }}"
                        class="btn btn-outline-primary w-100 mb-2 lang-content lang-id d-none">PERTANYAANMU</a>
                    @if (Route::has('join'))
                        <a href="{{ route('join') }}" class="btn btn-primary w-100 lang-content lang-en">JOIN</a>
                        <a href="{{ route('join') }}" class="btn btn-primary w-100 lang-content lang-id d-none">GABUNG</a>
                    @endif
                @endauth
            @endif

            <a href="{{ route('profile.edit') }}" class="btn btn-primary w-100 mb-2 lang-content lang-en">
                {{ __('Profile') }}
            </a>
            <a href="{{ route('profile.edit') }}" class="btn btn-primary w-100 mb-2 lang-content lang-id d-none">
                {{ __('Profil') }}
            </a>

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-danger w-100 mb-2 lang-content lang-en">
                    {{ __('Log Out') }}
                </button>
                <button type="submit" class="btn btn-outline-danger w-100 mb-2 lang-content lang-id d-none">
                    {{ __('Keluar') }}
                </button>
            </form>

        </div>
    </div>
</div>