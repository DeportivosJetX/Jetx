<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Talla;
use App\Models\TallaProducto;
use App\Models\DetallePedido;
use App\Models\Pedido;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{

    public function index(){
        comprobarVariablesSesion();
        return view('shoppingCar');
    } 

    public function store(Request $request,Producto $producto){
       $talla = Talla::where('id',$request->id_talla)->firstOrFail();
    //    dd($talla);
        if(!request()->session()->has('carrito')){
           $item = array(array('producto'=>$producto,'talla'=>$request->id_talla,'cantidad'=>intval($request->cantidad),"tallaN"=>$talla->nombre));
            session(['carrito' => $item]);
        }
        else{
            $sesion = session('carrito');
            $rep = false;
            foreach($sesion as $clave => $car){
                if(($car["producto"]->id == $producto->id) && (intval($car["talla"]) == intval($request->id_talla)) ){
                    $sesion[$clave]['cantidad'] += intval($request->cantidad);
                    // $car["cantidad"] =  $car["cantidad"] + intval($request->cantidad);
                    $rep = true;
                } 
            }
            if(!$rep){
                $new_product = array('producto'=>$producto,'talla'=>$request->id_talla,'cantidad'=>intval($request->cantidad),"tallaN"=>$talla->nombre);
                array_push($sesion, $new_product);
            }
            session(['carrito' => $sesion]);
        }
        return back();
    }

    public function confirmo(){
        comprobarVariablesSesion();
        $sesion = session('carrito');
        if(session()->has('carrito') && (count($sesion)>0)){
            return view('irAPagar'); 
        }
        else{
            return back()->with(['error' => 'No tienes nada en el carrito, ¡ve a comprar!']);
        }
       
    }

    public function delete($indice){
        $sesion = session('carrito');
        unset($sesion[$indice]);
        $sesion = array_values($sesion);
        session(['carrito' => $sesion]);
        // dd($sesion);
        return back();
    }

    public function storePedido(Request $request){
        $request->validate([
            'name' => 'required|string|min:3|max:80',
            'city' => 'required|numeric',
            'identification' => 'required|numeric|digits_between:8,10',
            'address' => 'required|string|min:10|max:70',
            'especificacion' => 'required|min:4|max:50',
            'telefono' => 'required|numeric|digits_between:7,12'
        ]);

        $pedido = new Pedido();
        $pedido->destinatario = $request->input('name');
        $pedido->cedula = $request->input('identification');
        $pedido->direccion = $request->input('address');
        $pedido->especificacion = $request->input('especificacion');
        $pedido->telefono = $request->input('telefono');
        $pedido->id_ciudad = $request->input('city');
        $pedido->costo_envio = 0;
        $pedido->estado = 'no enviado';
        $pedido->id_usuario =  Auth::user()->id;

        if($pedido->save()){
            $carrito = Session('carrito');
            foreach($carrito as $car){
                $talla_prod = TallaProducto::where('id_producto',$car['producto']->id)->where('id_talla',$car['talla'])->firstOrFail();
                $detalle = new DetallePedido();
                $detalle->id_pedido = $pedido->id;
                $detalle->id_talla_producto = $talla_prod->id;
                $detalle->cantidad = $car['cantidad'];
                $detalle->precio = $car['producto']->costo;
                if($detalle->save() == FALSE){
                    return back()->with(['error'=>'Error al ingresar un detalle del pedido']);
                }
            }
            session()->forget('carrito');
            return redirect()->route('home')->with(['message'=>'Pedido realizado exitosamente']);
        }
        else{
            return back()->with(['error'=>'El Pedido no se ha podido realizar']);
        }

        
    }
}


