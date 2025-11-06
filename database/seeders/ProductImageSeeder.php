<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = Product::first();
        $product->images()->create([
            'url' => 'products/product_1_1.jpg'
        ]);
    }
}
