<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumniper', function (Blueprint $table) {
            $table->id();
            $table->integer("dni_al");
            $table->string("gra_alip");
            $table->string("prom_alip");
            $table->string("esp_alip");
            $table->date("lnac_alip");
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
        Schema::dropIfExists('alumniper');
    }
}
