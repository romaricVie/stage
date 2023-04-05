<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Entrepot extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'adresse_geographique',
    ];


    //Relationships

    public function biens(): HasMany
    {
        return $this->hasMany(Bien::class);
    }

    public function emplacements(): HasMany
    {
        return $this->hasMany(Emplacement::class);
    }


}
