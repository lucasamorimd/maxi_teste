<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'razao_social' => Str::random(10),
            'nome_fantasia' => Str::random(10),
            'cnpj' => rand(0, 9999999999999),
            'endereco' => Str::random(13),
            'email' => Str::random(10) . '@email.com',
            'telefone' => Str::random(10),
            'nome_responsavel' => Str::random(10),
            'cpf' => rand(0, 9999999999999),
            'celular' => rand(0, 999999999)

        ]);
    }
}
