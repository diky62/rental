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
          'email' => 'admin@proyek.com',
          'roles_id' => '1',
          'password' => bcrypt('admin')
      ]);
    }
}
