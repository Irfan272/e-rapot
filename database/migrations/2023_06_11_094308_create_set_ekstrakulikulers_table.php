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
        Schema::create('set_ekstrakulikulers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ekstrakulikuler');
            $table->unsignedBigInteger('id_siswa');
            $table->integer('nilai');


            $table->foreign('id_ekstrakulikuler')->references('id')->on('ekstrakulikulers')->onDelete('cascade');
            $table->foreign('id_siswa')->references('id')->on('siswas')->onDelete('cascade');
        
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
        Schema::dropIfExists('set_ekstrakulikulers');
    }
};
