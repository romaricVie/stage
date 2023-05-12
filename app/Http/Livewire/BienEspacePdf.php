<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BienEspacePdf extends Component
{
    public $espace;

    public function render()
    {
        return view('livewire.bien-espace-pdf',[
                     "espace"  => $this->espace,

        ]);
    }
}
