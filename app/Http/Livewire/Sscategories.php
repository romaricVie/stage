<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Sscategorie;


class Sscategories extends Component
{
    use WithPagination;
    public $query="";
    public $perPage = 5;
    public $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.sscategories',[
              
              "sscategories" => Sscategorie::with('categorie','scategorie')
                               ->where('name','like','%'.$this->query.'%')
                               ->orderBy('id','DESC')
                               ->paginate($this->perPage),
       
        ]);
    }
}
