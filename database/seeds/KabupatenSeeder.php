<?php

use Illuminate\Database\Seeder;
use App\Kabupaten;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $file = fopen(database_path('csv/kabupaten.csv'), "r");
      $data = array();
      while (($row = fgetcsv($file, 0, ",")) !== FALSE) {
        $data[] = $row;
      }
      foreach ($data as $d) {
      $s = new Kabupaten();
      $s->id = $d[0];
      $s->provinsi_id = $d[1];
      $s->nama_kabupaten = $d[2];
      $s->save();
    }
  }
}
