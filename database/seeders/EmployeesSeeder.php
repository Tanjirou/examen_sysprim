<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'user_id' =>1,
            'dni' => '21727234',
            'names' => 'Maria Perez',
            'gender' => 'F',
            'date_birth' => '1992-05-23',
            'status' => 'A',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);

        DB::table('employee_departments')->insert([
            'employee_id'=> 1,
            'department_id' => 1
        ]);

        DB::table('employees')->insert([
            'user_id' =>2,
            'dni' => '14679675',
            'names' => 'Pedro Lugo',
            'gender' => 'M',
            'date_birth' => '1980-04-19',
            'status' => 'A',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);

        DB::table('employee_departments')->insert([
            'employee_id'=> 2,
            'department_id' => 2
        ]);

        DB::table('employees')->insert([
            'user_id' =>3,
            'dni' => '4739947',
            'names' => 'Eduardo Torrealba',
            'gender' => 'M',
            'date_birth' => '1962-02-01',
            'status' => 'A',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);

        DB::table('employee_departments')->insert([
            'employee_id'=> 3,
            'department_id' => 3
        ]);

        DB::table('employees')->insert([
            'user_id' =>4,
            'dni' => '3789965',
            'names' => 'Reyna Riera',
            'gender' => 'F',
            'date_birth' => '1992-05-23',
            'status' => 'R',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);
        DB::table('employee_departments')->insert([
            'employee_id'=> 4,
            'department_id' => 2
        ]);
    }
}
