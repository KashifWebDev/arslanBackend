<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'brand_id' => Brand::pluck('id')->random(),
            'user_id' => 1,
            'desc' => $this->faker->text(),
            'price' => rand(1, 100),
            'thumbnail' => 'Post_Image_'.rand(1,6).'.jpg'
        ];
    }
}
