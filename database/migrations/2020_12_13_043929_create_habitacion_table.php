<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacion', function (Blueprint $table) {
            $table->id('numero');
            $table->string('descripcion', 255);
            $table->integer('numCama');
            $table->string('foto', 45);
            $table->bigInteger('precio_id')->unsigned();
            $table->foreign('precio_id')->references('id')->on('precio');
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
        Schema::dropIfExists('habitacion');
    }
}
