<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->truncateTables(['categorias','deportes','tallas','departamentos','ciudades','users']);
        $this->call([
            CategoriaSeeder::class,
            DeporteSeeder::class,
            TallaSeeder::class,
            DepartamentoSeeder::class,
            CiudadSeeder::class,
            UserSeeder::class
        ]);
        // $this->call(DeporteSeeder::class);
        // $this->call(TallaSeeder::class);
        // $this->call(DepartamentoSeeder::class);
        // $this->call(CiudadSeeder::class);
        // $this->call(UserSeeder::class);
        // \App\Models\User::factory(10)->create();
    }

    protected function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach($tables as $table){
            DB::table($table)->truncate();
        }
    }
}
