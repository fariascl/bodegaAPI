<?php

namespace App\Http\Controllers;

use App\Repositories\ModeloRepository;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    //
    protected ModeloRepository $modeloRepo;

    public function __construct(ModeloRepository $modeloRepo)
    {
        $this->modeloRepo = $modeloRepo;
    }

    public function getAll()
    {
        return $this->modeloRepo->getAll();
    }

    public function get(Request $request)
    {
        return $this->modeloRepo->get($request);
    }

    public function save(Request $request)
    {
        return $this->modeloRepo->save($request);
    }

    public function getByMarca(Request $request)
    {
        return $this->modeloRepo->getByMarca($request);
    }
}
