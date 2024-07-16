<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soal')->insert([
            'id_categorys' => '1',
            'pertanyaan' => 'Telah berapa lama perusahaan Anda beroperasi sebagai pemasok ayam ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '1',
            'pertanyaan' => 'Apakah Anda memiliki izin dan sertifikasi yang diperlukan untuk memasok ayam di wilayah kami ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '1',
            'pertanyaan' => 'Berapa referensi dari klien terbesar yang dapat Anda berikan ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '1',
            'pertanyaan' => 'Apakah Anda mampu memenuhi kapasitas produksi kami selama periode puncak (misal 300-1000 Ton/Hari) ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '1',
            'pertanyaan' => 'Apakah Anda memiliki program keberlanjutan dalam operasi Anda ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '2',
            'pertanyaan' => 'Berapa Harga Produk Anda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '3',
            'pertanyaan' => 'Apakah Anda memiliki sertifikasi keamanan pangan seperti HACCP atau ISO 22000 ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '3',
            'pertanyaan' => 'Apakah Anda melakukan inspeksi kualitas secara rutin terhadap produk Anda ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '3',
            'pertanyaan' => 'Apakah Anda memiliki prosedur penarikan produk yang jelas jika ditemukan masalah kualitas ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '3',
            'pertanyaan' => 'Apakah Anda memastikan ayam yang Anda pasok bebas dari penyakit ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '3',
            'pertanyaan' => 'Apakah Anda memiliki tim khusus yang bertanggung jawab atas pengendalian kualitas ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '4',
            'pertanyaan' => 'Apakah Anda memiliki sistem pemesanan online/website ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '4',
            'pertanyaan' => 'Apakah Anda dapat memenuhi pesanan dalam waktu 48 jam ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '4',
            'pertanyaan' => 'Apakah Anda dapat menangani pesanan mendesak/instan order ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '4',
            'pertanyaan' => 'Apakah Anda memiliki kebijakan pengembalian produk yang jelas ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '4',
            'pertanyaan' => 'Apakah Anda menyediakan dokumen-dokumen terkait untuk pelanggan ? Misal, surat jalan/faktur pengiriman',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '5',
            'pertanyaan' => 'Apakah Anda menerima pembayaran melalui transfer bank ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '5',
            'pertanyaan' => 'Apakah Anda menawarkan opsi pembayaran kredit/termin (misalnya, 30 hari bersih) setelah invoice terbit ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '5',
            'pertanyaan' => 'Apakah Anda memberikan diskon untuk pembayaran lebih awal ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '5',
            'pertanyaan' => 'Apakah Anda memiliki kebijakan yang jelas terkait keterlambatan pembayaran ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('soal')->insert([
            'id_categorys' => '5',
            'pertanyaan' => 'Apakah Anda menawarkan faktur elektronik ?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
