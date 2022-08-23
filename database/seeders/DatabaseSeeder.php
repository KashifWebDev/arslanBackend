<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        User::factory(5)->create();
        Brand::factory(5)->create();
        Category::factory(5)->create();
        Product::factory(10)->create();

        foreach (Category::all() as $cat){
            $product = Product::inRandomOrder()->take(rand(1,3))->pluck('id');
            $cat->products()->attach($product);
        }
    }
}
