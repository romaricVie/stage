<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BienEmployePdf extends Component
{
    public $employe;

 

    public function render()
    {
        return view('livewire.bien-employe-pdf',[
              "employe" => $this->employe,
        ]);
    }
}
