<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Catalog;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all(); // all karena data CRUD
        $about = About::first(); // first karena bukan data CRUD
        $products = Product::all();
        $catalogs = Catalog::all();
        $contact = Contact::first();

        return view('home.index', compact(
            'sliders', 
            'about', 
            'products', 
            'catalogs', 
            'contact'
        ));
    }

    public function about()
    {
        $about = About::first();
        $contact = Contact::first();

        return view('home.about', compact('about', 'contact'));
    }

    public function products()
    {
        $products = Product::all();
        $contact = Contact::first();
        
        return view('home.products', compact('products', 'contact'));
    }

    public function catalog()
    {
        $catalogs = Catalog::all();
        $contact = Contact::first();

        return view('home.catalog', compact('catalogs', 'contact'));
    }

    /*
    public function detail(Catalog $catalog)
    {
        $contact = Contact::first();

        return view('home.detail', ['catalog' => $catalog ], compact('contact'));
        // return view('home.detail', compact('catalog', 'contact'));
    }

    public function detail($id)
    {
        $catalog = Catalog::where('id', $id)->first();
        $contact = Contact::first();

        // return view('home.detail', ['catalog' => $catalog ], compact('contact'));
        return view('home.detail', compact('catalog', 'contact'));
    }
    */

    public function detail($slug)
    {
        $catalog = Catalog::where('slug', $slug)->firstOrFail();
        $contact = Contact::first();
        
        return view('home.detail', compact('catalog', 'contact'));
    }

    public function contact()
    {
        $contact = Contact::first();

        return view('home.contact', compact('contact'));
    }
}
