<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Reparation;

class Reparations extends Component
{
      use WithPagination;
      public $query="";
      public $perPage = 5;
      public $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.reparations',[
              
                  "reparations" => Reparation::with('bien')
                                                      ->where('etiquette','like','%'.$this->query.'%') 
                                                      ->orderBy('id','DESC')
                                                      ->paginate($this->perPage),
       
        ]);
    }
}
