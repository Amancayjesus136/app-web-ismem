<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    use HasFactory;
    protected $table        = 'consultas';
    protected $primaryKey   = 'id_consulta';
    protected $fillable     =
    [
        'con_carrera',
        'con_numero_dni',
        'con_ciudad',
        'con_nombres',
        'con_apellidos',
        'con_celular',
        'con_genero',
        'con_correo',
        'con_mensaje',
        'con_estado',
    ];
}
