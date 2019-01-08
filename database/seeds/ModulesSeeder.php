<?php

use Illuminate\Database\Seeder;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('modules')->insert([
          'name' => 'Administrator',
          'description' => 'Module',
          'icon' => 'fa fa-users',
          'order' => '1',
          'segment' => '1',
      ]);
    }
}
