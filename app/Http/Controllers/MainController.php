<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{   
    public function index(){

        $this->data['title'] = 'Home';
        return view('site.main', $this->data);
    }
}
