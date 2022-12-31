<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            "name" => "Leandro",
            "phone" => "19991276042",
            "email" => "leandro94.a.s@gmail.com",
            "type_contact" => "1",
            "message" => "Gostaria de mais informações"
        ]);
    }
}
