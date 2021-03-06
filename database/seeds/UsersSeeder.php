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
          'alamat' => 'Bandung',
          'email' => 'admin@proyek.com',
          'roles_id' => 1,
          'password' => bcrypt('admin'),
          'no_hp' => '083148302377'
      ]);

      DB::table('users')->insert([
          'name' => 'Vendor',
          'nik' => 1234567,
          'alamat' => 'Indramayu',
          'email' => 'vendor@proyek.com',
          'roles_id' => 2,
          'password' => bcrypt('vendor'),
          'no_hp' => '083148302377'
      ]);

      DB::table('users')->insert([
          'name' => 'User',
          'nik' => 1234567,
          'alamat' => 'Indramayu',
          'email' => 'user@proyek.com',
          'roles_id' => 3,
          'password' => bcrypt('user'),
          'no_hp' => '083148302377'

      ]);
    }
}
