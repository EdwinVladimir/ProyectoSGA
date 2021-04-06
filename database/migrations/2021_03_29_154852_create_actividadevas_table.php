<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadevasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividadevas', function (Blueprint $table) {
            $table->id();
            $table->integer("dni_al");
            $table->string("tipo_eva");
            $table->decimal("nota_eva");
            $table->decimal("peso_eva");
            $table->decimal("nopond_eva");
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
        Schema::dropIfExists('actividadevas');
    }
}
