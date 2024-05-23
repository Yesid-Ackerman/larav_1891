<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
      //Relacion Uno a Muchos con modulo
  public function modulo(){
    return $this->hasMany('App\Models\modulo');
}


}
