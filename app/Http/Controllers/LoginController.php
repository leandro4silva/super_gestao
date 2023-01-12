<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $this->data['title'] = 'Login';

        return view('site.login', $this->data);
    }

    public function create(Request $request){
        return $request->post();
    }
}
