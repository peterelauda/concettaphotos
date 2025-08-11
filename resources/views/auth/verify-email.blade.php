<x-guest-layout>
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center px-3">
        <div class="w-100" style="max-width: 500px;">

            <!-- Logo Centered -->
            <div class="text-center mb-4">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('logo_cp.png') }}" alt="Logo" class="img-fluid" style="max-height: 80px;">
                </a>
            </div>

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">

                    <!-- Description -->
                    <p class="text-muted small mb-4">
                        {{ __('Thanks for signing up! Before getting started, please verify your email address by clicking the link we sent to your inbox. If you didn\'t receive the email, you can request another one below.') }}
                    </p>

                    <!-- Status message -->
                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success small">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif

                    <!-- Actions -->
                    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2 mt-4">

                        <!-- Resend Verification -->
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <x-primary-button class="btn btn-primary w-100 w-sm-auto">
                                {{ __('Resend Verification Email') }}
                            </x-primary-button>
                        </form>

                        <!-- Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary w-100 w-sm-auto">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-guest-layout>