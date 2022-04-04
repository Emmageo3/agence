<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'datedenaissance', 'lieudenaissance', 'adresse', 'telephone', 'email', 'photo', 'cni'];

    public function sexe()
    { 
        return $this->belongsTo(Sexe::class); 
    }
}
