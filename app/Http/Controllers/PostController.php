<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){
     
        $slug = $request->input(key:'slug');
        $title = $request->input(key:'title');
        $description = $request->input(key:'description');

        if($slug && $title && $description){
            return view('pages.detail', compact('slug', 'title', 'description'));
        }
    return redirect()->back();
  }  
}
