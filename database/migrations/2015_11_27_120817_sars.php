<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('username');
            $table->string('password');
            $table->string('fullname');
            $table->string('jobdesc');
            $table->timestamp('created');
        });

        Schema::create('records', function(Blueprint $table){
            $table->increments('id');
            $table->string('mr');
            $table->string('nama');
            $table->string('dokter');
            $table->string('tanggal');
            $table->string('keluhan');
            $table->string('riwayat');
            $table->string('penunjang');
            $table->string('diagnosis');
            $table->string('treatment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('records');
    }
}
