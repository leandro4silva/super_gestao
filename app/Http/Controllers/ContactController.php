<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\TypeContact;

class ContactController extends Controller
{
    public function index(){
        $this->data['title'] = 'Contato';

        $this->data['type_contact_id'] = TypeContact::all();

        return view('site.contact', $this->data);
    }

    public function create(Request $request){
        
        $request->validate([
                'name' => 'required|min:3|max:40',
                'phone' => 'required',
                'type_contact_id' => 'required',
                'email' => 'email|required|unique:contacts',
                'message' => 'required|max:200'
            ],
            [
                'name.required' => 'O campo nome precisa ser preenchido',
                'name.min' => 'O campo precisa ter no minimo 3 caracteres',
                'name.max' => 'O campo pode ter no maximo 40 caracteres',
                'phone.required' => 'O campo telefone precisa ser preenchido',
                'type_contact_id.required' => 'O campo motivo do contato precisa ser preenchido',
                'email.email' => 'O campo deve conter um email valido',
                'email.required' => 'O campo email precisa ser preenchido',
                'email.unique' => 'Este email já foi cadastrado',
                'message.required' => 'O campo menssagem precisa ser preenchido',
                'message.max' => 'O campo pode ter no maximo 200 caracteres'
            ]
        );
        
        Contact::create($request->all());
    
        return redirect()->route('site.mainIndex');
    }
}
