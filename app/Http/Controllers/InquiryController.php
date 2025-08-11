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
    /**
     * Store a newly created inquiry in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id', // Optional, if user is logged in
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

        // Sent reCAPTCHA verification request
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $result = $response->json(); // Decode the JSON response and store it in $result

        if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
            return back()->withErrors(['captcha' => 'reCAPTCHA verification failed.'])->withInput();
        }

        // If reCAPTCHA passes, proceed to save the data
        $inquiry = Inquiry::create($data);
        Log::info('Inquiry berhasil disimpan', ['id' => $inquiry->id]);

        // Redirect based on whether the client submitted the inquiry in client dashboard or guest in FAQs
        if ($inquiry->user_id) {
            return redirect('/client/dashboard')->with('success', 'Inquiry submitted successfully.');
        } else {
            return redirect('/faqs')->with('success', 'Inquiry submitted successfully.');
        }
    }

    /**
     * Display the inquiries for the client dashboard.
     */
    public function clientIndex()
    {
        $user = Auth::user();

        $inquiries = Inquiry::where('user_id', $user->id)->latest()->get();

        return view('client.dashboard', compact('inquiries'));
    }

    /**
     * Display the inquiries for the admin dashboard.
     */
    public function adminIndex()
    {
        $inquiries = Inquiry::latest()->get();
        $concettalks = Concettalks::latest()->get();

        return view('admin.dashboard', compact('inquiries', 'concettalks'));
    }
}
