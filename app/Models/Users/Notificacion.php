<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;
    protected $table = 'notificacions';
    protected $primaryKey = 'id_notification';
    protected $fillable =
    [
        'type',
        'data',
        'status',
        'read_at',
    ];
}
