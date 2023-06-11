<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            // $table->string('NIP')->unique();
            $table->string('NAMA');
            $table->integer('NIS')->unique();
            $table->integer('NISN')->unique();
            $table->enum('jenis_kelamin', ['pria', 'wanita']);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('AGAMA');
            $table->string('ALAMAT');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('no_ayah');
            $table->string('no_ibu');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('golongan_darah');
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
        Schema::dropIfExists('siswas');
    }
};
