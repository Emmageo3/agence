<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = ['pays_id' ,'nom'];

    public function Pays()
    { 
        return $this->belongsTo(Pays::class); 
    }

    public function departements() 
    { 
        return $this->hasMany(Departement::class); 
    }
}
