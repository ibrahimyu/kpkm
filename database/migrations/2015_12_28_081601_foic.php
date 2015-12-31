<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table){
          $table->increments('id');
          $table->string('username');
          $table->string('password');
          $table->string('code');
          $table->string('rules');
        });
        Schema::create('stafs', function(Blueprint $table){
          $table->increments('id');
          $table->string('code');
          $table->string('fullname');
          $table->string('gelar');
          $table->string('gender');
          $table->string('tanggal_lahir');
          $table->string('alamat');
          $table->string('tlp');
          $table->string('email');
          $table->string('sip');
          $table->string('divisi');
          $table->string('jadwal_praktik');
        });
        Schema::create('pasiens', function(Blueprint $table){
          $table->increments('id');
          $table->string('no_rm');
          $table->string('nama');
          $table->string('gender');
          $table->string('tanggal_lahir');
          $table->string('alamat');
          $table->string('pendidikan');
          $table->string('pernikahan');
          $table->string('agama');
          $table->string('status_keluarga');
        });
        Schema::create('visits', function(Blueprint $table){
          $table->increments('id');
          $table->string('tanggal');
          $table->string('no_rm');
          $table->string('dokter');
        });
        Schema::create('rekam_medis', function(Blueprint $table){
          $table->increments('id');
          $table->string('no_rm');
          $table->string('nama');
          $table->string('keluhan');
          $table->string('riwayat_penyakit');
          $table->string('penunjang');
          $table->string('diagnosis');
          $table->string('dd');
          $table->string('icd10');
          $table->string('tindakan');
          $table->string('ket_tindakan');
          $table->string('obat');
          $table->string('dokter');
        });
        Schema::create('farmasis', function(Blueprint $table){
          $table->increments('id');
          $table->string('obat');
          $table->string('golongan');
          $table->string('sediaan');
          $table->string('stok');
          $table->string('satuan');
          $table->string('harga');
        });
        Schema::create('penunjangs', function(Blueprint $table){
          $table->increments('id');
          $table->string('jenis_tindakan');
          $table->string('biaya');
        });
        Schema::create('record_obats', function(Blueprint $table){
          $table->increments('id');
          $table->string('tanggal');
          $table->string('no_rm');
          $table->string('obat');
          $table->string('dokter');
          $table->string('apoteker');
        });
        Schema::create('record_penunjangs', function(Blueprint $table){
          $table->increments('id');
          $table->string('tanggal');
          $table->string('no_rm');
          $table->string('jenis_tindakan');
          $table->string('hasil');
          $table->string('dokter');
          $table->string('petugas');
        });
        Schema::create('record_dokters', function(Blueprint $table){
          $table->increments('id');
          $table->string('tanggal');
          $table->string('no_rm');
          $table->string('diagnosis');
          $table->string('jasa_konsultasi');
          $table->string('jasa_tindakan');
        });
        Schema::create('payments',function(Blueprint $table){
          $table->increments('id');
          $table->string('jenis_jasa');
          $table->string('harga');
        });
        Schema::create('app_details', function(Blueprint $table){
          $table->increments('id');
          $table->string('nama_klinik');
          $table->string('nama_aplikasi');
          $table->string('developer');
          $table->string('licensed');
          $table->string('user_aggrements');
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
        Schema::drop('app_details');
        Schema::drop('payments');
        Schema::drop('record_obats');
        Schema::drop('record_dokters');
        Schema::drop('record_penunjangs');
        Schema::drop('stafs');
        Schema::drop('pasiens');
        Schema::drop('visits');
        Schema::drop('rekam_medis');
        Schema::drop('penunjangs');
        Schema::drop('farmasis');
    }
}
