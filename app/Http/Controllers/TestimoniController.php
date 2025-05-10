<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    public function index()
    {
        // $galleries = Testimoni::latest()->get();
        $testimonis = Testimoni::all();
        return view('testimonis.index', compact('testimonis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'dates'  => 'nullable|date'
 
        ]);

        $path = $request->file('image')?->store('testimonis', 'public');

        Testimoni::create([
            'title' => $request->title,
            'image' => $path,
            'dates'  => now()
        ]);

        return redirect()->back()->with('success', 'testimoni berhasil ditambahkan.');
    }

    public function update(Request $request, Testimoni $testimoni)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($testimoni->image) {
                Storage::disk('public')->delete($testimoni->image);
            }
            $testimoni->image = $request->file('image')->store('testimonis', 'public');
        }

        $testimoni->title = $request->title;
        $testimoni->save();

        return redirect()->back()->with('success', 'testimonis berhasil diperbarui.');
    }

    public function destroy(Testimoni $testimoni)
    {
        if ($testimoni->image) {
            Storage::disk('public')->delete($testimoni->image);
        }

        $testimoni->delete();
        return redirect()->back()->with('success', 'testimoni berhasil dihapus.');
    }
}
