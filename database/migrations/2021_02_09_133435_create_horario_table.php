<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario', function (Blueprint $table) {
            $table->id();
            $table->string("cod_per");
            $table->string("cod_cur");
            $table->string("cod_sec");
            $table->string("cod_mat");
            $table->integer("dni_al");
            $table->integer("dni_doc");
            $table->string("cod_aul");
            $table->date("dia_hor");
            $table->time("inic_hor");
            $table->time("ter_hor");
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
        Schema::dropIfExists('horario');
    }
}
