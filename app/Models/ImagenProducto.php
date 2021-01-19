<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenProducto extends Model
{
    protected $table = 'imagen_productos';
    protected $primaryKey = 'id';
    use HasFactory;

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto','id_produto ');
    }
}
