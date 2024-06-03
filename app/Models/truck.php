<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    public function Truck_driver()
    {
        return $this->belongsToMany('App\Models\Truck_driver','Trucktrucker');
    }
}