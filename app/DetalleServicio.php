<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleServicio extends Model
{
    protected $fillable = ['nroFactura','idParqueadero','idVehiculo','idConductor','fechaIngreso','horaIngreso','horaSalida','fechaSalida','valor'];


    public function parqueadero(){
        return $this->belongsTo(Parqueadero::class, 'idParqueadero');
    }

    public function conductor(){
        return $this->belongsTo(Conductor::class, 'idConductor');
    }

    public function vehiculo(){
        return $this->belongsTo(Vehiculo::class, 'idVehiculo');
    }

}
