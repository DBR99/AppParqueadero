<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $fillable = ['tipoDocumento','numeroDocumento','nombre','apellido'];

    public function detalleServicio(){
        return $this->hasMany(DetalleServicio::class);
    }
}
