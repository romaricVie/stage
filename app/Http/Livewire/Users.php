<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Users extends Component
{
      public $query="";
      public $perPage = 5;
      public $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.users',[
              
              "users" => User::where('name','like','%'.$this->query.'%')
                                ->orWhere('firstname','like','%'.$this->query.'%')
                                ->orWhere('email','like','%'.$this->query.'%')
                                ->orderBy('id','DESC')
                                ->paginate($this->perPage),
       
        ]);
    }
}
