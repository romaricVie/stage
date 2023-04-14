<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Reparation extends Model
{
    use HasFactory;
    protected $fillable = [

        'etat', 
        'maintenancier',
        'price',
        'contact_maintenancier',  // identifiant de l'employe
        'description_panne',
        'day',
        'month',
        'year',
        'bien_id',

    ];

  // Relationship
    
    public function bien(): BelongsTo
    {
        return $this->belongsTo(Bien::class);
    }
}
