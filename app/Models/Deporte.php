<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deporte extends Model
{
    use SoftDeletes;
    protected $table = 'deportes';
    protected $primaryKey = 'id';
    use HasFactory;

    public function productos(){
        return $this->hasMany('App\Models\Producto','id_deporte');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
