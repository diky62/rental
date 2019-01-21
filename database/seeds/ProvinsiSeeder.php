<?php

use Illuminate\Database\Seeder;
use App\Provinsi;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(database_path('csv/provinsi.csv'), "r");
        $data = array();
        while (($row = fgetcsv($file, 0, ",")) !== FALSE) {
          $data[] = $row;
        }
        foreach ($data as $d) {
        $s = new Provinsi();
        $s->id = $d[0];
        $s->nama_provinsi = $d[1];
        $s->save();
        }
    }
}
