<?php

namespace App\Http\Controllers;

use App\Repositories\BodegaRepository;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    //
    protected BodegaRepository $bodegaRepo;

    public function __construct(BodegaRepository $bodegaRepo)
    {
        $this->bodegaRepo = $bodegaRepo;
    }

    public function getAll()
    {
        return $this->bodegaRepo->getAll();
    }

    public function get(Request $request)
    {
        return $this->bodegaRepo->get($request);
    }

    public function save(Request $request)
    {
        return $this->bodegaRepo->save($request);
    }
}
