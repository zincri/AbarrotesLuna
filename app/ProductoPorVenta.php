<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoPorVenta extends Model
{
    //
    protected $primaryKey = 'id';
    protected $fillable = [
        'activo',
        'producto',
        'venta',
    ];
}
