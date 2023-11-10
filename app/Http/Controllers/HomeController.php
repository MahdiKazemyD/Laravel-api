<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('Product.home' , [
                'products' => Product::all() ,
        ]);
    }

    public function store()
    {
        return view('Product.Store');
    }

    public function update($id)
    {
        return view('Product.Update' , [
            'id' => $id,
            'product' => Product::find($id),
        ]);
    }
}
