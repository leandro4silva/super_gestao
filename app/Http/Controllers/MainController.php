<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{   
    public function index()
    {
        $this->data['title'] = 'Home';

        $this->data['type_contact'] = [
            '1' => 'Duvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];

        return view('site.main', $this->data);
    }
}
