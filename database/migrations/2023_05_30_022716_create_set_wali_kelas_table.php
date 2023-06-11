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
        Schema::create('set_wali_kelas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_setkelas');
            $table->unsignedBigInteger('id_guru');
            $table->unsignedBigInteger('id_ta');

            
            $table->foreign('id_setkelas')->references('id')->on('set_kelas')->onDelete('cascade');
            $table->foreign('id_guru')->references('id')->on('gurus')->onDelete('cascade');
            $table->foreign('id_ta')->references('id')->on('tahun_aktifs')->onDelete('cascade');
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
        Schema::dropIfExists('set_wali_kelas');
    }
};
