<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
      //Relacion Uno a Muchos (Inversa) con Category
  public function modulo(){
    return $this->belongsTo('App\Models\modulo');
}


}
