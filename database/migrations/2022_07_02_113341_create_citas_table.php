<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table -> string('Nombre');
            $table -> string('ApellidoPaterno');
            $table -> string('ApellidoMaterno');
            $table -> string('Edad');
            $table -> string('Telefono');
            $table -> string('Especialidad');
            $table -> string('Dia');
            $table -> string('Hora');
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
        Schema::dropIfExists('citas');
    }
}
