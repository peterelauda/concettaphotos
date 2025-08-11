<?php

namespace App\Http\Controllers;

use App\Models\Concettalks;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConcettalkController extends Controller
{
    /**
     * Display a listing of the resource and admin dashboard.
     */
    public function index()
    {
        $concettalks = Concettalks::latest()->get();
        $inquiries = Inquiry::latest()->get();
        return view('admin.dashboard', compact('concettalks', 'inquiries')); // To transfer concettalks and inquiries to the admin dashboard
    }

    /**
     * Show the form for creating a concettalk
     */
    public function create()
    {
        return view('concettalks.create');
    }

    /**
     * Store a newly created concettalk in storage and attribute in database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image_url' => 'required|file|mimes:jpg,jpeg,png,mp4,mov,avi|max:35840', // Maximum size 35 MB and supports various formats
            'caption' => 'nullable|string',
            'category' => 'nullable|string',
        ]);

        // To get image_url path (which is picture or video)
        $filePath = null;
        if ($request->hasFile('image_url')) {
            $filePath = $request->file('image_url')->store('concettalks', 'public');
        }

        Concettalks::create([
            'image_url' => $filePath,
            'caption' => $request->caption,
            'category' => $request->category,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Concettalk created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function edit(Concettalks $concettalk)
    {
        return view('admin.dashboard', compact('concettalk')); // To edit a specific concettalk by passing it to the view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Concettalks $concettalk)
    {
        $data = $request->only(['caption', 'category']);

        if ($request->hasFile('image_url')) { // If a new image is added
            Storage::disk('public')->delete($concettalk->image_url); // Delete old image
            $data['image_url'] = $request->file('image_url')->store('concettalks', 'public'); // Store new image
        }

        $concettalk->update($data);

        return redirect()->route('admin.dashboard')->with('success', 'Concettalk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concettalks $concettalk)
    {
        Storage::disk('public')->delete($concettalk->image_url); // Delete the image file from storage
        $concettalk->delete(); // Delete the concettalk record in database

        return redirect()->route('admin.dashboard')->with('success', 'Concettalk deleted.');
    }
}
