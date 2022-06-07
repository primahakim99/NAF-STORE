<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;


class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
            'name' => 'Safrina',
            'email'=> 'safrina@gmail.com',
            'password'=> Hash::make('safrina123'),
            'role_as'=> 2,

        ]);
        DB::table('users')->insert([
            
            'name' => 'Diyka',
            'email'=> 'diyka@gmail.com',
            'password'=> Hash::make('diyka123'),
            'role_as'=> 2,

        ]);

    }
}
