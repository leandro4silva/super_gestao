<?php

namespace App\Http\Controllers;

class TesteController extends Controller
{
    public function index($p1, $p2){
        return view('site.teste', ['x' => $p1, 'y' => $p2]);   
    }
}
