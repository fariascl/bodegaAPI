<?php

namespace App\Repositories;

use App\Models\Bodega;
use Illuminate\Http\Response;

class BodegaRepository
{
    public function getAll()
    {
        $bodegas = Bodega::all();
        return response()->json(['bodegas' => $bodegas], Response::HTTP_OK);
    }

    public function get($request)
    {
        $bodega = Bodega::where('id', $request->id);
        return response()->json(['bodega' => $bodega], Response::HTTP_OK);
    }

    public function save($request)
    {
        $bodega = Bodega::create([
            "nombre" => $request->nombre
        ]);
        return response()->json(["status_code" => 201, "bodega" => $bodega]);
    }
}
