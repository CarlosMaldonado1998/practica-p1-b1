<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::truncate();
        $faker = \Faker\Factory::create();


        for ($i = 0; $i < 10; $i++) {
            Products::create([
                'name' => $faker->word,
                'code' => $faker->uuid,
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                'status'=>'active',
            ]);
        }
    }
}
