<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {

        print_r(route('products'));

        //Directly in the view
        return view('products.index');
    }


    public function show($name)
    {
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'SamSung'
        ];

        return view('products.index', [
            'products' => $data[$name] ?? 'Products ' . $name . ' does not exist'
        ]);
    }


    public function about()
    {
        return 'About us page';
    }
}
