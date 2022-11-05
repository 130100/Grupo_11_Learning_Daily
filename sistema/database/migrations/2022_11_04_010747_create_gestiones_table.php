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
        Schema::create('gestiones', function (Blueprint $table) {
            $table->id();
            $table->string('primernombre');
            $table->string('segundonombre');
            $table->string('tercernombre');
            $table->string('primerapellido');
            $table->string('segundoapellido');
            $table->string('genero');
            $table->string('tipodoc');
            $table->integer('dui');
            $table->integer('nup');
            $table->date('fechadenacimiento');
            $table->string('nacionalidad');
            $table->string('pais');
            $table->string('tipodivision');
            $table->string('region');
            $table->string('subregion');
            $table->string('iso');
            $table->string('alpha');
            $table->string('numerico');
            $table->string('coi');
            $table->string('residencia');
            $table->string('calle');
            $table->string('apartamento');
            $table->string('estadocivil');
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
        Schema::dropIfExists('gestiones');
    }
};
