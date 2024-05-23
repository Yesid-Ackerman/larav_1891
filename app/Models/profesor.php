<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
   //  Relacion Uno A Uno
   public function modulo(){
    //$profesor = Profesor::where('user_id',$this->id)->first();
   return $this->hasOne('App\Models\modulo');
}
}
