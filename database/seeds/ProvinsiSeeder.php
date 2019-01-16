<?php

use Illuminate\Database\Seeder;
use App\Provinsi;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsi')->insert([
            'users_id'=>1,
        	'nama_provinsi'=>'Jawa Barat'
        ]);
    }
}
