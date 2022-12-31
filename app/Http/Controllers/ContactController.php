<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $this->data['title'] = 'Contato';
        return view('site.contact', $this->data);
    }

    public function create(Request $request){
        $this->data['title'] = 'Contato';
        
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->type_contact = $request->input('type_contact');
        $contact->message = $request->input('message');
        $contact->save();

        return view('site.contact', $this->data);
    }
}
