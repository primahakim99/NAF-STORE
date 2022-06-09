<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(OwnerSeeder::class);
        $this->call(StoreSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
