<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Bien;
class Biens extends Component
{

      use WithPagination;
      public $query="";
      public $perPage = 5;
      public $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.biens',[
              
              "biens" => Bien::where('etiquette','like','%'.$this->query.'%') 
                               ->paginate($this->perPage),
       
        ]);
    }
}
