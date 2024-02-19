<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Models\Variant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ])


        $categories = Category::factory()->count(50)->create();
        Store::factory()
            ->count(20)
            ->hasDetails(5)
            ->create()
            ->each(function ($store) use ($categories) {
                Product::factory()->count(25)->sequence([
                    'store_id' => $store->store_id,
                    'category_id' => $categories->random()->category_id
                ])->create()->each(function ($product) {
                    Variant::factory()->count(5)->sequence([
                        'product_id' => $product->product_id
                    ])->create();
                });
            });
    }
}
