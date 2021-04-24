<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->id();            
            $table->string("cod_cur");
            $table->string("nom_cur");
            $table->string("eje_cur");
            $table->string("tipo_cur");
            $table->string("narea_cur");
            $table->date("finic_cur");
            $table->date("ffin_cur");
            $table->integer("nhor_cur");
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
        Schema::dropIfExists('curso');
    }
}
