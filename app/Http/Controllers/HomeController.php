<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request){


        $searchText = $request->input('search');

        $posts = DB::table('posts')
        
        ->where('title', 'LIKE', "%{$searchText}%")
        -> orWhere('content', 'LIKE', "%{$searchText}%")
        ->paginate(10);

        return view('pages.home' , ['posts'=> $posts]);
        

    }
}
