<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use App\Models\Scategorie;
use App\Models\Sscategorie;

class Search extends Component
{
    public $categorie="";
    public $scategorie="";
    public $sscategorie="";
   

    public function render()
    {
        return view('livewire.search',[

               "categories" => Categorie::all(),
               "scategories" => Scategorie::where('categorie_id',$this->categorie)->get(),
               "sscategories" => Sscategorie::where('scategorie_id',$this->scategorie)->get(),
       
        ]);
    }
}
