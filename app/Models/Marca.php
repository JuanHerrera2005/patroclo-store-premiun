<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';
    protected $primaryKey = 'id_marca'; // Define la clave primaria

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen_url'
    ];

    public $timestamps = false;
}
