<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Affectation extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'description', 
        'motif_affection',
        'etiquette',
        'employe_id',  // identifiant de l'employe
        'bien_id', // identifiant du bien

    ];

    //Relationships
    
    public function bien(): BelongsTo
    {
        return $this->belongsTo(Bien::class);
    }


    public function employe(): BelongsTo
    {
        return $this->belongsTo(Employe::class);
    }
}
