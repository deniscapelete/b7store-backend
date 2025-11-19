<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryMetadataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::first()->metadata()->create([
            'id' => 'tecnologias',
            'name' => 'Tecnologia'
        ]);
        Category::first()->metadata()->create([
            'id' => 'cor',
            'name' => 'Cor'
        ]);
    }
}
