<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employe;

class ListeEmployes extends Component
{


    
    
    public function render()
    {
        return view('livewire.liste-employes',[

                    "employes" => Employe::all(),
                    
                         ]);
    }
}
