<?php

namespace App\Repositories;

use App\Models\Marca;
use Illuminate\Http\Response;

class MarcaRepository
{
    public function getAll()
    {
        $marcas = Marca::all();
        return response()->json(['marcas' => $marcas], Response::HTTP_OK);
    }

    public function get($request)
    {
        $marca = Marca::where('id', $request->id);
        return response()->json(['marca' => $marca], Response::HTTP_OK);
    }

    public function save($request)
    {
        $marca = Marca::create([
            "nombre" => $request->nombre
        ]);
        return response()->json(["status_code" => 201, "marca" => $marca]);
    }
}
