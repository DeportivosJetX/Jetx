<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Deporte;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index()
    {
        comprobarVariablesSesion();
        $title = 'productos';
        $sort_by = request()->sort_by;
        if($sort_by  != null){
            switch ($sort_by) {
                case 'title-ascending':
                    //$productos = Producto::with(['imagenProductos'])->orderBy('nombre', 'asc')->paginate(15);
                    $productos = getProducto('nombre', 'asc');
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'title-descending':
                    //$productos = Producto::with(['imagenProductos'])->orderBy('nombre', 'desc')->paginate(15);
                    $productos = getProducto('nombre', 'desc');
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'price-ascending':
                    //$productos = Producto::with(['imagenProductos'])->orderBy('costo', 'asc')->paginate(15);
                    $productos = getProducto('costo', 'asc');
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'price-descending':
                    //$productos = Producto::with(['imagenProductos'])->orderBy('costo', 'desc')->paginate(15);
                    $productos = getProducto('costo', 'desc');
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'created-descending':
                    //$productos = Producto::with(['imagenProductos'])->orderBy('created_at', 'desc')->paginate(15);
                    $productos = getProducto('created_at', 'desc');
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'created-ascending':
                    //$productos = Producto::with(['imagenProductos'])->orderBy('created_at', 'asc')->paginate(15);
                    $productos = getProducto('created_at', 'asc');
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'best-selling':
                    //$productos = Producto::with(['imagenProductos'])->orderBy('created_at', 'desc')->paginate(15);
                    $productos = getProducto('nombre', 'asc');
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
            }
        }
        else{
            //$productos = Producto::with(['imagenProductos'])->orderBy('nombre', 'asc')->paginate(15);
            $productos = getProducto('nombre', 'asc');
            return view('productos',compact(['productos','title']));
        }
    }

    public function indexCategoria(Categoria $categoria){
        comprobarVariablesSesion();
        $title = $categoria->nombre;
        $sort_by = request()->sort_by;
        if($sort_by  != null){
            switch ($sort_by) {
                case 'title-ascending':
                    $productos = getProductoC('nombre', 'asc','id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'title-descending':
                    $productos = getProductoC('nombre', 'desc','id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'price-ascending':
                    $productos = getProductoC('costo', 'asc','id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'price-descending':
                    $productos = getProductoC('costo', 'desc','id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'created-descending':
                    $productos = getProductoC('created_at', 'desc','id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'created-ascending':
                    $productos = getProductoC('created_at', 'asc','id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'best-selling':
                    $productos = getProductoC('nombre', 'asc','id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
            }
        }
        else{
            $productos = getProductoC('nombre', 'asc','id_categoria',$categoria->id);
            return view('productos',compact(['productos','title']));
        }
    }

    public function indexDeporte(Deporte $deporte){
        comprobarVariablesSesion();
        $title = $deporte->nombre;
        $sort_by = request()->sort_by;
        if($sort_by  != null){
            switch ($sort_by) {
                case 'title-ascending':
                    $productos = getProductoC('nombre', 'asc','id_deporte',$deporte->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'title-descending':
                    $productos = getProductoC('nombre', 'desc','id_deporte',$deporte->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'price-ascending':
                    $productos = getProductoC('costo', 'asc','id_deporte',$deporte->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'price-descending':
                    $productos = getProductoC('costo', 'desc','id_deporte',$deporte->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'created-descending':
                    $productos = getProductoC('created_at', 'desc','id_deporte',$deporte->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'created-ascending':
                    $productos = getProductoC('created_at', 'asc','id_deporte',$deporte->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'best-selling':
                    $productos = getProductoC('nombre', 'asc','id_deporte',$deporte->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
            }
        }
        else{
            $productos = getProductoC('nombre', 'asc','id_deporte',$deporte->id);
            return view('productos',compact(['productos','title']));
        }
    }

    public function indexDeporteCategoria(Deporte $deporte,Categoria $categoria){
        comprobarVariablesSesion();
        $title = $deporte->nombre." - ".$categoria->nombre;
        $sort_by = request()->sort_by;
        if($sort_by  != null){
            switch ($sort_by) {
                case 'title-ascending':
                    $productos = getProductoDC('nombre', 'asc','id_deporte',$deporte->id,'id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'title-descending':
                    $productos = getProductoDC('nombre', 'desc','id_deporte',$deporte->id,'id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'price-ascending':
                    $productos = getProductoDC('costo', 'asc','id_deporte',$deporte->id,'id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'price-descending':
                    $productos = getProductoDC('costo', 'desc','id_deporte',$deporte->id,'id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'created-descending':
                    $productos = getProductoDC('created_at', 'desc','id_deporte',$deporte->id,'id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'created-ascending':
                    $productos = getProductoDC('created_at', 'asc','id_deporte',$deporte->id,'id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'best-selling':
                    $productos = getProductoDC('nombre', 'asc','id_deporte',$deporte->id,'id_categoria',$categoria->id);
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
            }
        }
        else{
            $productos = getProductoDC('nombre', 'asc','id_deporte',$deporte->id,'id_categoria',$categoria->id);
            return view('productos',compact(['productos','title']));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $productos)
    {
        comprobarVariablesSesion();
        $productos = Producto::from('productos as productos')
        ->join('talla_productos as t',function($join){
            $join->on('productos.id','=','t.id_producto');
        })->select(DB::raw('productos.*, sum(t.stock) as cantidad'))
        ->where('productos.id',$productos->id)
        ->groupBy('productos.id')
        ->first();
        return view('detalleProducto',compact(['productos']));
    }
}
