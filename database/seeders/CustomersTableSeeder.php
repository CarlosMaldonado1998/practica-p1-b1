<?php

namespace Database\Seeders;

use App\Models\Customers;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customers::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Customers::create([
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'document' => $faker->fileExtension,
            ]);
        }

    }
}
