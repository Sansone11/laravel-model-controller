<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $movies = Movie::all();
        // dd( $movies);
        return view('movie',compact('title','original_title','nationality', 'date','vote'));
       
    }
}
