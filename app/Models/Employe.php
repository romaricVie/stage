<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'firstname',
        'email',
        'fonction',
        'contact',
        'flotte',
        'fixe',
        'statut',
        'contrat',
        'autres',
        'entite_id',
    ];


    // relationship
    
    
    public function biens(): HasMany
    {
        return $this->hasMany(Bien::class);
    }

    public function affectations(): HasMany
    {
        return $this->hasMany(Affectation::class);
    }

    public function entite(): BelongsTo
    {
        return $this->belongsTo(Entite::class);
    }
}
