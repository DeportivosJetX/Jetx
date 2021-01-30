<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = array('Antioquia',
        'Atlántico',
        'Bogotá',
        'Bolívar',
        'Boyacá',
        'Caldas',
        'Caquetá',
        'Cauca',
        'Cesar',
        'Córdoba',
        'Cundinamarca',
        'Choco',
        'Huila',
        'La Guajira',
        'Magdalena',
        'Meta',
        'Nariño',
        'Norte de Santander',
        'Quindío',
        'Risaralda',
        'Santander',
        'Sucre',
        'Tolima',
        'Valle',
        'Arauca',
        'Casanare',
        'Putumayo',
        'San Andres',
        'Amazonas',
        'Guainía',
        'Guaviare',
        'Vaupés',
        'Vichada');

        foreach($departamentos as $departamento){
        DB::table('departamentos')->insert([
            'nombre' => $departamento,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        }
    }
}
