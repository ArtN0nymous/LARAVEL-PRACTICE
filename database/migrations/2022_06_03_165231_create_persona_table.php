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
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->char('nombre',50);
            $table->char('apellidos',60);
            $table->integer('edad');
            $table->char('telefono',20);
            $table->unsignedBigInteger('fk_pais');
            $table->boolean('estatus');
            $table->foreign('fk_pais')->references('pk_pais')->on('_pais');
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
        Schema::dropIfExists('persona');
    }
};
