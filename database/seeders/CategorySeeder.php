<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Categoria de exemplo1',
            'slug' => 'Categoria de exemplo1'
        ]);

        Category::create([
            'name' => 'Categoria de exemplo2',
            'slug' => 'Categoria de exemplo2'
        ]);
    }
}
