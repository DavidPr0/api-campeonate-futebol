<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('hora_inicio', 0);
            $table->dateTime('hora_termino', 0);
            $table->string('placar_casa');
            $table->string('placar_fora');
            $table->unsignedBigInteger('id_artilheiro')->nullable();
            $table->unsignedBigInteger('id_time_casa');
            $table->unsignedBigInteger('id_time_fora');
            $table->integer('quantidade_gol_artilheiro');
            $table->integer('quantidade_gol_partida');
            $table->foreign('id_artilheiro')
                ->references('id')
                ->on('jogadores');
            $table->foreign('id_time_casa')
                ->references('id')
                ->on('times');
            $table->foreign('id_time_fora')
                ->references('id')
                ->on('times');
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
        Schema::dropIfExists('partidas');
    }
}
