<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\LogAccessMiddleware;

class AboutController extends Controller
{
    public function __construct(){
        $this->middleware(LogAccessMiddleware::class);
    }

    public function index(){
        $this->data['title'] = 'Sobre';
        return view('site.about', $this->data);
    }
}
