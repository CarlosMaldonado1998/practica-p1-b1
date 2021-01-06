<?php

namespace Database\Seeders;

use App\Models\Customers;
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

        $customers = Customers::all();
        foreach ($customers as $customer) {
            for ($i = 0; $i < 2; $i++) {
                Products::create([
                    'name' => $faker->word,
                    'code' => $faker->uuid,
                    'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                    'status'=>'active',
                    'customer_id'=> $customer->id,
                ]);
            }
        }

    }
}
