<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public function profile(){
        //$profile = Profile::where('user_id',$this->id)->first();
       return $this->hasOne('App\Models\Profile');
   }

    // Relacion Uno a Muchos con Post
    public function posts(){
        return $this->hasMany('App\Models\Post');//RECUPERAR LA COLECCION DE POST QUE PERTENECEN A ESTE USUARIO
    }

    public function roles(){
        return $this->BelongsToMany("App\Models\Role");
    }
}
