<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class DetallePedido extends Pivot
{
    protected $table = 'detalle_pedidos';
    protected $primaryKey = 'id';
    public $incrementing = true;
    use HasFactory;
}
