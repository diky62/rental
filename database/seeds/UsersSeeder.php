<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name'=>'Administrator',
          'nik'=>1234567,
          // 'provinsi_id'=>1,
          // 'kabupaten_id'=>1,
          // 'kecamatan_id'=>1,
          'alamat'=>'Bandung',
          'email'=>'admin@proyek.com',
          // 'role_id'=>1,
          'password'=>bcrypt('admin'),
          'no_hp'=>'083148302377'
      ]);
    }
}
