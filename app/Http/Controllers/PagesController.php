<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        $nama = "Programmer Awam";
        return view('about', ['namasaya' => $nama]);
    }
}
