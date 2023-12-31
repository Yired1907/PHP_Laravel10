<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $names = ['Qui', 'Truong', 'Quan', 'Thang'];
        // return view('about')->with('names', $names);
        return view('about', [
            'names' => $names
        ]);
    }
}
