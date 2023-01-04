<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeContact;


class TypeContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeContact::create([
            'type_contact' => 'Duvida'
        ]);

        TypeContact::create([
            'type_contact' => 'Elogio'
        ]);

        TypeContact::create([
            'type_contact' => 'Reclamação'
        ]);
    }
}
