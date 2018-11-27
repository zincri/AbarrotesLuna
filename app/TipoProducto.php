<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'activo',
        'descripcion', 
        'nombre',
    ];

}
