<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'description' => 'Administrador',
            'status'=> 'A',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);
        DB::table('user_types')->insert([
            'description' => 'General',
            'status'=> 'A',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);
    }
}
