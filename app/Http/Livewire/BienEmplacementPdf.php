<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BienEmplacementPdf extends Component
{
    public $emplacement;

    public function render()
    {
        return view('livewire.bien-emplacement-pdf',[
                   "emplacement" => $this->emplacement,
        ]);
    }
}
