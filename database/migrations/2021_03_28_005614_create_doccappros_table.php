<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoccapprosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doccappros', function (Blueprint $table) {
            $table->id();
            $table->integer("dni_doc");
            $table->string("crea_doccp");
            $table->string("lug_doccp"); 
            $table->date("ano_doccp"); 
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
        Schema::dropIfExists('doccappros');
    }
}
