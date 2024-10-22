<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name_en' => 'Smartphone', 'name_ar' => 'هاتف ذكي', 'category_id' => 1],
            ['name_en' => 'Laptop', 'name_ar' => 'حاسوب محمول', 'category_id' => 1],
            ['name_en' => 'Fiction Novel', 'name_ar' => 'رواية خيالية', 'category_id' => 2],
            ['name_en' => 'Men T-Shirt', 'name_ar' => 'تي شيرت رجالي', 'category_id' => 3],
            ['name_en' => 'Washing Machine', 'name_ar' => 'غسالة', 'category_id' => 4],
            ['name_en' => 'Basketball', 'name_ar' => 'كرة سلة', 'category_id' => 5],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
