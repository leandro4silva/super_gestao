<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        $this->data['title'] = 'Contato';
        return view('site.contact', $this->data);
    }

    public function create(){
        var_dump($_POST);
        die();
    }
}
