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
            $table->string('fullname');
            $table->string('password');
            $table->string('jobdesc');
            $table->timestamp('created');
        });
        Schema::create('patients', function(Blueprint $table){
            $table->increments('id');
            $table->string('mr');
            $table->string('fullname');
            $table->string('dob');
            $table->string('pob');
            $table->string('address');
            $table->string('job');
            $table->timestamp('created');
        });
        Schema::create('records', function(Blueprint $table){
            $table->increments('id');
            $table->string('mr');
            $table->string('fullname');
            $table->string('doctors');
            $table->string('date');
            $table->string('ku');
            $table->string('rps');
            $table->string('rpd');
            $table->string('rpk');
            $table->string('sosial');
            $table->string('diagnosis');
            $table->string('treatment');
        });
        Schema::create('payapps', function(Blueprint $table){
            $table->increments('id');
            $table->string('jenis');
            $table->string('price');
        });
        Schema::create('payrecords', function(Blueprint $table){
            $table->increments('id');
            $table->string('mr');
            $table->string('fullname');
            $table->string('date');
            $table->string('payment');
            $table->string('by');
            $table->string('price');
            $table->string('payed');
            $table->string('sisa');
            $table->string('status');
        });

        Schema::create('labs', function(Blueprint $table){
            $table->increments('id');
            $table->string('assesment');
            $table->string('price');
        });


        Schema::create('rads', function(Blueprint $table){
            $table->increments('id');
            $table->string('assesment');
            $table->string('price');
        });


        Schema::create('labrecords', function(Blueprint $table){
            $table->increments('id');
            $table->string('mr');
            $table->string('fullname');
            $table->string('date');
            $table->string('doctors');
            $table->string('keterangan');
            $table->string('assesment');
            $table->string('result');
        });


        Schema::create('radrecords', function(Blueprint $table){
            $table->increments('id');
            $table->string('mr');
            $table->string('fullname');
            $table->string('date');
            $table->string('doctors');
            $table->string('keterangan');
            $table->string('assesment');
            $table->string('result');
            $table->string('image');
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
        Schema::drop('patients');
        Schema::drop('records');
        Schema::drop('payapps');
        Schema::drop('payrecords');
        Schema::drop('labs');
        Schema::drop('rads');
        Schema::drop('labrecords');
        Schema::drop('radrecords');
    }
}
