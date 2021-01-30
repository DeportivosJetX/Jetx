<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformesController extends Controller
{
    public function indexIngresos(){
        comprobarVariablesSesion();
        $filtro = '';
        $orderBy = 'Diariamente';
        return view('ingresos',compact(['filtro','orderBy']));
    }

    public function indexIngresosF(Request $request){
        comprobarVariablesSesion();
        if($request->filtro == "hoy"){
            $filtro = "";
        }
        else
        {
            $filtro = $request->filtro;
        }
        $orderBy = $request->orderBy;
        return view('ingresos',compact(['filtro','orderBy']));
    }

    public function indexRotacion(){
        comprobarVariablesSesion();
        return view('rotacion');
    }
}
