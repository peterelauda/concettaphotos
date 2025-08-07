<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ConcettalkController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get(
        '/admin/dashboard',
        [InquiryController::class, 'adminIndex']
    )->name('admin.dashboard');

    Route::resource('concettalks', ConcettalkController::class);
});

Route::middleware(['auth', 'verified', 'client'])->group(function () {
    Route::get(
        '/client/dashboard',
        [InquiryController::class, 'clientIndex']
    )->name('client.dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/submit-inquiry', [InquiryController::class, 'store'])->name('inquiry.store');

Route::get('/concettalk', function () {
    $concettalks = \App\Models\Concettalks::latest()->get();
    return view('concettalk', compact('concettalks'));
});

require __DIR__ . '/auth.php';

Route::get('/about', function () {
    return view('about');
});

Route::get('/concettateam', function () {
    return view('concettateam');
});

Route::get('/pricelist', function () {
    return view('pricelist');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/holidayfamily', function () {
    return view('holidayfamily');
});

Route::get('/couple', function () {
    return view('couple');
});

Route::get('/prewedding', function () {
    return view('prewedding');
});

Route::get('/wedding', function () {
    return view('wedding');
});

Route::get('/branding', function () {
    return view('branding');
});

Route::get('/novitafamily', function () {
    return view('novitafamily');
});

Route::get('/adityafamily', function () {
    return view('adityafamily');
});

Route::get('/amelitafamily', function () {
    return view('amelitafamily');
});

Route::get('/lindafamily', function () {
    return view('lindafamily');
});

Route::get('/sekarfamily', function () {
    return view('sekarfamily');
});

Route::get('/emiemieha', function () {
    return view('emiemieha');
});

Route::get('/andiangginiprewedding', function () {
    return view('andiangginiprewedding');
});

Route::get('/johancindyprewedding', function () {
    return view('johancindyprewedding');
});

Route::get('/mettaiskandarprewedding', function () {
    return view('mettaiskandarprewedding');
});

Route::get('/pirdadegusprewedding', function () {
    return view('pirdadegusprewedding');
});

Route::get('/mettaiskandarwedding', function () {
    return view('mettaiskandarwedding');
});

Route::get('/corenationsportwearbranding', function () {
    return view('corenationsportwearbranding');
});

Route::get('/corenationswimwearbranding', function () {
    return view('corenationswimwearbranding');
});

Route::get('/tamakidsbranding', function () {
    return view('tamakidsbranding');
});

Route::get('/test-toast', function () {
    return redirect('/')->with('success', 'The client has been successfully registered');
});

Route::get('/test-toast-faqs', function () {
    return redirect('/faqs')->with('success', 'Inquiry submitted successfully.');
});