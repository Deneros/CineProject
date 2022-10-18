<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $table = 'peliculas';

    protected $fillable= [
        'nombre_pelicula',
        'descripcion',
        'genero',
        'precio',
        'sala',
        'tipo',
        'fecha',
        'poster'
    ];

    // protected $timestamps = false;
    public $timestamps  = false;
}
