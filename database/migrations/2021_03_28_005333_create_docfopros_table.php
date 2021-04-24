<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocfoprosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docfopros', function (Blueprint $table) {
            $table->id();
            $table->integer("dni_doc");
            $table->string("gra_docfp");
            $table->string("instt_adocp");
            $table->string("cobt_docfp");
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
        Schema::dropIfExists('docfopros');
    }
}
