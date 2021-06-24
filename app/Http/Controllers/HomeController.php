<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post; 
use DB;

class HomeController extends Controller
{
    public function index(){
        $posts=Post::orderBy('created_at','desc')->take(4)->get();
        return view('index', compact('posts'));
      

    }
}
