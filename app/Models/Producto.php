<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;
    protected $table = 'productos';
    protected $primaryKey = 'id';
    use HasFactory;

    public function imagenProductos(){
        return $this->hasMany('App\Models\ImagenProducto','id_produto')
                    ->orderBy('prioridad','asc');
    }

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria','id_categoria');
    }

    public function deporte(){
        return $this->belongsTo('App\Models\Deporte','id_deporte');
    }

    public function usuario(){
        return $this->belongsTo('App\Models\User','id_usuario');
    }

    public function ciudad(){
        return $this->belongsTo('App\Models\Ciudad','id_ciudad');
    }

    public function tallas(){
        return $this->belongsToMany('App\Models\Talla','talla_productos','id_produto','id_talla')
                    ->using('App\Models\TallaProducto')
                    ->as('tallaProducto')
                    ->withPivot('stock','estado')
                    ->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
