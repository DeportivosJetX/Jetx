<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    use HasFactory;

    public function ciudad(){
        return $this->belongsTo('App\Models\Ciudad','id_ciudad');
    }

    public function tallaProductos(){
        return $this->belongsToMany('App\Models\TallaProducto','detalle_pedidos','id_pedido','id_talla_producto')
                    ->using('App\Models\DetallePedido')
                    ->as('detallePedido')
                    ->withPivot('cantidad','precio')
                    ->withTimestamps();
    }

    public function usuario(){
        return $this->belongsTo('App\Models\User','id_usuario');
    }

}
