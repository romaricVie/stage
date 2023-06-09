<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Affectation;

class Affectations extends Component
{
      use WithPagination;
      public $query="";
      public $perPage = 5;
      public $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.affectations',[
              
                  "affectations" => Affectation::with('bien','employe')
                                                      ->where('etiquette','like','%'.$this->query.'%') 
                                                      ->orderBy('id','DESC')
                                                      ->paginate($this->perPage),
       
        ]);
    }
}
