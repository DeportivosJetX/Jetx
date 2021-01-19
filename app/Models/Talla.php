<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Talla extends Model
{
    use SoftDeletes;
    protected $table = 'tallas';
    protected $primaryKey = 'id';
    use HasFactory;

    public function productos(){
        return $this->belongsToMany('App\Models\Producto','talla_productos','id_talla','id_produto')
                    ->using('App\Models\TallaProducto')
                    ->as('tallaProducto')
                    ->withPivot('stock','estado')
                    ->withTimestamps();
                    // ->withTimestamps();
                    // ->using('App\Models\TallaProducto')
    }
}
