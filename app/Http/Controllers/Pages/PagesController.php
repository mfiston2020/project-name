<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){

        $movies =   Movie::all();
        // return view('welcome',[
        //     'films'=>$movies
        // ]);

        // return $movies;

        return view('welcome',compact('movies'));
    }

    function save_movie(Request $movies){
        $movie  =   new Movie();
        $movie->title   =   $movies->title;

        return $movie;
    }
}
