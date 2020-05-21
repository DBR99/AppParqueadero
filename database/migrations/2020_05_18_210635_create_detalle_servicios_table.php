<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_servicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nroFactura');
            $table->date('fechaIngreso');
            $table->date('horaIngreso');
            $table->date('fechaSalida');
            $table->date('horaSalida');
            $table->date('valor');
            $table->bigInteger('idParqueadero')->unsigned();
            $table->foreign('idParqueadero')->references('id')->on('parqueaderos');
            $table->bigInteger('idVehiculo')->unsigned();
            $table->foreign('idVehiculo')->references('id')->on('vehiculos');
            $table->bigInteger('idConductor')->unsigned();
            $table->foreign('idConductor')->references('id')->on('conductors');
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
        Schema::dropIfExists('detalle_servicios');
    }
}
