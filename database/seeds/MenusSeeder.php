<?php

use Illuminate\Database\Seeder;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('menus')->insert([
          'name' => 'Role Management',
          'modules_id' => '1',
          'url' => 'home1',
      ]);


    }
}
