<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'nombre' => 'Ropa',
            'slug' => str_replace(" ", "-", 'Ropa'),
            'imagen' => 'images/categorias/ropa.jpg',
            'descripcion_img' => Str::random(30),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Calzado',
            'slug' => str_replace(" ", "-", 'Calzado'),
            'imagen' => 'images/categorias/calzado.jpg',
            'descripcion_img' => Str::random(30),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Implementos',
            'slug' => str_replace(" ", "-", 'Implementos'),
            'imagen' => 'images/categorias/implementos.jpg',
            'descripcion_img' => Str::random(30),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
