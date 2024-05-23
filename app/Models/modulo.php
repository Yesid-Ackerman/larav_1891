<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modulo extends Model
{
     //Relacion Uno a Muchos (Inversa) con alumno
     public function alumno(){
        return $this->belongsTo('App\Models\alumno');

     //Relacion Uno a uno (Inversa) con profesor
    }  public function profesor(){
        return $this->hasOne('App\Models\profesor');
    }
}
