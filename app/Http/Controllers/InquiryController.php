<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Inquiry;
use App\Models\Concettalks;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'full_name' => 'required|string',
            'phone_number' => 'required|string',
            'domicile' => 'required|string',
            'country' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'preference' => 'nullable|string',
            'category' => 'required|string',
            'payment_method' => 'required|string',
            'reference' => 'required|string',
            'g-recaptcha-response' => 'required',
        ]);

        // Kirim token ke Google untuk verifikasi
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $result = $response->json();

        if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
            return back()->withErrors(['captcha' => 'reCAPTCHA verification failed.'])->withInput();
        }

        // Jika lolos reCAPTCHA, lanjutkan simpan data
        $inquiry = Inquiry::create($data);
        Log::info('Inquiry berhasil disimpan', ['id' => $inquiry->id]);

        if ($inquiry->user_id) {
            return redirect('/client/dashboard')->with('success', 'Inquiry submitted successfully.');
        } else {
            return redirect('/faqs')->with('success', 'Inquiry submitted successfully.');
        }
    }

    public function clientIndex()
    {
        $user = Auth::user();

        $inquiries = Inquiry::where('user_id', $user->id)->latest()->get();

        return view('client.dashboard', compact('inquiries'));
    }

    public function adminIndex()
    {
        $inquiries = Inquiry::latest()->get();
        $concettalks = Concettalks::latest()->get();

        return view('admin.dashboard', compact('inquiries', 'concettalks'));
    }
}
