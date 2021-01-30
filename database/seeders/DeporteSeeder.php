<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DeporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deportes = array('Patinaje', 'Fútbol', 'Baloncesto', 'Tennis');

        foreach($deportes as $deporte){
            DB::table('deportes')->insert([
                'nombre' => $deporte,
                'slug' => str_replace(" ", "-", eliminar_tildes($deporte)),
                'imagen' => 'images/deportes/'.strtolower(eliminar_tildes($deporte)).'.jpg',
                'descripcion_img' => Str::random(30),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
