<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->id();
            $table->string('radicado',50);
            $table->string('clienteNombre',100);
            $table->string('contraparteNombre',100);
            $table->integer('clienteCedula');
            $table->integer('contraparteCedula');
            $table->string('tipo',50);
            $table->string('clase',50);
            $table->integer('anuo');
            $table->string('estado',100);
            $table->string('micrositio',200);
            $table->string('emailjuzgado',200);
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
        Schema::dropIfExists('procesos');
    }
}
