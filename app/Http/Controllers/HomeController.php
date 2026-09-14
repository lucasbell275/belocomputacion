<?php

namespace App\Http\Controllers;
use App\Models\Computadora;
use App\Models\Home;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $home = Home::first();
        $oferta = Computadora::where('oferta', 1)->get();
        return view('home', compact('home','oferta'));
    }
}
