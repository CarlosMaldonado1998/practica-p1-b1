<?php

namespace Database\Seeders;

use App\Models\Customers;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;


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

        $users = User::all();
        foreach ($users as $user) {
        // iniciamos sesión con este usuario
            JWTAuth::attempt(['email' => $user->email, 'password' => '123123']);
        // Y ahora con este usuario creamos algunos articulos
            $num_customers = 5;
            for ($j = 0; $j < $num_customers; $j++) {
                Customers::create([
                    'name' => $faker->firstName,
                    'lastname' => $faker->lastName,
                    'document' => $faker->fileExtension,
                ]);
            }
        }
    }
}
