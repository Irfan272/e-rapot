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
        Schema::create('set_nilai_sikaps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kelas');
            $table->unsignedBigInteger('id_siswa');
            $table->string('semester');
            $table->unsignedBigInteger('id_sikap');
            $table->integer('nilai_fm1');
            $table->integer('nilai_sm1');
            $table->integer('nilai_fm2');
            $table->integer('nilai_sm2');
            $table->integer('nilai_fm3');
            $table->integer('nilai_sm3');
            $table->integer('nilai_fm4');
            $table->integer('nilai_sm4');
            $table->integer('nilai_fm5');
            $table->integer('nilai_sm5');
            $table->integer('nilai_fm6');
            $table->integer('nilai_sm6');
            $table->decimal('nilai_rata', 8, 2, false);



            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('cascade');
            $table->foreign('id_siswa')->references('id')->on('siswas')->onDelete('cascade');
            $table->foreign('id_sikap')->references('id')->on('sikaps')->onDelete('cascade');
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
        Schema::dropIfExists('set_nilai_sikaps');
    }
};
