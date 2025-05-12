<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'created_at'); // kolom pengurutan
        $order = $request->get('order', 'desc');     // arah pengurutan (asc/desc)

        $travels = Travel::orderBy($sort, $order)->paginate(10); // paginate, bukan get
        // $travel = Travel::all();
        $categories = Category::all();
        return view('travels.index',compact('travels','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('travels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        // 'departure' => 'nullable|string|max:255',
        'category_id' => 'required|exists:travel_categories,id',
        'destination' => 'required|string|max:255',
        'price' => 'required|integer',
        'image' => 'required|image|mimes:jpg,jpeg,png',
        'features' => 'required|array',
        'features.*' => 'string',
        'waLink' => 'nullable|string',
        'category_id' => 'required|exists:categories,id',
    ]);

    $path = $request->file('image')->store('travel', 'public');
    $validated['image'] = $path;

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
