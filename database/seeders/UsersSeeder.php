<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_type' =>1,
            'email' => 'mariaperez@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);
        DB::table('users')->insert([
            'user_type' => 2,
            'email' => 'pedrolugo@gmail.com',
            'password' => Hash::make('abc1234abc'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'user_type' => 2,
            'email' => 'eduardotorrealba@gmail.com',
            'password' => Hash::make('abc1234abc'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'user_type' => 2,
            'email' => 'reynariera@gmail.com',
            'password' => Hash::make('abc1234abc'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);
    }
}
