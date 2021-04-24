<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanestudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planestudio', function (Blueprint $table) {
            $table->id();
            $table->string("cod_pla");
            $table->string("tit_pla");
            $table->string("descrip_pla");
            $table->string("cod_cur");
            $table->string("cod_mat");
            $table->string("archi_pla");
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
        Schema::dropIfExists('planestudio');
    }
}
