<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class truckdriver extends Model
{
    use HasFactory;
    //Relacion Uno a Muchos (Inversa) con Package
 public function package(){
    return $this->belongsTo('App\Models\package');
    }
    //Relacion muchos a muchos con Truck
 public function truck(){
    return $this->BelongsToMany("App\Models\Truck");
    }
}
