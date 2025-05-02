<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    // public function index(Request $request)
    // {
    //     $cars = Car::all();
    //     $sort = $request->get('sort', 'created_at');
    //     $order = $request->get('order', 'desc');

    //     $cars = Car::orderBy($sort, $order)->get();
    //     return view('cars.index', compact('cars'));
    // }
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'created_at'); // kolom pengurutan
        $order = $request->get('order', 'desc');     // arah pengurutan (asc/desc)

        $cars = Car::orderBy($sort, $order)->paginate(10); // paginate, bukan get

        return view('cars.index', compact('cars', 'sort', 'order'));
    }


    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'features' => 'required|array',
            'features.*' => 'string',
            'type' => 'required|in:kecil,besar',
        ]);

        $path = $request->file('image')->store('cars', 'public');

        $validated['image'] = $path;

        Car::create($validated);

        return redirect()->route('cars.index')->with('success', 'Armada berhasil ditambahkan.');
    }

    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'features' => 'required|array',
            'features.*' => 'string',
            'type' => 'required|in:kecil,besar',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($car->image);
            $validated['image'] = $request->file('image')->store('cars', 'public');
        }

        $car->update($validated);

        return redirect()->route('cars.index')->with('success', 'Armada berhasil diupdate.');
    }

    public function destroy(Car $car)
    {
        Storage::disk('public')->delete($car->image);
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Armada berhasil dihapus.');
    }
}