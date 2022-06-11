<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'Nian Gita',
            'phone'=> '089374658834',
            'email'=> 'nian@gmail.com',
            'password'=> Hash::make('niangita123'),
            'role_as'=> 'admin',

        ]);
        DB::table('users')->insert([

            'name' => 'Dimas',
            'phone'=> '089374633834',
            'email'=> 'dimas@gmail.com',
            'password'=> Hash::make('dimas123'),
            'role_as'=> 'admin',

        ]);
    }
}
