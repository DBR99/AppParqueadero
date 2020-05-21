<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = ['placa','idTipo'];

    public function detalleServicio(){
        return $this->hasMany(DetalleServicio::class);
    }

    public function tipoVehiculo(){
        return $this->belongsTo(TipoVehiculo::class, 'idTipo');
    }
}
