<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::updateOrCreate(
            ['name' => 'Игрушки'],
            ['description' => 'Развивающие игрушки из фанеры']
        );

        Category::updateOrCreate(
            ['name' => 'Головоломки'],
            ['description' => 'Деревянные головоломки для детей']
        );
    }
}
