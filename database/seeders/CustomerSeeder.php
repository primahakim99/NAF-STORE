<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'Hilmi',
            'phone'=> '085774658834',
            'email'=> 'hilmi@gmail.com',
            'password'=> Hash::make('hilmi123'),
            'role_as'=> 'user',

        ]);
    }
}
