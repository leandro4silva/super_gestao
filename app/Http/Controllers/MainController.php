<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeContact;

class MainController extends Controller
{   
    public function index()
    {
        $this->data['title'] = 'Home';

        $this->data['type_contact'] = TypeContact::all(); 

        return view('site.main', $this->data);
    }
}
