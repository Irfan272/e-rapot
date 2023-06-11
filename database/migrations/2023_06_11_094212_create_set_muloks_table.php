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
        Schema::create('set_muloks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mulok');
            $table->unsignedBigInteger('id_kelas');
            $table->unsignedBigInteger('id_ta');


            $table->foreign('id_mulok')->references('id')->on('muloks')->onDelete('cascade');
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('cascade');
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
        Schema::dropIfExists('set_muloks');
    }
};
