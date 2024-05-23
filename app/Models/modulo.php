<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modulo extends Model
{
     //Relacion Uno a Muchos con alumno
     public function alumno(){
        return $this->belongsTo('App\Models\alumno');

     //Relacion Uno a uno con profesor
    }  public function profesor(){
        return $this->belongsTo('App\Models\profesor');
    }
}
