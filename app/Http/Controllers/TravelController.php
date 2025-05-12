<?php

namespace App\Http\Controllers;

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
        return view('travels.index',compact('travels'));
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
        $validated  = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'features' => 'required|array',
            'features.*' => 'string',
            'desinasi' => 'required|string|max:255',
            'waLink'=> 'nullable'
        ]);


        $path = $request->file('image')->strore('travels','public');
        $validated['image']= $path;
        Travel::create($validated);
        return redirect()->route('travels.index')->with('successd','Travel has been added');
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
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'features' => 'required|array',
            'features.*' => 'string',
            'desetinasi' => 'required|string|max:255',
            'waLink'=> 'nullable'
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
