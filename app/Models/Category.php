<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     //Relacion Uno a Muchos con post
     public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}
