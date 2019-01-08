<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acces', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('roles_id')->unsigned();
          $table->integer('modules_id')->unsigned();
          $table->integer('menus_id')->unsigned();
          $table->rememberToken();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acces');
    }
}
