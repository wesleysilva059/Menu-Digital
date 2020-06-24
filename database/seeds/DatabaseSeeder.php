<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table("configuracoes")->insert([
            "coluna_ordena" => "valor",
            "direcao_ordena" => 'desc',
            "tempo_transicao" => "10000",
        ]);

        DB::table('grupos')->insert([
            ["descricao" => "Bovinos"],
            ["descricao" => "Suínos"],
            ["descricao" => "Aves"],
        ]);

        DB::table('unidades')->insert([
            ["descricao" => "KG"],
            ["descricao" => "UN"],
            ["descricao" => "Inteiro"],
        ]);
    }
}
