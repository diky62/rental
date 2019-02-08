<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental', function (Blueprint $table) {
         $table->engine = "InnoDB";
         $table->increments('id');
         $table->integer('users_mobile_id')->unsigned();
         $table->integer('mobil_id')->unsigned();
         $table->string('tanggal_rental');
         $table->string('tanggal_kembali');
         $table->integer('harga_sewa');
         $table->string('status');
         $table->timestamps();
         $table->foreign('users_mobile_id')->references('id')->on('users_mobile')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('rental');
    }
}
