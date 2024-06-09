<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_users')->insert([
            'iduser' => '1',
            'firstname' => 'Dimaz',
            'lastname' => 'Super',
            'gender' => 'L',
            'phone' => '081234567265',
            'address1' => 'Nama Jalan Kenangan ygy1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_users')->insert([
            'iduser' => '2',
            'firstname' => 'Dimaz',
            'lastname' => 'Admin',
            'gender' => 'L',
            'phone' => '081234567265',
            'address1' => 'Nama Jalan Kenangan ygy2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('detail_users')->insert([
            'iduser' => '3',
            'firstname' => 'Dimaz',
            'lastname' => 'User',
            'gender' => 'L',
            'phone' => '081234567265',
            'address1' => 'Nama Jalan Kenangan ygy3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        for ($i = 4; $i < 9; $i++) {
            DB::table('detail_users')->insert([
                'iduser' => $i,
                'firstname' => 'Dummy-' . $i,
                'lastname' => 'User',
                'gender' => 'L',
                'phone' => '081234567265',
                'address1' => 'Nama Jalan Kenangan ygy dummy ke' . $i . '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
