<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];



    public function scategories(): HasMany
    {
        return $this->hasMany(Scategorie::class);
    }

    public function biens(): HasMany
    {
        return $this->hasMany(Bien::class);
    }
}
