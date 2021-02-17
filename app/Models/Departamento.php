<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';
    protected $primaryKey = 'id';
    use HasFactory;

    public function ciudades()
    {
        return $this->hasMany('App\Models\Ciudad','id_departamento');
    }
}
