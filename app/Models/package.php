<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    use HasFactory;

    public function truck(){
        return $this->hasMany('App\Models\truckdriver');//RECUPERAR LA COLECCION DEL PAQUETE QUE PERTENECEN A ESTE CAMIONERO
    }
}
