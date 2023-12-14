<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Entrepot;
use App\Models\Emplacement;
use App\Models\Espace;
use App\Models\Entite;
use App\Models\Bien;

class Deplacements extends Component
{

   
    public $entrepot="";
    public $emplacement="";
    

   

    public function render()
    {
        return view('livewire.deplacements',[

               "biens" => Bien::all(),
               "entrepots" => Entrepot::all(),
               "entites" => Entite::all(),

               "emplacements" => Emplacement::where('entrepot_id',$this->entrepot)->get(),
               "espaces" => Espace::where('emplacement_id',$this->emplacement)->get(),
       
        ]);
    }



}
