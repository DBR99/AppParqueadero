<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    protected $fillable = ['nombre'];

    public function detalleServicio(){
        return $this->hasMany(Vehiculo::class);
    }
}
