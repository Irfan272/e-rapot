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
        Schema::create('set_nilai_mapels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kelas');
            $table->unsignedBigInteger('id_siswa');
            $table->string('semester');
            $table->unsignedBigInteger('id_mapel');
            $table->unsignedBigInteger('id_submapels');
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
            $table->foreign('id_mapel')->references('id')->on('mapels')->onDelete('cascade');
            $table->foreign('id_submapels')->references('id')->on('sub_mapels')->onDelete('cascade');
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
        Schema::dropIfExists('set_nilai_mapels');
    }
};
