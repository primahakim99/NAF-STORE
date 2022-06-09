<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([

            'ID_User' => '1',
            'storeName'=> 'Jaya Makmur Store',
            'address'=> 'JL. Malang, Malang',

        ]);
    }
}
