<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $this->data['title'] = 'Contato';
        $this->data['type_contact'] = [
            '1' => 'Duvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];


        return view('site.contact', $this->data);
    }

    public function create(Request $request){
        
        $request->validate([
            'name' => 'required|min:3|max:40',
            'phone' => 'required',
            'type_contact' => 'required',
            'email' => 'required',
            'message' => 'required|max:2000'
        ]);
        
        // $this->data['title'] = 'Contato';
        
        // $contact = new Contact();
        // $contact->name = $request->input('name');
        // $contact->phone = $request->input('phone');
        // $contact->email = $request->input('email');
        // $contact->type_contact = $request->input('type_contact');
        // $contact->message = $request->input('message');
        // $contact->save();

        // Contact::create($request->all());
    
        // return view('site.contact', $this->data);
    }
}
