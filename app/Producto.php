<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'activo',
        'costo', 
        'descripcion',
        'existencia', 
        'fecha_caducidad',
        'imagen', 
        'nombre',
        'precio', 
        'proveedor',
        'tipo_producto', 
    ];

}
