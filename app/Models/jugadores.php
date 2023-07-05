<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugadores extends Model
{
    protected $table= 'jugadores';
    public $timestamps= false;
    public $fillable = ['nombre_jugador','posicion','numero_camiseta','equipo_id'];
}
