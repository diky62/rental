<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('name');
            $table->integer('nik');
            // $table->integer('provinsi_id')->unsigned();
            // $table->integer('kabupaten_id')->unsigned();
            // $table->integer('kecamatan_id')->unsigned();
            $table->string('alamat');
            $table->string('email')->unique();
            // $table->integer('role_id')->unsigned();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('no_hp');
            $table->rememberToken();
            $table->timestamps();

            // $table->foreign('provinsi_id')->references('id')->on('provinsi')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('kabupaten_id')->references('id')->on('kabupaten')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}