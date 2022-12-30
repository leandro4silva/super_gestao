<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $this->data['title'] = 'Sobre';
        return view('site.about', $this->data);
    }
}
