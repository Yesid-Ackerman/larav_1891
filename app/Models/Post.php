<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  //Relacion Uno a Muchos (Inversa) con Category
  public function category(){
    return $this->belongsTo('App\Models\Category');
}

 //Relacion Uno a Muchos (Inversa) con User
 public function user(){
    return $this->belongsTo('App\Models\user');
}
}
