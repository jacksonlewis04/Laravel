<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $sliders = Slider::count();
        $products = Product::count();
        $catalogs = Catalog::count();

        return view('dashboard', compact('sliders', 'products', 'catalogs'));
    }
}
