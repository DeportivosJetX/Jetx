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
                    //$productos = Producto::with(['imagenProductos'])->orderBy('precio', 'asc')->paginate(15);
                    $productos = getProducto('precio', 'asc');
                    return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
                    break;
                case 'price-descending':
                    //$productos = Producto::with(['imagenProductos'])->orderBy('precio', 'desc')->paginate(15);
                    $productos = getProducto('precio', 'desc');
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

    // public function getMoreProducts(Request $request)
    // {
    //     if($request->ajax()){
    //         $productos = Producto::with(['imagenProductos'])->paginate(15);
    //         return view('productData',compact('productos'))->render();
    //     }
    //     $productos = Producto::with(['imagenProductos'])->paginate(15);
    //         return view('productData',compact('productos'))->render();
    // }

    // public function indexCategoria(Categoria $categoria){
    //     comprobarVariablesSesion();
    //     $title = $categoria->nombre;
    //     $sort_by = request()->sort_by;
    //     if($sort_by  != null){
    //         switch ($sort_by) {
    //             case 'title-ascending':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_categoria',$categoria->id)->orderBy('nombre', 'asc')->paginate(15);
    //                 $productos = getProductoC('nombre', 'asc','id_categoria',$categoria->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //             case 'title-descending':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_categoria',$categoria->id)->orderBy('nombre', 'desc')->paginate(15);
    //                 $productos = getProductoC('nombre', 'desc','id_categoria',$categoria->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //             case 'price-ascending':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_categoria',$categoria->id)->orderBy('precio', 'asc')->paginate(15);
    //                 $productos = getProductoC('precio', 'asc','id_categoria',$categoria->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //             case 'price-descending':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_categoria',$categoria->id)->orderBy('precio', 'desc')->paginate(15);
    //                 $productos = getProductoC('precio', 'desc','id_categoria',$categoria->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //             case 'created-descending':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_categoria',$categoria->id)->orderBy('precio', 'desc')->paginate(15);
    //                 $productos = getProductoC('created_at', 'desc','id_categoria',$categoria->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //             case 'created-ascending':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_categoria',$categoria->id)->orderBy('created_at', 'asc')->paginate(15);
    //                 $productos = getProductoC('created_at', 'asc','id_categoria',$categoria->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //             case 'best-selling':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_categoria',$categoria->id)->orderBy('created_at', 'desc')->paginate(15);
    //                 $productos = getProductoC('nombre', 'asc','id_categoria',$categoria->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //         }
    //     }
    //     else{
    //         //$productos = Producto::with(['imagenProductos'])->where('id_categoria',$categoria->id)->orderBy('nombre', 'asc')->paginate(15);
    //         $productos = getProductoC('nombre', 'asc','id_categoria',$categoria->id);
    //         return view('productos',compact(['productos','title']));
    //     }
    // }

    // public function indexCategoria(Categoria $categoria){
    //     comprobarVariablesSesion();
    //     $title = $categoria->nombre;
    //     $sort_by = request()->sort_by;
    //     if($sort_by  != null){
    //         switch ($sort_by) {
    //             case 'title-ascending':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_coleccion',$coleccion->id)->orderBy('nombre', 'asc')->paginate(15);
    //                 $productos = getProductoC('nombre', 'asc','id_coleccion',$coleccion->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //             case 'title-descending':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_coleccion',$coleccion->id)->orderBy('nombre', 'desc')->paginate(15);
    //                 $productos = getProductoC('nombre', 'desc','id_coleccion',$coleccion->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //             case 'price-ascending':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_coleccion',$coleccion->id)->orderBy('precio', 'asc')->paginate(15);
    //                 $productos = getProductoC('precio', 'asc','id_coleccion',$coleccion->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //             case 'price-descending':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_coleccion',$coleccion->id)->orderBy('precio', 'desc')->paginate(15);
    //                 $productos = getProductoC('precio', 'desc','id_coleccion',$coleccion->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //             case 'created-descending':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_coleccion',$coleccion->id)->orderBy('precio', 'desc')->paginate(15);
    //                 $productos = getProductoC('created_at', 'desc','id_coleccion',$coleccion->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //             case 'created-ascending':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_coleccion',$coleccion->id)->orderBy('created_at', 'asc')->paginate(15);
    //                 $productos = getProductoC('created_at', 'asc','id_coleccion',$coleccion->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //             case 'best-selling':
    //                 //$productos = Producto::with(['imagenProductos'])->where('id_coleccion',$coleccion->id)->orderBy('created_at', 'desc')->paginate(15);
    //                 $productos = getProductoC('nombre', 'asc','id_coleccion',$coleccion->id);
    //                 return view('productos',compact(['productos','title']))->with(['sort_by' => $sort_by]);
    //                 break;
    //         }
    //     }
    //     else{
    //         //$productos = Producto::with(['imagenProductos'])->where('id_coleccion',$coleccion->id)->orderBy('nombre', 'asc')->paginate(15);
    //         $productos = getProductoC('nombre', 'asc','id_coleccion',$coleccion->id);
    //         return view('productos',compact(['productos','title']));
    //     }
    // }
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
