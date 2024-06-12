<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontEnd extends Controller
{
    public function home(){
        //dd('mumeniita');

        return view('frontend.welcome');
    }
    public function about(){
        //dd('mumeniita');
        return view('frontend.about');
    }
    public function services(){
        //dd('mumeniita');
        return view('frontend.services');
    }
    public function technology(){
        //dd('mumeniita');
        return view('frontend.technology');
    }
    public function contact(){
        //dd('mumeniita');
        return view('frontend.contact');
    }
    public function works(){
        //dd('mumeniita');
        return view('frontend.works');
    }
    public function products(){
        //dd('mumeniita');
        return view('frontend.products');
    }



}
