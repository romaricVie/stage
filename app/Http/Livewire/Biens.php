<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Bien;
use Illuminate\Support\Facades\DB;
class Biens extends Component
{

      use WithPagination;
      public $query="";
      public $perPage = 5;
      public $paginationTheme = 'bootstrap';
      public $biens;
      protected $listeners =["reloadBiens"];

      //Lors du chargement de la page 
      public function mount()
      {
        $this->biens = Bien::orderBy('id','DESC')->get();
      } 

    public function render()
    {
        return view('livewire.biens');
    }

      public function reloadBiens($categorie_id,$query)
      {
        //$this->biens = Bien::query();

        $this->biens = Bien::query();

         if($categorie_id)
         {
            $this->biens = $this->biens->where('categorie_id',$categorie_id);
         }

         if($query)
         {
            $this->biens = $this->biens->where('etiquette','like','%'.$query.'%')
                                        ->orWhere('code','like','%'.$query.'%')
                                        ->orWhere('name','like','%'.$query.'%');

         }

         $this->biens = $this->biens->get();
      }

    
      
    /*public function render()
    {
        return view('livewire.biens',[
              
              "biens" => Bien::where('etiquette','like','%'.$this->query.'%')
                               ->orderBy('id','DESC')
                               ->paginate($this->perPage),
       
        ]);
    }*/
}
