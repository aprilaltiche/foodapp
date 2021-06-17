<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $categoriesIDs = DB::table('categories')->pluck('id');
        for ($i = 0; $i <  5; $i++) {
            Product::create([
                'product_description' => 'Good Burger',
                'cat_id' => $faker->randomElement($categoriesIDs),
                'price' => 180.00,
            ]);
        }
    }
}
