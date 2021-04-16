<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumncprofTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumncprof', function (Blueprint $table) {
            $table->id();
            $table->integer("dni_al");
            $table->string("crea_alcp");
            $table->string("lug_alcp"); 
            $table->date("ano_alcp"); 
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
        Schema::dropIfExists('alumncprof');
    }
}
