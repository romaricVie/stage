<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sscategorie extends Model
{
    use HasFactory;

     protected $fillable = [
        
        'name', 
        'categorie_id', // id categorie
        'scategorie_id', // id sous categorie
    ];



    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

     public function scategorie(): BelongsTo
    {
        return $this->belongsTo(Scategorie::class);
    }

    public function biens(): HasMany
    {
        return $this->hasMany(Bien::class);
    }

 
}
