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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->double('Edad');
            $table->string('Parentesco');
            $table->decimal('Porcentaje');
            $table->string('DUI');
            $table->string('Nombre1');
            $table->double('Edad1');
            $table->string('Parentesco1');
            $table->decimal('Porcentaje1');
            $table->string('DUI1');
            $table->string('Fecha');
            $table->string('Lugar');
            $table->string('Firma');

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
        Schema::dropIfExists('personas');
    }
};
