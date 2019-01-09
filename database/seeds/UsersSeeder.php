<?php

use Illuminate\Database\Seeder;

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
          'name' => 'Administrator',
          'nik' => '1234567',
          'provinsi_id' => '1298765',
          'kabupaten_id' => '1298553',
          'kecamatan_id' => '1298554',
          'alamat' => 'Bandung',
          'email' => 'admin@proyek.com',
          'roles_id' => '1',
          'password' => bcrypt('admin'),
          'status' => 'mahasiswa'
      ]);
    }
}
