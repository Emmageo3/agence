<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;

    protected $fillable = ['proprietaire_id', 'typepropriete_id', 'quartier_id', 'numero', 'photo', 'adresse', 'loyer'];

    public function proprietaire()
    { 
        return $this->belongsTo(Proprietaire::class); 
    }

    public function quartier()
    { 
        return $this->belongsTo(Quartier::class); 
    }

    public function typepropriete()
    { 
        return $this->belongsTo(Typepropriete::class); 
    }
}
