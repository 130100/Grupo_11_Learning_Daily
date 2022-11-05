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
        Schema::create('anexos', function (Blueprint $table) {
            $table->id();
            $table->string('Dui');
            $table->string('tarjeta_isss');
            $table->string('tarjeta_iva');
            $table->string('constancia_salario');
            $table->string('nit');
            $table->string('pasapore');
            $table->string('fotocopia_titulo');
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
        Schema::dropIfExists('anexos');
    }
};
