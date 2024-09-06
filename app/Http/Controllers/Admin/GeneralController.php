<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users\Consultas;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function consultas_list(Request $request)
{
    $query = Consultas::query();

    if ($search = $request->input('search')) {
        $query->where(function($q) use ($search) {
            $q->where('con_carrera', 'like', "%{$search}%")
              ->orWhere('con_numero_dni', 'like', "%{$search}%")
              ->orWhere('con_ciudad', 'like', "%{$search}%")
              ->orWhere('con_nombres', 'like', "%{$search}%")
              ->orWhere('con_apellidos', 'like', "%{$search}%")
              ->orWhere('con_celular', 'like', "%{$search}%")
              ->orWhere('con_genero', 'like', "%{$search}%")
              ->orWhere('con_correo', 'like', "%{$search}%")
              ->orWhere('con_mensaje', 'like', "%{$search}%")
              ->orWhere('con_estado', 'like', "%{$search}%");
        });
    }

    if ($status = $request->input('status')) {
        switch ($status) {
            case 'Proceso':
                $query->where('con_estado', 1);
                break;
            case 'Leido':
                $query->where('con_estado', 0);
                break;
            default:
                break;
        }
    }

    if ($filter = $request->input('filter')) {
        $now = \Carbon\Carbon::now();
        switch ($filter) {
            case 'Hoy':
                $query->whereDate('created_at', $now->format('Y-m-d'));
                break;
            case 'Ayer':
                $query->whereDate('created_at', $now->subDay()->format('Y-m-d'));
                break;
            case 'Últimos 7 días':
                $query->whereBetween('created_at', [$now->subDays(7), \Carbon\Carbon::now()]);
                break;
            case 'Últimos 30 días':
                $query->whereBetween('created_at', [$now->subDays(30), \Carbon\Carbon::now()]);
                break;
            case 'Este mes':
                $query->whereMonth('created_at', $now->month);
                break;
            case 'El año pasado':
                $query->whereYear('created_at', $now->subYear()->year);
                break;
            default:
                break;
        }
    }

    $consultas = $query->orderBy('created_at', 'desc')->get();

    return view('admin.client.consultas.principal-consulta', compact('consultas'));
}
}
