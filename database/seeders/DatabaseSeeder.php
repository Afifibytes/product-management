<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();
        DB::table('products')->truncate();
        Schema::enableForeignKeyConstraints();

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
