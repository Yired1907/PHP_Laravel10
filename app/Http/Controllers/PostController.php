<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {

        // $posts = DB::select('select * from posts Where id = ?', [2]);

        $id = 7;

        $posts = DB::table('posts')
            ->where('id', '=', 3)
            ->delete();
        dd($posts);
    }
}
