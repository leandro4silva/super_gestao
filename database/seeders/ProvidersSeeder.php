<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provider;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $providers = new Provider();
        $providers->name = 'Copel';
        $providers->site = 'www.copel.com.br';
        $providers->uf = 'SP';
        $providers->email = 'copel@gmail.com';

        $providers->save();

        Provider::create([
            'name' => 'Banco Brasil',
            'site' => 'www.bancobrasil.com.br',
            'uf' => 'SP',
            'email' => 'bancobrasil@gmail.com'
        ]);

    }
}
