<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Entite extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ville',
        'pays'
    ];


    //Relationships
    
    public function biens(): HasMany
    {
        return $this->hasMany(Bien::class);
    }


     public function employes(): HasMany
    {
        return $this->hasMany(Employe::class);
    }
}
