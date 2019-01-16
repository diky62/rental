<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Provinsi;
use App\Kabupaten;
use App\Kecamatan;
use App\Roles;
use App\Vendor;
use App\Mobil;
use App\Rental;

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
          ProvinsiSeeder::class,
      ]);
      $this->call([
          KabupatenSeeder::class,
      ]);
      $this->call([
          KecamatanSeeder::class,
      ]);
      $this->call([
          RoleSeeder::class,
      ]);
      $this->call([
          UsersSeeder::class,
      ]);
      $this->call([
          VendorSeeder::class,
      ]);
      $this->call([
          MobilSeeder::class,
      ]);
      $this->call([
          VendorSeeder::class,
      ]);
      $this->call([
          MobilSeeder::class,
      ]);
    }
}
