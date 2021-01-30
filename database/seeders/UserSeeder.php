<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Alexis Caceres',
            'identification' => '1098818855',
            'address' => Str::random(30),
            'email' => 'a1098818855@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Alexis1098818855'),
            'id_ciudad' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
