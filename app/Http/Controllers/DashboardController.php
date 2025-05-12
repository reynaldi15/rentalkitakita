<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Contact;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Testimoni;
use App\Models\Travel;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get(); // atau pagination
        // $galerries= Gallery::latest()->get();
        $galleries= Gallery::latest()->paginate(8);
        $smallCars = Car::where('type', 'kecil')->get();
        $bigCars = Car::where('type', 'besar')->get();
        $cars= Car::all();
        // $contacts=Contact::all();
        return view('home', compact('products', 'galleries', 'smallCars', 'bigCars','cars'));
    }

    public function travel()
    {
        $travels=Travel::latest()->paginate(8);
        return view('travel',compact('travels'));
    }

    public function testimoni()
    {
        $testimonis= Testimoni::latest()->paginate(8);   
        Carbon::setLocale('id');
        return view('testimoni', compact('testimonis'));
    }
    
    public function management()
    {
        return view('admin.dashboard');
    }
}
