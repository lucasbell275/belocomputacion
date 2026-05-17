<?php

namespace App\Http\Controllers;
use App\Models\Computadora;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $oferta = Computadora::where('oferta', 1)->get();
        return view('home', compact('oferta'));
    }
}
