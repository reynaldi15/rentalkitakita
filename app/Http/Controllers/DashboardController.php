<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        // $products = Product::latest()->get(); // atau pagination
        // return view('dashboard.public', compact('products'));
        return view('home');
    }
}
