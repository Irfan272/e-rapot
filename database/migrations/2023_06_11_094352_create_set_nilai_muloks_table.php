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
        Schema::create('set_nilai_muloks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kelas');
            $table->unsignedBigInteger('id_siswa');
            $table->string('semester');
            $table->unsignedBigInteger('id_mulok');
            $table->unsignedBigInteger('id_submulok');
            $table->integer('nilai_fm1')->nullable();;
            $table->integer('nilai_sm1')->nullable();;
            $table->integer('nilai_fm2')->nullable();;
            $table->integer('nilai_sm2')->nullable();;
            $table->integer('nilai_fm3')->nullable();;
            $table->integer('nilai_sm3')->nullable();;
            $table->integer('nilai_fm4')->nullable();;
            $table->integer('nilai_sm4')->nullable();;
            $table->integer('nilai_fm5')->nullable();;
            $table->integer('nilai_sm5')->nullable();;
            $table->integer('nilai_fm6')->nullable();;
            $table->integer('nilai_sm6')->nullable();;
            $table->decimal('nilai_rata', 8, 2, false)->nullable();;



            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('cascade');
            $table->foreign('id_siswa')->references('id')->on('siswas')->onDelete('cascade');
            $table->foreign('id_mulok')->references('id')->on('muloks')->onDelete('cascade');
            $table->foreign('id_submulok')->references('id')->on('sub_muloks')->onDelete('cascade');
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
        Schema::dropIfExists('set_nilai_muloks');
    }
};
