<?php

use Illuminate\Database\Seeder;
use App\Kabupaten;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kabupaten')->insert([
            'provinsi_id'=>1,
            'nama_kabupaten'=>'Indramayu'
        ]);
    }
}
