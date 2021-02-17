<?php

namespace App\Http\Livewire;

use App\Models\DetallePedido;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RotacionProductos extends Component
{
    public $usuario;
    public $orderBy = 'desc';
    public $ordenar = 'Ordenar por';
    public $fechaInicio = '';
    public $fechaFin = '';

    public function render()
    {
        $busqueda = [];
        if($this->fechaInicio == '' && $this->fechaFin == ''){
            $busqueda = DetallePedido::from('detalle_pedidos as detalle_pedidos')
            ->join('talla_productos as tp',function($join){
                $join->on('tp.id','=','detalle_pedidos.id_talla_producto');
            })->join('tallas as t',function($join){
                $join->on('t.id','=','tp.id_talla');
            })->join('productos as p',function($join){
                $join->on('p.id','=','tp.id_producto');
            })->join('imagen_productos as i',function($join){
                $join->on('i.id_producto','=','p.id');
            })->select(DB::raw('detalle_pedidos.id_talla_producto as talla_prod,p.referencia as referencia, i.nombre_imagen as imagen,p.nombre as producto, t.nombre as talla, sum(detalle_pedidos.cantidad)as cantidad'))
            ->where('i.prioridad',1)
            ->where('p.id_usuario',$this->usuario)
            // ->whereBetween('detalle_pedidos.created_at', [$this->fechaInicio.' 00:00:00', $this->fechaFin.' 23:59:59'])
            ->groupBy('detalle_pedidos.id_talla_producto')
            ->groupBy('p.referencia')
            ->groupBy('i.nombre_imagen')
            ->groupBy('p.nombre')
            ->groupBy('t.nombre')
            ->orderBy('cantidad',$this->orderBy)
            ->get();
        }
        if($this->fechaInicio == '' && $this->fechaFin != ''){
            $busqueda = DetallePedido::from('detalle_pedidos as detalle_pedidos')
            ->join('talla_productos as tp',function($join){
                $join->on('tp.id','=','detalle_pedidos.id_talla_producto');
            })->join('tallas as t',function($join){
                $join->on('t.id','=','tp.id_talla');
            })->join('productos as p',function($join){
                $join->on('p.id','=','tp.id_producto');
            })->join('imagen_productos as i',function($join){
                $join->on('i.id_producto','=','p.id');
            })->select(DB::raw('detalle_pedidos.id_talla_producto as talla_prod,p.referencia as referencia, i.nombre_imagen as imagen,p.nombre as producto, t.nombre as talla, sum(detalle_pedidos.cantidad)as cantidad'))
            ->where('i.prioridad',1)
            ->where('p.id_usuario',$this->usuario)
            // ->whereBetween('detalle_pedidos.created_at', [$this->fechaInicio.' 00:00:00', $this->fechaFin.' 23:59:59'])
            ->where('detalle_pedidos.created_at', '<=' , $this->fechaFin.' 23:59:59')
            ->groupBy('detalle_pedidos.id_talla_producto')
            ->groupBy('p.referencia')
            ->groupBy('i.nombre_imagen')
            ->groupBy('p.nombre')
            ->groupBy('t.nombre')
            ->orderBy('cantidad',$this->orderBy)
            ->get();
        }

        if($this->fechaInicio != '' && $this->fechaFin == ''){
            $busqueda = DetallePedido::from('detalle_pedidos as detalle_pedidos')
            ->join('talla_productos as tp',function($join){
                $join->on('tp.id','=','detalle_pedidos.id_talla_producto');
            })->join('tallas as t',function($join){
                $join->on('t.id','=','tp.id_talla');
            })->join('productos as p',function($join){
                $join->on('p.id','=','tp.id_producto');
            })->join('imagen_productos as i',function($join){
                $join->on('i.id_producto','=','p.id');
            })->select(DB::raw('detalle_pedidos.id_talla_producto as talla_prod,p.referencia as referencia, i.nombre_imagen as imagen,p.nombre as producto, t.nombre as talla, sum(detalle_pedidos.cantidad)as cantidad'))
            ->where('i.prioridad',1)
            ->where('p.id_usuario',$this->usuario)
            // ->whereBetween('detalle_pedidos.created_at', [$this->fechaInicio.' 00:00:00', $this->fechaFin.' 23:59:59'])
            ->where('detalle_pedidos.created_at', '>=' , $this->fechaInicio.' 00:00:00')
            ->groupBy('detalle_pedidos.id_talla_producto')
            ->groupBy('p.referencia')
            ->groupBy('i.nombre_imagen')
            ->groupBy('p.nombre')
            ->groupBy('t.nombre')
            ->orderBy('cantidad',$this->orderBy)
            ->get();
        }

        if($this->fechaInicio != '' && $this->fechaFin != ''){
            $busqueda = DetallePedido::from('detalle_pedidos as detalle_pedidos')
            ->join('talla_productos as tp',function($join){
                $join->on('tp.id','=','detalle_pedidos.id_talla_producto');
            })->join('tallas as t',function($join){
                $join->on('t.id','=','tp.id_talla');
            })->join('productos as p',function($join){
                $join->on('p.id','=','tp.id_producto');
            })->join('imagen_productos as i',function($join){
                $join->on('i.id_producto','=','p.id');
            })->select(DB::raw('detalle_pedidos.id_talla_producto as talla_prod,p.referencia as referencia, i.nombre_imagen as imagen,p.nombre as producto, t.nombre as talla, sum(detalle_pedidos.cantidad)as cantidad'))
            ->where('i.prioridad',1)
            ->where('p.id_usuario',$this->usuario)
            ->whereBetween('detalle_pedidos.created_at', [$this->fechaInicio.' 00:00:00', $this->fechaFin.' 23:59:59'])
            ->groupBy('detalle_pedidos.id_talla_producto')
            ->groupBy('p.referencia')
            ->groupBy('i.nombre_imagen')
            ->groupBy('p.nombre')
            ->groupBy('t.nombre')
            ->orderBy('cantidad',$this->orderBy)
            ->get();
        }

        return view('livewire.rotacion-productos',compact('busqueda'));
    }

    public function orderDesc(){
        $this->orderBy = 'desc';
        $this->ordenar = 'Más vendidos';
    }

    public function orderAsc(){
        $this->orderBy = 'asc';
        $this->ordenar = 'Menos vendidos';
    }
}
