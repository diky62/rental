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
          'name' => 'Administrator',
          'nik' => 1234567,
          'provinsi_id' => 32,
          'kabupaten_id' => 3212,
          'kecamatan_id' => 3212170,
          'alamat' => 'Bandung',
          'email' => 'admin@proyek.com',
          'roles_id' => 1,
          'password' => bcrypt('admin'),
          'no_hp' => '083148302377'
      ]);

      DB::table('users')->insert([
          'name' => 'Vendor',
          'nik' => 1234567,
          'provinsi_id' => 32,
          'kabupaten_id' => 3212,
          'kecamatan_id' => 3212170,
          'alamat' => 'Indramayu',
          'email' => 'vendor@proyek.com',
          'roles_id' => 2,
          'password' => bcrypt('vendor'),
          'no_hp' => '083148302377'
      ]);
    }
}
