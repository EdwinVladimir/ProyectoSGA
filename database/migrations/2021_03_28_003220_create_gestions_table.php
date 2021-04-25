<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestions', function (Blueprint $table) {
            $table->id();
            $table->integer("dni_al");
            $table->integer("dni_doc"); 
            $table->string("cod_per");
            $table->string("cod_cur");
<<<<<<< HEAD
            $table->string("cod_mod");
=======
>>>>>>> 590e5fb766f1723d82da4eb56048f568b06ff563
            $table->string("cod_sec");
            $table->string("cod_mat");
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
        Schema::dropIfExists('gestions');
    }
}
