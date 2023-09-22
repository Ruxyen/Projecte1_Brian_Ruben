<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = ['nom_producto', 'descripcion', 'precio', 'categoria', 'talla'];

 
}
