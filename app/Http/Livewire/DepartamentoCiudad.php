<?php

namespace App\Http\Livewire;

use App\Models\Ciudad;
use App\Models\Departamento;
use Livewire\Component;

class DepartamentoCiudad extends Component
{
    public $departamento = 0;

    public function render()
    {
        if($this->departamento == 0){
            $pSearch = [];
        }
        else{
            $pSearch = Ciudad::where('id_departamento',$this->departamento)->get();
        }
        $departamentos = Departamento::orderBy('nombre','asc')->get();
        return view('livewire.departamento-ciudad',compact(['pSearch','departamentos']));
    }
}
