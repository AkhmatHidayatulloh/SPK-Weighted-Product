<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;
use Faker\Factory as Faker;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Create dummy vendors
        for ($i = 0; $i < 10; $i++) {
            Vendor::create([
                'name' => $faker->company,
                'address' => $faker->address,
                'contact_name' => $faker->name,
                'contact_number' => $faker->phoneNumber,
                'status' => $faker->randomElement(['Active', 'Inactive']),
                'created_by' => 'Seeder',
                'modified_by' => null,
            ]);
        }
    }
}
