<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Textil'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Diseño'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Salud y Belleza'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Casa y Decoración'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Gastronomia'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Naturaleza'
        ]);
    }
}
