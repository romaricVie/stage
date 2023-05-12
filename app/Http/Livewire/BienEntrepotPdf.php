<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BienEntrepotPdf extends Component
{
    public $entrepot;

    public function render()
    {
        return view('livewire.bien-entrepot-pdf',[

                     "entrepot" => $this->entrepot
        ]);
    }
}
