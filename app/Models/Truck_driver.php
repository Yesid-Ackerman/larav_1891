<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck_driver extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos
    public function Package()
    {
        return $this->hasMany('App\Models\Package');
    }
    //Relacion Muchos a Muchos
    public function Truck_driver()
    {
        return $this->belongsToMany('App\Models\Truck_driver','trucktrucker');
    }

}
