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
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<style>
    .grecaptcha-badge {
        bottom: 135px !important;
    }
</style>

<!-- Content -->
<x-app-layout>

    @php
        $user = Auth::user();
    @endphp

    <div class="container p-4" style="margin-top: 210px; min-height: 70%;">
        <h1 class="aesthetic-text-1 display-6 mb-2">Inquiry</h1>

        <p class="custom-text-0 mb-5" style="font-size: 2rem;">Welcome,
            {{ (Str::before(Auth::user()->full_name, ' ')) }}!
        </p>

        <h2 class="custom-text-3 mb-3" style="font-size: 1.7rem;">Inquiry Upload</h2>

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

        <form id="inquiry-form" action="{{ route('inquiry.store') }}" method="POST">
            @csrf

            <div class="row g-3 d-flex justify-content-center align-items-center">

                <input type="hidden" name="user_id" value="{{ $user->id }}">

                <input type="hidden" name="full_name" value="{{ $user->full_name }}">

                <input type="hidden" name="phone_number" value="{{ $user->phone_number }}">

                <input type="hidden" name="domicile" value="{{ $user->domicile }}">

                <input type="hidden" name="country" value="{{ $user->country }}">

                <input type="hidden" name="email" value="{{ $user->email }}">

                <!-- Message -->
                <div class="col-12">
                    <label for="message" class="form-label custom-text-0">Message</label>
                    <input type="text" class="form-control custom-text-0 rounded" id="message" name="message"
                        placeholder="We would like to hear your message!" required>
                    <div class="invalid-feedback">Message required.</div>
                </div>

                <!-- Preference -->
                <div class="col-12">
                    <label for="taste" class="form-label custom-text-0">Preference (Optional)</label>
                    <input type="text" class="form-control custom-text-0 rounded" id="taste" name="preference"
                        placeholder="We would like to hear more about your wanted style in photo session!">
                </div>

                <!-- Category -->
                <div class="col-md-6">
                    <label for="category" class="form-label custom-text-0">Category</label>
                    <select class="form-select custom-text-0 rounded" id="category" name="category" required>
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
                    <select class="form-select custom-text-0 rounded" id="payment_method" name="payment_method"
                        required>
                        <option value="">-- Choose Payment Method --</option>
                        <option value="Bank Transfer">Bank Transfer (Local Client)</option>
                        <option value="Credit Card">Wise (International Client)</option>
                    </select>
                    <div class="invalid-feedback">Please select a payment method.</div>
                </div>

                <!-- Reference -->
                <div class="col-12 mb-4">
                    <label for="reference" class="form-label custom-text-0">How did you hear about us?</label>
                    <input type="text" class="form-control custom-text-0 rounded" id="reference" name="reference"
                        placeholder="e.g. Instagram, Google, Friend" required>
                    <div class="invalid-feedback">Please select a payment method.</div>
                </div>

                <!-- Submit Button -->
                <div class="col-12 mb-4">
                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                </div>

            </div>
        </form>

        <h2 class="custom-text-3 mb-3" style="font-size: 1.7rem;">Inquiries History</h2>

        @if($inquiries->isEmpty())
            <p class="custom-text-0">You have not submitted any inquiries yet.</p>
        @else
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
                @foreach ($inquiries as $inquiry)
                    <div class="col mb-4">
                        <div class="card border-1 shadow-sm rounded-4 h-100">
                            <div class="card-body px-3 py-3 d-flex flex-column justify-content-between" style="height: 100%;">

                                <div>
                                    <h5 class="card-title mb-2 custom-text-3">{{ $inquiry->full_name ?? 'Nama tidak tersedia' }}
                                    </h5>
                                    <p class="text-muted mb-2 custom-text-0">{{ $inquiry->email ?? 'Email tidak tersedia' }}</p>

                                    <p class="card-text small mb-3 custom-text-0">
                                        <strong>Message:</strong> {{ $inquiry->message }}<br>
                                        <strong>Preference:</strong> {{ $inquiry->preference ?? '—' }}<br>
                                        <strong>Category:</strong> {{ $inquiry->category }}<br>
                                        <strong>Payment Method:</strong> {{ $inquiry->payment_method }}<br>
                                        <strong>Reference:</strong> {{ $inquiry->reference }}<br>
                                    </p>
                                </div>

                                <div class="mt-auto d-flex justify-content-between align-items-center custom-text-0">
                                    <small class="text-muted">
                                        Submitted at {{ $inquiry->created_at->format('d M Y H:i') }}
                                    </small>
                                    @if(!empty($inquiry->email))
                                        <a href="mailto:{{ $inquiry->email }}" class="btn btn-sm btn-outline-primary">
                                            Reply
                                        </a>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <section id="footer" class="mt-5">
        @include('partials.footer')
    </section>


</x-app-layout>

<script src="{{ asset('js/custom.js') }}"></script>

<script>
    $(document).ready(function () {
        $('#country').select2({
            placeholder: "-- Select Country --",
            allowClear: true,
            width: '100%'
        });
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
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>