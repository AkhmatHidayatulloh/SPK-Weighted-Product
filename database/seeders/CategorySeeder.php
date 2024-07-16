<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insert([
            'name' => 'General Information',
            'description' => 'Ini Deskripsi',
            'bobot' => 3,
            'benefit'=> 1,
            'created_by' => 'Seeder',
            'modified_by' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorys')->insert([
            'name' => 'Price',
            'description' => 'Ini Deskripsi',
            'bobot' => 5,
            'benefit'=> '0',
            'created_by' => 'Seeder',
            'modified_by' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorys')->insert([
            'name' => 'Quality Control',
            'description' => 'Ini Deskripsi',
            'bobot' => 5,
            'benefit'=> 1,
            'created_by' => 'Seeder',
            'modified_by' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorys')->insert([
            'name' => 'Transaction',
            'description' => 'Ini Deskripsi',
            'bobot' => 4,
            'benefit'=> 1,
            'created_by' => 'Seeder',
            'modified_by' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorys')->insert([
            'name' => 'Payment',
            'description' => 'Ini Deskripsi',
            'bobot' => 3,
            'benefit'=> 1,
            'created_by' => 'Seeder',
            'modified_by' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
