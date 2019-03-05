<?php

use Illuminate\Database\Seeder;
use App\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        DB::table('vendor')->insert([
          'users_id'=>2,
        	'nama_rental'=>'Deden Rental',
        	'alamat'=>'Juntikebon',
        	'no_rekening'=>'544322229868',
        	'nama_pemilik'=>'Deden',
        	'nama_bank'=>'Bank BNI',
        	'no_hp'=>'083148302377',
          'status'=>'1'
        ]);
    }
}
