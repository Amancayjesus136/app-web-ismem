<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users\Consultas;
use App\Models\Users\Informacion;
use App\Models\Users\Notificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class GeneralController extends Controller
{
    public function createSymlink(): JsonResponse
    {
        if (file_exists(public_path('storage'))) {
            File::delete(public_path('storage'));
        }

        Artisan::call('storage:link');

        return response()->json(['message' => 'Symlink created successfully.']);
    }

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

    public function panel_control()
    {
        $informaciones = Informacion::all();
        return view('admin.client.panel.principal-panel', compact('informaciones'));
    }

    public function info_store(Request $request)
    {
        $data = $request->all();
        $data['inf_estado'] = $data['inf_estado'] ?? 1;

        $data['user_created_info'] = Auth::user()->name;
        $data['user_updated_info'] = Auth::user()->name;
        $data['date_created_info'] = now();
        $data['date_updated_info'] = now();

        $informacion = Informacion::create($data);

        if ($request->hasFile('inf_imagen')) {
            $file = $request->file('inf_imagen');

            $request->validate([
                'inf_imagen' => 'required|image|max:2048'
            ]);

            $imagenPath = $file->store('public/imagenes');
            $fileName = basename($imagenPath);

            $relativeUrl = 'storage/imagenes/' . $fileName;

            $informacion->inf_imagen = $relativeUrl;
            $informacion->save();
        }

        if ($informacion) {
            return redirect()->back()->with('success', 'Información creada exitosamente');
        } else {
            return redirect()->back()->with('error', 'Hubo un error al crear la categoría');
        }
    }

    public function info_update(Request $request, $id_informacion)
    {
        $informacion = Informacion::findOrFail($id_informacion);

        $request->validate([
            'inf_imagen' => 'nullable|image|max:2048',
            'inf_estado' => 'nullable|integer',
        ]);

        $data = $request->except('inf_imagen');
        $data['user_updated_info'] = Auth::user()->name;
        $data['date_updated_info'] = now();

        $informacion->update($data);

        if ($request->hasFile('inf_imagen')) {
            $file = $request->file('inf_imagen');

            $imagenPath = $file->store('public/imagenes');
            $fileName = basename($imagenPath);

            $relativeUrl = 'storage/imagenes/' . $fileName;
            $informacion->inf_imagen = $relativeUrl;
        }

        $informacion->save();

        return redirect()->back()->with('success', 'Información actualizada exitosamente');
    }


}
