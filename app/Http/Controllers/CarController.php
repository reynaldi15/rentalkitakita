<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('dashboard.cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'type' => 'required|in:kecil,besar',
            'features' => 'required|array',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = $request->file('image')?->store('cars', 'public');

        Car::create([
            'name' => $request->name,
            'price' => $request->price,
            'type' => $request->type,
            'features' => json_encode($request->features),
            'image' => $imagePath,
        ]);

        return redirect()->route('cars.index')->with('success', 'Mobil berhasil ditambahkan.');
    }

    public function edit(Car $car)
    {
        return view('dashboard.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'type' => 'required|in:kecil,besar',
            'features' => 'required|array',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($car->image) {
                Storage::disk('public')->delete($car->image);
            }
            $car->image = $request->file('image')->store('cars', 'public');
        }

        $car->update([
            'name' => $request->name,
            'price' => $request->price,
            'type' => $request->type,
            'features' => json_encode($request->features),
            'image' => $car->image,
        ]);

        return redirect()->route('cars.index')->with('success', 'Mobil berhasil diperbarui.');
    }

    public function destroy(Car $car)
    {
        if ($car->image) {
            Storage::disk('public')->delete($car->image);
        }
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Mobil berhasil dihapus.');
    }
}
