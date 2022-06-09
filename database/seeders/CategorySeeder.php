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
            'slug' => 'beverage',
            'image' => 'Assets/images/banner-03.jpg'
        ]);
        
        Category::create([
            'name' => 'Chips',
            'slug' => 'chips',
            'image' => 'Assets/images/banner-01.jpg'
        ]);

        Category::create([
            'name' => 'Snack',
            'slug' => 'snack',
            'image' => 'Assets/images/banner-02.jpg'
        ]);
    }
}
