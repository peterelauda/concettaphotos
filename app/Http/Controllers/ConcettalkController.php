<?php

namespace App\Http\Controllers;

use App\Models\Concettalks;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConcettalkController extends Controller
{
    public function index()
    {
        // Tidak digunakan jika dashboard menampilkan semuanya
        $concettalks = Concettalks::latest()->get();
        $inquiries = Inquiry::latest()->get();
        return view('admin.dashboard', compact('concettalks', 'inquiries'));
    }

    public function create()
    {
        return view('concettalks.create');
    }

    public function store(Request $request)
    {
        $file = $request->file('image_url')->store('concettalks', 'public');

        Concettalks::create([
            'image_url' => $file,
            'caption' => $request->caption,
            'category' => $request->category,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Concettalk created successfully.');
    }

    public function edit(Concettalks $concettalk)
    {
        return view('admin.dashboard', compact('concettalk'));
    }

    public function update(Request $request, Concettalks $concettalk)
    {
        $data = $request->only(['caption', 'category']);

        if ($request->hasFile('image_url')) {
            Storage::disk('public')->delete($concettalk->image_url);
            $data['image_url'] = $request->file('image_url')->store('concettalks', 'public');
        }

        $concettalk->update($data);

        return redirect()->route('admin.dashboard')->with('success', 'Concettalk updated successfully.');
    }

    public function destroy(Concettalks $concettalk)
    {
        Storage::disk('public')->delete($concettalk->image_url);
        $concettalk->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Concettalk deleted.');
    }
}
