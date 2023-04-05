<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Espace extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name',
        'description',
        'entrepot_id',
        'emplacement_id',
    ];

   //Relationships

    public function entrepot(): BelongsTo
    {
        return $this->belongsTo(Entrepot::class);
    }

    public function emplacement(): BelongsTo
    {
        return $this->belongsTo(Emplacement::class);
    }

    public function biens(): HasMany
    {
        return $this->hasMany(Bien::class);
    }


  



}
