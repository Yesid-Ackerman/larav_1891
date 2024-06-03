<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    //A package have muchos trck_drivers
    public function Truck_driver()
    {
        return $this->belongsto('App\Models\Truck_driver');
    }
}
