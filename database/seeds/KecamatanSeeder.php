<?php

use Illuminate\Database\Seeder;
use App\Kecamatan;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatan')->insert([
            'kabupaten_id'=>1,
            'nama_kecamatan'=>'Juntinyuat'
        ]);
    }
}
