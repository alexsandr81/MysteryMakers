<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Найти категорию "Игрушки"
        $category = Category::where('name', 'Игрушки')->first();

        if ($category) {
            Product::updateOrCreate(
                ['name' => 'Деревянный пазл'],
                [
                    'price' => 120.00,
                    'description' => 'Красочный пазл из фанеры для детей',
                    'image' => 'puzzle.jpg',
                    'category_id' => $category->id
                ]
            );
        }
    }
}
