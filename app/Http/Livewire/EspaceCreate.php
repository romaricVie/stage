<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Entrepot;
use App\Models\Emplacement;

class EspaceCreate extends Component
{
    public $query="";
    
    public function render()
    {
        return view('livewire.espace-create',[
              
              "entrepots" => Entrepot::all(),
              "emplacements" => Emplacement::where('entrepot_id',$this->query)->get(),
       
        ]);
    }
}
