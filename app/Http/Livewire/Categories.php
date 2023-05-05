<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Categorie;


class Categories extends Component
{
 
  use WithPagination;
  public $query="";
  public $perPage = 5;
  public $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.categories',[
              
              "categories" => Categorie::where('name','like','%'.$this->query.'%')
                               ->orderBy('id','DESC')
                               ->paginate($this->perPage),
       
        ]);
    }
}
