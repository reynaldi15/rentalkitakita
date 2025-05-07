<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get(); // atau pagination
        // $galerries= Gallery::latest()->get();
        $galleries= Gallery::all();
        $smallCars = Car::where('type', 'kecil')->get();
        $bigCars = Car::where('type', 'besar')->get();
        $cars= Car::all();    
        return view('home', compact('products', 'galleries', 'smallCars', 'bigCars','cars'));
    }

    public function travel()
    {
        return view('travel');
    }

    public function testimoni()
    {
        return view('testimoni');
    }
    
    public function management()
    {
        return view('admin.dashboard');
    }
}
