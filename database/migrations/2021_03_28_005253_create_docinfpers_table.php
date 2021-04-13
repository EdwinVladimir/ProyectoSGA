<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocinfpersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docinfpers', function (Blueprint $table) {
            $table->id();
            $table->integer("dni_doc");
            $table->string("gra_docip");
            $table->string("prom_docip");
            $table->string("esp_adocp");
            $table->date("lnac_adocp");
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
        Schema::dropIfExists('docinfpers');
    }
}
