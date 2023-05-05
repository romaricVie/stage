<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Scategorie;

class Scategories extends Component
{

    use WithPagination;
    public $query="";
    public $perPage = 5;
    public $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.scategories',[
              
              "scategories" => Scategorie::with(array('categorie'=> function($query){
                                                          $query->select('id','name');
                                                  }))->where('name','like','%'.$this->query.'%')
                                                     ->orderBy('id','DESC')
                                                     ->paginate($this->perPage),
       
        ]);
    }
}
