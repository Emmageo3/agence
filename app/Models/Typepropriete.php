<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typepropriete extends Model
{
    use HasFactory;

    protected $fillable = ['libelle'];

    public function proprietes() 
    { 
        return $this->hasMany(Propriete::class); 
    }
}
