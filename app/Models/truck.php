<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class truck extends Model
{
    use HasFactory;
    //Relacion muchos a muchos con TruckDriver
 public function truckdriver(){
    return $this->BelongsToMany("App\Models\Truckdriver");
    }
}
