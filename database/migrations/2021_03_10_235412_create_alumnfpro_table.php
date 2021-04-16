<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnfproTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnfpro', function (Blueprint $table) {
            $table->id();
            $table->integer("dni_al");
            $table->string("gra_alfp");
            $table->string("instt_alfp");
            $table->string("cobt_alfp");
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
        Schema::dropIfExists('alumnfpro');
    }
}
