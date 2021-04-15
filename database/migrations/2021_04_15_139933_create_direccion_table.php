<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->id();
            $table->string('calle');
            $table->string('numero');
            $table->bigInteger('id_Region')->unsigned();
            $table->bigInteger('id_Comuna')->unsigned();
            $table->foreign('id_Region')->references('id')->on('region')->onDelete('cascade')->nullable();
            $table->foreign('id_Comuna')->references('id')->on('comuna')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('direccion');
    }
}
