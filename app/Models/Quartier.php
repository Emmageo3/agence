<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    use HasFactory;

    public function commune()
    { 
        return $this->belongsTo(Commune::class); 
    }

    public function proprietes() 
    { 
        return $this->hasMany(Propriete::class); 
    }
}
