<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;
    protected $table = 'productos';
    protected $fillable = [
        'id',
        'nombre',
        'precio',
        'descripcion',
        'imagen',
        'created_at',
        'updated_at',
        'delete_at',
    ];
}
