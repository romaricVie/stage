<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Scategorie extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'categorie_id',
    ];

    // relationships

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

    public function biens(): HasMany
    {
        return $this->hasMany(Bien::class);
    }
}
