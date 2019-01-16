<?php

use Illuminate\Database\Seeder;
use App\Mobil;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobil')->insert([
            'vendor_id'=>1,
            'nama_mobil'=>'Avanza 2016',
            'no_polisi'=>'E6301BQ',
            'warna'=>'Putih',
            'transmisi'=>'Matic',
            'jumlah_penumpang'=>4,
            'harga'=>15000000,
            'keterangan'=>'Pribadi'
        ]);
    }
}