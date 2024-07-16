<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuisionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '1',
            'id_categorys' => '1',
            'nilai'=> '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '1',
            'id_categorys' => '2',
            'nilai'=> '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '1',
            'id_categorys' => '3',
            'nilai'=> '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '1',
            'id_categorys' => '4',
            'nilai'=> '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '1',
            'id_categorys' => '5',
            'nilai'=> '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // 2 

        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '2',
            'id_categorys' => '1',
            'nilai'=> '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '2',
            'id_categorys' => '2',
            'nilai'=> '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '2',
            'id_categorys' => '3',
            'nilai'=> '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '2',
            'id_categorys' => '4',
            'nilai'=> '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '2',
            'id_categorys' => '5',
            'nilai'=> '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // 3 

        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '3',
            'id_categorys' => '1',
            'nilai'=> '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '3',
            'id_categorys' => '2',
            'nilai'=> '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '3',
            'id_categorys' => '3',
            'nilai'=> '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '3',
            'id_categorys' => '4',
            'nilai'=> '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '3',
            'id_categorys' => '5',
            'nilai'=> '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // 4

        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '4',
            'id_categorys' => '1',
            'nilai'=> '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '4',
            'id_categorys' => '2',
            'nilai'=> '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '4',
            'id_categorys' => '3',
            'nilai'=> '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '4',
            'id_categorys' => '4',
            'nilai'=> '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('penampung_quisioner')->insert([
            'id_vendor'=> '4',
            'id_categorys' => '5',
            'nilai'=> '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
