<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('stok', function (Blueprint $table) {
         $table->engine = "InnoDB";
         $table->increments('id');
         $table->integer('mobil_id')->unsigned();
         $table->varchar('tanggal');
         $table->string('status');

         $table->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade')->onUpdate('cascade');
         });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok');
    }
}
