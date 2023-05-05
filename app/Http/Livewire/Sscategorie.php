<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;
use App\Models\Scategorie;

class Sscategorie extends Component
{
      public $query="";
    

    public function render()
    {


        return view('livewire.sscategorie',[
              
              "categories" => Categorie::all(),
              "scategories" => Scategorie::where('categorie_id',$this->query)->get(),
       
        ]);
    }
}
