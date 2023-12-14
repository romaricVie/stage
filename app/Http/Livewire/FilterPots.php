<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie;

class FilterPots extends Component
{
    public $categorie_id;
    public $query;

    public function render()
    {
        $categories = Categorie::get();

        return view('livewire.filter-pots',[

                   "categories" => $categories
        ]);
    }

    public function filter()
    {
        $this->emitTo('biens','reloadBiens',$this->categorie_id,$this->query);
    }
}
