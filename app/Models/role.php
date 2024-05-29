<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class role extends Model
{
    use HasFactory;

    //Relacion muchos a muchos con User
    public function users(){
        return $this->BelongsToMany("App\Models\User");
    }
}
