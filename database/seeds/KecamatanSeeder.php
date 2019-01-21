<?php

use Illuminate\Database\Seeder;
use App\Kecamatan;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $file = fopen(database_path('csv/kecamatan.csv'), "r");
      $data = array();
      while (($row = fgetcsv($file, 0, ",")) !== FALSE) {
        $data[] = $row;
      }
      foreach ($data as $d) {
      $s = new Kecamatan();
      $s->id = $d[0];
      $s->kabupaten_id = $d[1];
      $s->nama_kecamatan = $d[2];
      $s->save();
    }
  }
}
