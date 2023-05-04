<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employe as Travailleur;
use Livewire\WithPagination;

class Employe extends Component
{
      use WithPagination;
      public $query="";
      public $perPage = 5;
      public $paginationTheme = 'bootstrap';
   


    public function updatingQuery()
    {   
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.employe',[

            "employes" => Travailleur::where('name','like','%'.$this->query.'%')
                              ->orWhere('firstname','like','%'.$this->query.'%')
                              ->orWhere('email','like','%'.$this->query.'%')
                              ->orWhere('contact','like','%'.$this->query.'%')
                              ->orderBy('id','DESC')
                              ->paginate($this->perPage),
                         ]);
    }
}
