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
            'label' => 'Camiseta (Laravel Azul)',
            'description' => 'Camiseta do laravel e azul',
            'price' => 39.99,
            'views_count' => 0,
            'sales_count' => 0,
            'category_id' => 1
        ]);

        Product::create([
            'label' => 'Produto de exemplo2',
            'description' => 'Descrição do produto de exemplo2',
            'price' => 29.99,
            'views_count' => 6,
            'sales_count' => 5,
            'category_id' => 1
        ]);

        Product::create([
            'label' => 'Produto de exemplo3',
            'description' => 'Descrição do produto de exemplo3',
            'price' => 59.99,
            'views_count' => 12,
            'sales_count' => 10,
            'category_id' => 2
        ]);
    }
}
