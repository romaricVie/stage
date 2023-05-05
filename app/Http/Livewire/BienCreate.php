<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Entrepot;
use App\Models\Emplacement;
use App\Models\Espace;
use App\Models\Categorie;
use App\Models\Scategorie;
use App\Models\Sscategorie;
use App\Models\Entite;

class BienCreate extends Component
{
    public $categorie="";
    public $scategorie="";
    public $entrepot="";
    public $emplacement="";
   

    public function render()
    {
        return view('livewire.bien-create',[

               "categories" => Categorie::all(),
               "entrepots" => Entrepot::all(),
               "entites" => Entite::all(),

               "scategories" => Scategorie::where('categorie_id',$this->categorie)->get(),
               "sscategories" => Sscategorie::where('scategorie_id',$this->scategorie)->get(),
               "emplacements" => Emplacement::where('entrepot_id',$this->entrepot)->get(),
               "espaces" => Espace::where('emplacement_id',$this->emplacement)->get(),
       
        ]);
    }
}
