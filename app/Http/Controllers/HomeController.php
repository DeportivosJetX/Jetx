<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Deporte;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        comprobarVariablesSesion();
        return view('home');
    }


}
