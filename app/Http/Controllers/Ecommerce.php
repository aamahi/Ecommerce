<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ecommerce extends Controller
{
    public function home(){
        return view('frontend.home');
    }
}
