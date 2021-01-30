<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class Buscar extends Component
{
    public $search = "";

    public function render()
    {
        if($search = ""){
            $pSearch = [];
        }
        else{
            $pSearch = Producto::where('nombre','LIKE',"%".$this->search."%")->get();
        }
        return view('livewire.buscar',compact('pSearch'));
    }
}
