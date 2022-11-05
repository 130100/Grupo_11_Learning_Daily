<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referencias_personales', function (Blueprint $table) {
            $table->id();
            $table->string('NombreCompleto');
            $table->integer('Telefono');
            $table->string('Correo');
            $table->string('Asociacion');
            $table->string('DesignarBeneficiarios');
            $table->string('Lugar');
            $table->string('NombreEjecutivo');
            $table->String('Fecha');
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
        Schema::dropIfExists('referencias_personales');
    }
};
