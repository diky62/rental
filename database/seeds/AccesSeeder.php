<?php

use Illuminate\Database\Seeder;

class AccesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('acces')->insert([
        'roles_id' => '1',
        'modules_id' => '1',
        'menus_id' => '1',
    ]);
    }
}
