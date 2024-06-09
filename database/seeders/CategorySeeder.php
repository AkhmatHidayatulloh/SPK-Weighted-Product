<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // Create dummy categories
        for ($i = 0; $i < 10; $i++) {
            Category::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'bobot' => $faker->randomFloat(2, 0, 100),
                'created_by' => 'Seeder',
                'modified_by' => null,
            ]);
        }
    }
}