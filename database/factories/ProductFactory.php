<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Store;
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
    public function definition(): array
    {
        return [
            'product_name' => $this->faker->words(rand(3, 10), true),
            'description' => $this->faker->paragraph,
            'base_price' => $this->faker->randomFloat(2, 10, 300),
//            'category_id' => Category::factory()->create()->category_id,
            'store_id' => Store::factory()->create()->store_id
        ];
    }
}
