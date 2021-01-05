<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //beralih ke beranda
    public function index() {
        return view('beranda');
    }

    //beralih ke about
    public function about() {
        return view('about');
    }
}
