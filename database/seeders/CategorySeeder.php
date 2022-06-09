<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Beverage',
            'slug' => 'beverage'
        ]);
        
        Category::create([
            'name' => 'Chips',
            'slug' => 'chips'
        ]);

        Category::create([
            'name' => 'Snack',
            'slug' => 'snack'
        ]);
    }
}
