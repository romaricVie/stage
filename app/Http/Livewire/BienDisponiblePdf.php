<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BienDisponiblePdf extends Component
{
    public $bien;
    public function render()
    {
        return view('livewire.bien-disponible-pdf',[

                   "bien" => $this->bien,
        ]);
    }
}
