<?php

use App\Models\Categoria;
use App\Models\Deporte;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

function eliminar_tildes($cadena){

    //Codificamos la cadena en formato utf8 en caso de que nos de errores
    //$cadena = utf8_encode($cadena);

    //Ahora reemplazamos las letras
    $cadena = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $cadena
    );

    $cadena = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $cadena );

    $cadena = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $cadena );

    $cadena = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $cadena );

    $cadena = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $cadena );

    $cadena = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C'),
        $cadena
    );

    return $cadena;
}

/*
comprueba que las sesiones de categoria y deporte estén creadas
si no están creadas, se crean.
*/
function comprobarVariablesSesion(){
    if(!request()->session()->has('categorias')){
    $categorias = Categoria::orderBy('nombre', 'asc')->get();
    session(['categorias' => $categorias]);
    }
    if(!request()->session()->has('deportes')){
        $deportes = Deporte::orderBy('nombre', 'asc')->get();
        session(['deportes' => $deportes]);
    }
}

function getProducto($atributo,$orden){
    $productos = Producto::from('productos as productos')
        ->join('talla_productos as t',function($join){
            $join->on('productos.id','=','t.id_producto');
        })->select(DB::raw('productos.*, sum(t.stock) as cantidad'))
        ->groupBy('productos.id')
        ->orderBy('productos.'.$atributo, $orden)
        ->paginate(15);
    return $productos;
}

function getProductoC($atributo,$orden,$filtro,$valor){
    $productos = Producto::from('productos as productos')
        ->join('talla_productos as t',function($join){
            $join->on('productos.id','=','t.id_producto');
        })->select(DB::raw('productos.*, sum(t.stock) as cantidad'))
        ->where('productos.'.$filtro, $valor)
        ->groupBy('productos.id')
        ->orderBy('productos.'.$atributo, $orden)
        ->paginate(15);
    return $productos;
}

function getProductoDC($atributo,$orden,$filtro,$valor,$filtro2,$valor2){
    $productos = Producto::from('productos as productos')
        ->join('talla_productos as t',function($join){
            $join->on('productos.id','=','t.id_producto');
        })->select(DB::raw('productos.*, sum(t.stock) as cantidad'))
        ->where('productos.'.$filtro, $valor)
        ->where('productos.'.$filtro2, $valor2)
        ->groupBy('productos.id')
        ->orderBy('productos.'.$atributo, $orden)
        ->paginate(15);
    return $productos;
}

function sortByActive($sort_by){
    return (request()->sort_by == $sort_by) ? 'active' : '';
}

function sortByActiveR($sort_by,$att){
    return ($sort_by == $att) ? 'active' : '';
}

function setActive($route){
    return request()->routeIs($route) ? 'active' : '';
}

function splide($imagenProductos){
    if (sizeof($imagenProductos) == 1){
        return 'false';
    }
    else{
        return 'true';
    }
}

function tActive($loop){
    return ($loop <= 0) ? 'active' : '';
}

function sinStock($stock){
    return ($stock <= 0) ? 'agotado' : '';
}

function ocultarCantidad($cantidad){
    return ($cantidad<=0) ? 'hidden':'';
}

function stock($cantidad){
    return ($cantidad <= 0) ? 'sin-stock' : 'con-stock';
}

function agotado($referencia){
    $sql = "SELECT sum(stock) as cantidad FROM talla_productos WHERE referencia_producto = ? AND deleted_at  is null";
    $selec = DB::select($sql,array($referencia));
    return ($selec[0]->cantidad);
}

function datosM($busqueda){
    // $fechaI = new DateTime($fecha);
    // $fechaI->modify('last day of this month');
    $cont = 0;
    $dias = array();
    $ingresos = array();
    for ($i = 0; $i < 12; $i++)
    {
        if($cont < count($busqueda))
        {
            if(($i+1) == $busqueda[$cont]->dia)
            {
                array_push($dias, $busqueda[$cont]->dia);
                array_push($ingresos, $busqueda[$cont]->total);
                $cont = $cont + 1;
            }
            else
            {
                array_push($dias, ($i+1));
                array_push($ingresos, 0);
            }
        }
        else
        {
            array_push($dias, ($i+1));
            array_push($ingresos, 0);
        }
    }
    return [$dias,$ingresos];
}

function datosD($busqueda,$fecha){
    $cont = 0;
    $dias = array();
    $ingresos = array();
    for ($i = 0; $i < $fecha; $i++)
    {
        if($cont < count($busqueda))
        {
            if(($i+1) == $busqueda[$cont]->dia)
            {
                array_push($dias, $busqueda[$cont]->dia);
                array_push($ingresos, $busqueda[$cont]->total);
                $cont = $cont + 1;
            }
            else
            {
                array_push($dias, ($i+1));
                array_push($ingresos, 0);
            }
        }
        else
        {
            array_push($dias, ($i+1));
            array_push($ingresos, 0);
        }
    }
    return [$dias,$ingresos];
}
