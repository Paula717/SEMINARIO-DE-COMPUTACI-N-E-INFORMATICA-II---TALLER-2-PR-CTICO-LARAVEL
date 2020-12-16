<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->id('codigoF');
            $table->bigInteger('numero')->unsigned();
            $table->foreign('numero')->references('numero')->on('habitacion');
            $table->bigInteger('cliente')->unsigned();
            $table->foreign('cliente')->references('id')->on('cliente');
            $table->bigInteger('formaPago')->unsigned();
            $table->foreign('formaPago')->references('id')->on('formaPago');
            $table->datetime('entrada');
            $table->datetime('salida');
            $table->double('total');
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
        Schema::dropIfExists('factura');
    }
}
