<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


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
            'phone'=> '089374658834',
            'email'=> 'safrina@gmail.com',
            'password'=> Hash::make('safrina123'),
            'role_as'=> 'owner',

        ]);
        DB::table('users')->insert([

            'name' => 'Diyka',
            'phone'=> '089374658834',
            'email'=> 'diyka@gmail.com',
            'password'=> Hash::make('diyka123'),
            'role_as'=> 'owner',

        ]);

    }
}
