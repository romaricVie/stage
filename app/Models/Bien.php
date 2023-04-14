<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Bien extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'day',
        'month',
        'year',
        'image',
        'ram',
        'etat',
        'disponibilite',
        'generation',
        'disque_dur',
        'processeur',
        'couleur',
        'marque',
        'immatriculation',
        'puissance',
        'matiere',
        'autres',
        'employe_id',  // id de l'employe
        'categorie_id',
        'scategorie_id',
        'sscategorie_id', // sous sous categorie
        'entrepot_id',
        'emplacement_id',
        'espace_id',
        'entite_id',

    ];


    //Relationships

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }


    public function employe(): BelongsTo
    {
        return $this->belongsTo(Employe::class);
    }


    public function scategorie(): BelongsTo
    {
        return $this->belongsTo(Scategorie::class);
    }

    public function sscategorie(): BelongsTo
    {
        return $this->belongsTo(Sscategorie::class);
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

    public function reparations(): HasMany
    {
        return $this->hasMany(Reparation::class);
    }


}
