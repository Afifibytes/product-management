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
        $categories = [
            ['id' => 1, 'name_en' => 'Electronics', 'name_ar' => 'إلكترونيات'],
            ['id' => 2, 'name_en' => 'Books', 'name_ar' => 'كتب'],
            ['id' => 3, 'name_en' => 'Clothing', 'name_ar' => 'ملابس'],
            ['id' => 4, 'name_en' => 'Home Appliances', 'name_ar' => 'أجهزة منزلية'],
            ['id' => 5, 'name_en' => 'Sports', 'name_ar' => 'رياضة'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
