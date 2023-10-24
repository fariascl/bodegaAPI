<?php

namespace App\Repositories;

use App\Models\Modelo;
use Illuminate\Http\Response;

class ModeloRepository
{
    public function getAll()
    {
        $modelos = Modelo::all();
        return response()->json(['modelos' => $modelos], Response::HTTP_OK);
    }

    public function getByMarca($request)
    {
        $modelos = Modelo::with('marca')->where('marca_id', $request->id)->get();
        return response()->json(['modelos' => $modelos], Response::HTTP_OK);
    }

    public function get($request)
    {
        $modelo = Modelo::where('id', $request->id);
        return response()->json(['modelo' => $modelo], Response::HTTP_OK);
    }

    public function save($request)
    {
        $modelo = Modelo::create([
            "nombre" => $request->nombre,
            "marca_id" => $request->marca_id
        ]);
        return response()->json(["status_code" => 201, "modelo" => $modelo]);
    }
}
