<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Emplacement extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'entrepot_id',
    ];


    //Relationships

    public function entrepot(): BelongsTo
    {
        return $this->belongsTo(Entrepot::class);
    }


    public function espaces(): HasMany
    {
        return $this->hasMany(Espace::class);
    }

    public function biens(): HasMany
    {
        return $this->hasMany(Bien::class);
    }
}
