<?php

namespace App\Http\Controllers;

use App\Repositories\MarcaRepository;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    //
    protected MarcaRepository $marcaRepo;

    public function __construct(MarcaRepository $marcaRepo)
    {
        $this->marcaRepo = $marcaRepo;
    }

    public function getAll()
    {
        return $this->marcaRepo->getAll();
    }

    public function get(Request $request)
    {
        return $this->marcaRepo->get($request);
    }

    public function save(Request $request)
    {
        return $this->marcaRepo->save($request);
    }
}
