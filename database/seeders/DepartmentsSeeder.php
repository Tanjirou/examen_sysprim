<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Desarrollo y soporte de sistemas',
            'status' => 'A',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'name' => 'Presupuesto',
            'status' => 'A',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'name' => 'Contabilidad',
            'status' => 'A',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);
    }
}
