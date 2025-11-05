<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'label' => 'Produto de exemplo1',
            'description' => 'Descrição do produto de exemplo1',
            'price' => 39.99,
            'category_id' => 1
        ]);

        Product::create([
            'label' => 'Produto de exemplo2',
            'description' => 'Descrição do produto de exemplo2',
            'price' => 29.99,
            'category_id' => 1
        ]);

        Product::create([
            'label' => 'Produto de exemplo3',
            'description' => 'Descrição do produto de exemplo3',
            'price' => 59.99,
            'category_id' => 2
        ]);
    }
}
