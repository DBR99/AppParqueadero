<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parqueadero extends Model
{
    protected $fillable = ['cuposCarro', 'cuposMoto', 'tarifa'];

    public function medicos(){
        return $this->hasMany(DetalleServicio::class);
    }

}
