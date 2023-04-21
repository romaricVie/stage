<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Emplacement;

class Emplacements extends Component
{

      use WithPagination;
      public $query="";
      public $perPage = 5;
      public $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.emplacements',[
              
              "emplacements" => Emplacement::with(array('entrepot'=> function($query){
                                                          $query->select('id','name');
                                                  }))->where('name','like','%'.$this->query.'%') 
                                                     ->paginate($this->perPage),
       
        ]);
    }
}
