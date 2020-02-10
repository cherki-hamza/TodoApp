<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('index');
    }

    public function todos(){
        return view('todos');
    }

    public function store(Request $request){
        dd($request);
    }

    public function about(){
       
          return view('about');
    
    }

    public function posts(){
        return view('posts');
    }

    

}
