<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jawabans')->insert([
            'id_pertanyaan' => '1',
            'jawaban' => 'Kurang dari 1 tahun',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '1',
            'jawaban' => '1 – 2 tahun ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '1',
            'jawaban' => '3 – 4 tahun',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '1',
            'jawaban' => '5 – 10 tahun',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '1',
            'jawaban' => 'Di atas 10 tahun',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal2

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '2',
            'jawaban' => 'Tidak ada izin atau sertifikasi ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '2',
            'jawaban' => 'Sedang dalam proses pengurusan ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '2',
            'jawaban' => 'Hanya memiliki izin lokal',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '2',
            'jawaban' => 'Memiliki izin dan satu sertifikasi',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '2',
            'jawaban' => 'Memiliki izin dan lebih dari satu sertifikasi',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal 3

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '3',
            'jawaban' => 'Tidak ada referensi',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '3',
            'jawaban' => '1 referensi ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '3',
            'jawaban' => '2 referensi',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '3',
            'jawaban' => '3 referensi',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '3',
            'jawaban' => '4 referensi ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal 4

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '4',
            'jawaban' => 'Tidak mampu',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '4',
            'jawaban' => 'Kurang dari 300 Ton/Hari ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '4',
            'jawaban' => '300-499 Ton/Hari ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '4',
            'jawaban' => '500-999 Ton/Hari ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '4',
            'jawaban' => '1000 Ton/Hari atau lebih',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal 5

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '5',
            'jawaban' => 'Tidak memiliki program ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '5',
            'jawaban' => 'Sedang merancang program ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '5',
            'jawaban' => 'Program dasar',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '5',
            'jawaban' => 'Program yang komprehensif ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '5',
            'jawaban' => 'Program yang diakui secara internasional',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal 6

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '6',
            'jawaban' => 'Harga Per Kg < Rp. 19.000 ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '6',
            'jawaban' => 'Harga Per Kg Rp. 19.000 - Rp. 21.999 ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '6',
            'jawaban' => 'Harga Per Kg Rp. 22.000 - Rp. 24.999 ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '6',
            'jawaban' => 'Harga Per Kg Rp. 25.000 - Rp. 27.999 ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '6',
            'jawaban' => 'Harga Per Kg >= Rp. 28.000 ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // soal 7

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '7',
            'jawaban' => 'Tidak ada sertifikasi ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '7',
            'jawaban' => 'Sedang dalam proses pengurusan ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '7',
            'jawaban' => 'Memiliki sertifikasi lokal ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '7',
            'jawaban' => '  Memiliki satu sertifikasi internasional ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '7',
            'jawaban' => 'Memiliki lebih dari satu sertifikasi internasional ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal 8

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '8',
            'jawaban' => 'Tidak pernah ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '8',
            'jawaban' => 'Kadang-kadang ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '8',
            'jawaban' => 'Setiap bulan ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '8',
            'jawaban' => 'Setiap minggu ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '8',
            'jawaban' => 'Setiap hari',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal 9

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '9',
            'jawaban' => 'Tidak ada prosedur ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '9',
            'jawaban' => 'Prosedur dasar ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '9',
            'jawaban' => 'Prosedur yang dirancang ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '9',
            'jawaban' => 'Prosedur yang diuji ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '9',
            'jawaban' => 'Prosedur yang diakui oleh pihak ketiga ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // soal 10

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '10',
            'jawaban' => 'Tidak pernah memastikan ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '10',
            'jawaban' => 'Kadang-kadang memeriksa ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '10',
            'jawaban' => 'Memeriksa secara acak ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '10',
            'jawaban' => 'Memeriksa setiap batch ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '10',
            'jawaban' => 'Memeriksa dengan sertifikat kesehatan ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // soal 11

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '11',
            'jawaban' => 'Tidak ada tim khusus ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '11',
            'jawaban' => 'Tim kecil kurang dari 3 orang ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '11',
            'jawaban' => 'Tim sedang 3-5 orang ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '11',
            'jawaban' => 'Tim besar 6-10 orang ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '11',
            'jawaban' => 'Tim lebih dari 10 orang ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal 12

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '12',
            'jawaban' => 'Tidak ada sistem ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '12',
            'jawaban' => 'Sedang dalam proses pembuatan ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '12',
            'jawaban' => 'Sistem dasar ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '12',
            'jawaban' => 'Sistem yang user-friendly ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '12',
            'jawaban' => 'Sistem yang komprehensif dengan tracking ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal 13

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '13',
            'jawaban' => 'Tidak dapat ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '13',
            'jawaban' => 'Hanya untuk pesanan kecil ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '13',
            'jawaban' => 'Hanya untuk pesanan sedang ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '13',
            'jawaban' => 'hanya untuk pesanan besar ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '13',
            'jawaban' => 'Untuk semua ukuran pesanan ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal 14

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '14',
            'jawaban' => 'Tidak dapat ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '14',
            'jawaban' => 'Kadang-kadang ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '14',
            'jawaban' => 'Dengan biaya tambahan ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '14',
            'jawaban' => 'Untuk pelanggan tetap ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '14',
            'jawaban' => 'Untuk semua pelanggan ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal 15

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '15',
            'jawaban' => 'Tidak ada kebijakan ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '15',
            'jawaban' => 'Kebijakan dasar ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '15',
            'jawaban' => 'Kebijakan yang dirancang ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '15',
            'jawaban' => 'Kebijakan yang diuji ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '15',
            'jawaban' => 'Kebijakan yang diakui oleh pihak ketiga ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal 16

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '16',
            'jawaban' => 'Tidak menyediakan ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '16',
            'jawaban' => 'Kadang-kadang menyediakan ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '16',
            'jawaban' => 'Menyediakan untuk pesanan besar ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '16',
            'jawaban' => 'Menyediakan untuk semua pesanan ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '16',
            'jawaban' => 'Menyediakan dengan dokumentasi lengkap ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        //soal 17

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '17',
            'jawaban' => 'Tidak menerima ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '17',
            'jawaban' => 'Hanya untuk pelanggan tetap ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '17',
            'jawaban' => 'Hanya untuk pesanan besar ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '17',
            'jawaban' => 'Menerima untuk semua pesanan ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '17',
            'jawaban' => 'Menerima dan memberikan konfirmasi cepat ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // soal 18

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '18',
            'jawaban' => 'Tidak menawarkan ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '18',
            'jawaban' => 'Untuk pelanggan tetap ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '18',
            'jawaban' => 'Untuk pesanan besar  ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '18',
            'jawaban' => 'Untuk semua pesanan  ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '18',
            'jawaban' => 'Dengan diskon tambahan ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal 19

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '19',
            'jawaban' => 'Tidak memberikan diskon ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '19',
            'jawaban' => 'Diskon 1-2% ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '19',
            'jawaban' => 'Diskon 3-4% ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '19',
            'jawaban' => 'Diskon 5-6% ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '19',
            'jawaban' => 'Diskon lebih dari 6% ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //soal 20

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '20',
            'jawaban' => 'Tidak ada kebijakan ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '20',
            'jawaban' => 'Kebijakan dasar ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '20',
            'jawaban' => 'Kebijakan yang dirancang ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '20',
            'jawaban' => 'Kebijakan yang diuji ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '20',
            'jawaban' => 'Kebijakan yang diakui oleh pihak ketiga  ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

         //soal 21

         DB::table('jawabans')->insert([
            'id_pertanyaan' => '21',
            'jawaban' => 'Tidak menawarkan ',
            'nilai_bobot_jawaban' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '21',
            'jawaban' => 'Untuk pelanggan tetap ',
            'nilai_bobot_jawaban' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '21',
            'jawaban' => 'Untuk pesanan besar ',
            'nilai_bobot_jawaban' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '21',
            'jawaban' => 'Untuk semua pesanan ',
            'nilai_bobot_jawaban' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('jawabans')->insert([
            'id_pertanyaan' => '21',
            'jawaban' => 'Dengan sistem otomatis ',
            'nilai_bobot_jawaban' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
