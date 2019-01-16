<?php

use Illuminate\Database\Seeder;
use App\Roles;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name'=>'Administrator',
            'level'=>1
        ]);
    }
}
