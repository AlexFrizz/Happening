<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([[
            'name'          => 'Alex',
            'surname'       => 'Frizziero',
            'email'         => 'alex@happening.com',
            'password'      =>  bcrypt('password'),
            'is_admin'      => '1',
            'created_at'    =>  date('Y-m-d h:i:s'),
            'updated_at'    =>  date('Y-m-d h:i:s')
        ], [
            'name'          => 'Giacomo',
            'surname'       => 'Piva',
            'email'         => 'giacomo@happening.com',
            'password'      =>  bcrypt('password'),
            'is_admin'      => '1',
            'created_at'    =>  date('Y-m-d h:i:s'),
            'updated_at'    =>  date('Y-m-d h:i:s')
        ], [
            'name'          => 'Greta',
            'surname'       => 'Finotti',
            'email'         => 'greta@happening.com',
            'password'      =>  bcrypt('password'),
            'is_admin'      => '0',
            'created_at'    =>  date('Y-m-d h:i:s'),
            'updated_at'    =>  date('Y-m-d h:i:s')
        ]]);
    }
}
