<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class TallaProducto extends Pivot
{
    use SoftDeletes;
    protected $table = 'talla_productos';
    protected $primaryKey = 'id';
    public $incrementing = true;
    use HasFactory;

    public function pedidos(){
        return $this->belongsToMany('App\Models\Pedido','detalle_pedidos','id_talla_producto ','id_pedido ')
                    ->using('App\Models\DetallePedido')
                    ->as('detallePedido')
                    ->withPivot('cantidad','precio')
                    ->withTimestamps();
    }
}
