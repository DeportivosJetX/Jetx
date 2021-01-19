<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciudad extends Model
{
    use SoftDeletes;
    protected $table = 'ciudades';
    protected $primaryKey = 'id';
    use HasFactory;

    public function departamento(){
        return $this->belongsTo('App\Models\Departamento','id_departamento');
    }

    public function productos(){
        return $this->hasMany('App\Models\Producto','id_ciudad');
    }

    public function pedidos(){
        return $this->hasMany('App\Models\Pedidos','id_ciudad');
    }

    public function users(){
        return $this->hasMany('App\Models\Users','id_ciudad');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
