<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deplacement extends Model
{
    use HasFactory;
    
      protected $fillable = [
        
        'description', 
        'motif_deplacement',
        'entrepot_id',
        'emplacement_id',
        'espace_id',
        'entite_id', // identifiant du bien
        'bien_id',

    ];

    //Relationships
    
    public function bien(): BelongsTo
    {
        return $this->belongsTo(Bien::class);
    }

    public function entrepot(): BelongsTo
    {
        return $this->belongsTo(Entrepot::class);
    }

    public function emplacement(): BelongsTo
    {
        return $this->belongsTo(Emplacement::class);
    }

    public function espace(): BelongsTo
    {
        return $this->belongsTo(Espace::class);
    }

    public function entite(): BelongsTo
    {
        return $this->belongsTo(Entite::class);
    }





}
