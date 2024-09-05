<?php

namespace App\Http\Controllers;

use App\Models\Users\Consultas;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('client.welcome');
    }

    public function welcome_talleres()
    {
        return view('client.talleres');
    }

    public function store_consulta(Request $request)
    {
        $data = $request->all();
        $data['con_estado'] = 1;

        try {
            $consulta = Consultas::create($data);

            if ($consulta) {
                return response()->json([
                    'success' => true,
                    'message' => 'Consulta enviado correctamente'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Hubo un problema al enviar la consulta'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Hubo un error en el servidor: ' . $e->getMessage()
            ]);
        }
    }

    public function consultarDni(Request $request)
    {
        $dni = $request->input('dni');
        $data = null;

        if ($dni) {
            $token = 'apis-token-10265.fVWwqmyMOHc9DLVx8y143PGSACEGE40M';

            $client = new Client([
                'base_uri' => 'https://api.apis.net.pe',
                'verify' => false,
            ]);

            $parameters = [
                'http_errors' => false,
                'connect_timeout' => 5,
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Referer' => 'https://apis.net.pe/api-consulta-ruc',
                    'User-Agent' => 'laravel/guzzle',
                    'Accept' => 'application/json',
                ],
                'query' => ['numero' => $dni],
            ];

            try {
                $res = $client->request('GET', '/v2/dni', $parameters);
                $data = json_decode($res->getBody()->getContents(), true);

                Log::info('API Response:', ['response' => $data]);

                if ($res->getStatusCode() === 200) {
                    return response()->json(['success' => true, 'data' => $data]);
                } else {
                    return response()->json(['success' => false, 'message' => 'Error en la consulta'], $res->getStatusCode());
                }
            } catch (\Exception $e) {
                Log::error('Excepción en la solicitud API', ['message' => $e->getMessage()]);
                return response()->json(['success' => false, 'message' => 'Error al hacer la solicitud'], 500);
            }
        }

        return response()->json(['success' => false, 'message' => 'DNI no proporcionado'], 400);
    }

}
