<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // database/seeders/ProductSeeder.php
public function run()
{
    \App\Models\Product::factory(100)->create();
}

}
