<?php

namespace App\Repositories;

use App\Models\Dispositivo;
use Illuminate\Http\Response;

class DispositivoRepository
{
    public function getAll()
    {
        $dispositivos = Dispositivo::all();
        return response()->json(['dispositivos' => $dispositivos], Response::HTTP_OK);
    }

    public function get($request)
    {
        $dispositivo = Dispositivo::where('id', $request->id)->first();
        return response()->json(['dispositivo' => $dispositivo], Response::HTTP_OK);
    }

    public function getByBodega($request)
    {
        $dispositivos = Dispositivo::with('bodega')->where('bodega_id', $request->id)->get();
        return response()->json(['dispositivos' => $dispositivos], Response::HTTP_OK);
    }

    public function getByMarca($request)
    {
        $dispositivos = Dispositivo::with('marca')->where('marca_id', $request->id)->get();
        return response()->json(['dispositivos' => $dispositivos], Response::HTTP_OK);
    }

    public function getByModelo($request)
    {
        $dispositivos = Dispositivo::with('modelo')->where('modelo_id', $request->id)->get();
        return response()->json(['dispositivos' => $dispositivos], Response::HTTP_OK);
    }

    public function getByModeloBodega($request)
    {
        $dispositivos = Dispositivo::with('modelo.marca')->with('bodega')
            ->where('modelo_id', $request->modelo_id)
            ->where('bodega_id', $request->bodega_id)
            ->get();
        return response()->json(['dispositivos' => $dispositivos], Response::HTTP_OK);
    }
    public function save($request)
    {
        $dispositivo = Dispositivo::create([
            "nombre" => $request->nombre,
            "modelo_id" => $request->modelo_id,
            "bodega_id" => $request->bodega_id
        ]);
        return response()->json(["status_code" => 201, "dispositivo" => $dispositivo]);
    }
}
