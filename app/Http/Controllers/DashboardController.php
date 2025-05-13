<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Testimoni;
use App\Models\Travel;
use App\Models\Visitor;
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
        // $travels=Travel::latest()->paginate(8);
        // return view('travel',compact('travels'));

        // $travels = Travel::with('category')->get();
        // // Kelompokkan berdasarkan kota keberangkatan
        // $travelData = $travels->groupBy('category');

        // return view('travel', compact('travelData'));

        $travelData = Travel::with('category')->get()->groupBy(function ($item) {
            return $item->category->name;
        });

        return view('travel', compact('travelData'));
    }

    public function testimoni()
    {
        $testimonis= Testimoni::latest()->paginate(8);   
        Carbon::setLocale('id');
        return view('testimoni', compact('testimonis'));
    }
    
    public function management()
    {
        $totalVisitors = Visitor::count();
        $todayVisitors = Visitor::whereDate('created_at', today())->count();

        $last7Days = collect(range(6, 0))->map(function ($i) {
            return now()->subDays($i)->format('Y-m-d');
        });

        $visitorCounts = $last7Days->map(function ($date) {
            return Visitor::whereDate('created_at', $date)->count();
        });

        return view('admin.dashboard', [
            'totalVisitors' => $totalVisitors,
            'todayVisitors' => $todayVisitors,
            'visitorDates' => $last7Days,
            'visitorCounts' => $visitorCounts,
        ]);

    }
}
