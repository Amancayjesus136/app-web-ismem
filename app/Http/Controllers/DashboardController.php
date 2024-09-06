<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use App\Models\Users\Consultas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalConsultas = Consultas::count();
        $notificaciones = Notificacion::orderBy('created_at', 'desc')->get();
        $totalNotificaciones = Notificacion::count();
        return view('dashboard', compact('totalConsultas', 'notificaciones', 'totalNotificaciones'));
    }
}
