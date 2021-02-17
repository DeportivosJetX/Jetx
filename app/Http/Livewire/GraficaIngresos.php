<?php

namespace App\Http\Livewire;

use App\Models\DetallePedido;
use App\Models\Pedido;
use DateTime;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class GraficaIngresos extends Component
{
    public $usuario;
    public $orderBy;
    public $ordenar = 'Generar por';
    public $filtro;
    public $filtros;
    public $fecha = '';

    public function render()
    {
        $busqueda = [];
        if($this->orderBy == "Diariamente")
        {
            if($this->filtro == "")
            {
                $fechaI = new DateTime();
                $fechaO = new DateTime();
            }
            else
            {
                $fechaI = new DateTime($this->filtro.'-20');
                $fechaO = new DateTime($this->filtro.'-20');
            }
            $fechaI->modify('first day of this month');
            $fechaO->modify('last day of this month');
            $busqueda = Pedido::from('pedidos as pedidos')
            ->join('detalle_pedidos as d',function($join){
                $join->on('pedidos.id','=','d.id_pedido');
            })->join('talla_productos as tp',function($join){
                $join->on('tp.id','=','d.id_talla_producto');
            })->join('productos as pr',function($join){
                $join->on('pr.id','=','tp.id_producto');
            })->select(DB::raw("DAY(pedidos.created_at) as dia, SUM(d.precio * d.cantidad) as total"))
            ->where('pr.id_usuario',$this->usuario)
            ->whereBetween('pedidos.created_at', [$fechaI->format('Y-m-d').' 00:00:00', $fechaO->format('Y-m-d').' 23:59:59'])
            ->groupBy('dia')
            ->orderBy('dia')
            ->get();
        }
        else if($this->orderBy == "Mensualmente")
        {
            if($this->filtro == "")
            {
                $fechaI = new DateTime();
                $fechaO = new DateTime();
            }
            else
            {
                $fechaI = new DateTime($this->filtro.'-01-20');
                $fechaO = new DateTime($this->filtro.'-01-20');
            }
            $fechaI->modify('first day of this month');
            $fechaO->modify('last day of this month');
            $busqueda = DetallePedido::from('detalle_pedidos as detalle_pedidos')
            ->join('talla_productos as tp',function($join){
                $join->on('tp.id','=','detalle_pedidos.id_talla_producto');
            })->join('productos as pr',function($join){
                $join->on('pr.id','=','tp.id_producto');
            })->select(DB::raw("MONTH(detalle_pedidos.created_at) as dia, SUM(detalle_pedidos.precio * detalle_pedidos.cantidad) as total"))
            ->where('pr.id_usuario',$this->usuario)
            ->whereBetween('detalle_pedidos.created_at', [$fechaI->format('Y').'-01-01 00:00:00', $fechaO->format('Y').'-12-31 23:59:59'])
            ->groupBy('dia')
            ->orderBy('dia')
            ->get();
        }
        $this->fecha = $fechaO->format('d');
        return view('livewire.grafica-ingresos',compact('busqueda'));
    }


}
