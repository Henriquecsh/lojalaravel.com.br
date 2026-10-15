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
            'label' => 'Produto 1',
            'description' => 'Descrição do Produto 1',
            'price' => 39.99,
            'category_id' => 1,
        ]);

        Product::create([
            'label' => 'Produto 2',
            'description' => 'Descrição do Produto 2',
            'price' => 49.99,
            'category_id' => 1,
        ]);
    }
}
