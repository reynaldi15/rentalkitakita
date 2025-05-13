<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Hanya izinkan sorting berdasarkan kolom yang valid
        $allowedSorts = ['created_at', 'price', 'destination'];
        $sort = in_array($request->get('sort'), $allowedSorts) ? $request->get('sort') : 'created_at';

        // Pastikan order hanya asc atau desc
        $order = $request->get('order') === 'asc' ? 'asc' : 'desc';

        // Ambil data travel dengan urutan dan pagination
        $travels = Travel::orderBy($sort, $order)->paginate(10);

        // Ambil semua kategori
        $categories = Category::all();

        return view('travels.index', compact('travels', 'categories', 'sort', 'order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('travels.create');
    }


    public function store(Request $request)
    {
        // Validasi dasar
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'destination' => [
                'required',
                'string',
                'max:255',
                // Validasi unik kombinasi kategori + destination
                Rule::unique('travels')->where(function ($query) use ($request) {
                    return $query->where('category_id', $request->category_id);
                }),
            ],
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'features' => 'required|array',
            'features.*' => 'string',
            'waLink' => 'nullable|string',
        ]);

        // Cek jika destination == nama kategori (case-insensitive)
        $category = Category::find($request->category_id);
        if ($category && strtolower($request->destination) === strtolower($category->name)) {
            return back()->withErrors(['destination' => 'Destination tidak boleh sama dengan nama kategori.'])->withInput();
        }

        // Upload gambar
        $path = $request->file('image')->store('travel', 'public');
        $validated['image'] = $path;

        // Simpan
        Travel::create($validated);

        return redirect()->route('travels.index')->with('success', 'Data travel berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Travel $travel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        return view('travels.edit',compact('travel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Travel $travel)
    {
        $validated = $request->validate([
            // 'departure' => 'nullable|string|max:255',
            'category_id' => 'required|exists:travel_categories,id',
            'destination' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'features' => 'required|array',
            'features.*' => 'string',
            'waLink' => 'nullable|string',
            'category_id' => 'required|exists:categories,id'
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($travel->image);
            $validated['image'] = $request->file('image')->store('travels', 'public');
        }

        $travel->update($validated);

        return redirect()->route('travels.index')->with('success', 'Travels berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        Storage::disk('public')->delete($travel->image);
        $travel->delete();

        return redirect()->route('travels.index')->with('success', 'Travel berhasil dihapus.');
    }
}
