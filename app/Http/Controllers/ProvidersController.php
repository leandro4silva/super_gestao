<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class ProvidersController extends Controller
{
    public function index()
    {
        return view('app.providers.index');
    }
}