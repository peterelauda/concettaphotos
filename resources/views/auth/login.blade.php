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

                    <form method="POST" action="{{ route('your-inquiries') }}">
                        @csrf

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-3" :status="session('status')" />

                        <!-- Email -->
                        <div class="mb-3">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="form-control mt-1" type="email" name="email" :value="old('email')"
                                required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="form-control mt-1" type="password" name="password" required
                                autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="form-check mb-3">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <label class="form-check-label text-sm text-muted" for="remember_me">
                                {{ __('Remember me') }}
                            </label>
                        </div>

                        <!-- Actions -->
                        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mt-4">
                            @if (Route::has('password.request'))
                                <a class="text-muted text-sm mb-2 mb-sm-0" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-primary-button class="btn btn-primary ms-sm-3 w-50 w-sm-auto">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-guest-layout>
