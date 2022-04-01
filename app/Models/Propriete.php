<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;

    public function proprietaire()
    { 
        return $this->belongsTo(Proprietaire::class); 
    }

    public function quartier()
    { 
        return $this->belongsTo(Quartier::class); 
    }
}
