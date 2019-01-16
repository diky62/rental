<?php

use Illuminate\Database\Seeder;
use App\Rental;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rental')->insert([
            'users_id'=>1,
            'mobil_id'=>1,
            'tanggal_rental'=>'20 september 2017',
            'tanggal_kembali'=>'21 september 2017',
            'harga_sewa'=>250000,
            'status'=>'pending'
        ]);
    }
}
