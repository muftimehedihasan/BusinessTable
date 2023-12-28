<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = fake();

        // Determine how many customers you want to create
        $numberOfCustomers = 50; // Example: creating 50 customers

        for ($i = 0; $i < $numberOfCustomers; $i++) {
            DB::table('customers')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'mobile' => $faker->phoneNumber(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
