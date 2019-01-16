<?php

use Illuminate\Database\Seeder;
use App\Kabupaten;
use App\Kecamatan;
use App\Mobil;
use App\Provinsi;
use App\Rental;
use App\Vendor;

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
          RentalSeeder::class,
      ]);
    }
}
