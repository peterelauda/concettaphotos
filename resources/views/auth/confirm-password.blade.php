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
                    <div class="mb-4 text-sm text-muted">
                        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                    </div>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <!-- Password -->
                        <div class="mb-3">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="form-control mt-1" type="password" name="password"
                                required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Actions -->
                        <div class="d-flex justify-content-end mt-4">
                            <x-primary-button class="btn btn-primary">
                                {{ __('Confirm') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-guest-layout>