<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Espace;

class Espaces extends Component
{
      use WithPagination;
      public $query="";
      public $perPage = 5;
      public $paginationTheme = 'bootstrap';


    public function render()
    {
        return view('livewire.espaces',[
              
              "espaces" => Espace::with('entrepot','emplacement')
                                         ->where('name','like','%'.$this->query.'%')
                                         ->orderBy('id','DESC') 
                                         ->paginate($this->perPage),
       
        ]);
    }
}
