<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
          UsersSeeder::class,
      ]);

      $this->call([
          RolesSeeder::class,
      ]);

      $this->call([
          ModulesSeeder::class,
      ]);

      $this->call([
          MenusSeeder::class,
      ]);

      $this->call([
          AccesSeeder::class,
      ]);
    }
}
