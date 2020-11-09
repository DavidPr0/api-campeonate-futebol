<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    // use HasFactory;
    protected $fillable = [
        'hora_inicio',
        'hora_termino',
        'placar_casa',
        'placar_fora',
        'id_time_fora',
        'id_time_casa',
        'id_artilheiro',
        'quantidade_gol_artilheiro',
        'quantidade_gol_partida'
    ];
}
