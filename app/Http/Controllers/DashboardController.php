<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get(); // atau pagination
        return view('home', compact('products'));
    }
    
    public function management()
    {
        return view('admin.dashboard');
    }
}
