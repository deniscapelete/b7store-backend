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
        $metadataTec = Category::first()->metadata()->create([
            'id' => 'tecnologias',
            'name' => 'Tecnologia'
        ]);
        $metadataCor = Category::first()->metadata()->create([
            'id' => 'cor',
            'name' => 'Cor'
        ]);

        $metadataCor->values()->create([
            'id' => 'preto',
            'label' => 'Preto'
        ]);

        $metadataCor->values()->create([
            'id' => 'azul',
            'label' => 'Azul'
        ]);

        $metadataTec->values()->create([
            'id' => 'laravel',
            'label' => 'Laravel'
        ]);

        $metadataTec->values()->create([
            'id' => 'react-native',
            'label' => 'React-Native'
        ]);
    }
}
