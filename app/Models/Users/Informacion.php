<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{
    use HasFactory;
    protected $table        = 'informacions';
    protected $primaryKey   = 'id_informacion';
    protected $fillable     =
    [
        'inf_titulo',
        'inf_descripcion',
        'inf_imagen',
        'user_created_info',
        'user_updated_info',
        'date_created_info',
        'date_updated_info',
        'inf_estado',
    ];
}
