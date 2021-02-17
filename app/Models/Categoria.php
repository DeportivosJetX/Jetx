<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;
    protected $table = 'categorias';
    protected $primaryKey = 'id';
    use HasFactory;

    public function productos(){
        return $this->hasMany('App\Models\Producto','id_categoria');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
