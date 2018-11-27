<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'activo',
        'direccion', 
        'nombre',
        'telefono', 
    ];

}
