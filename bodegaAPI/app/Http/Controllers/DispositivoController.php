<?php

namespace App\Http\Controllers;

use App\Repositories\DispositivoRepository;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    //
    protected DispositivoRepository $dispositivoRepo;

    public function __construct(DispositivoRepository $dispositivoRepo)
    {
        $this->dispositivoRepo = $dispositivoRepo;
    }

    public function getAll()
    {
        return $this->dispositivoRepo->getAll();
    }

    public function get(Request $request)
    {
        return $this->dispositivoRepo->get($request);
    }

    public function save(Request $request)
    {
        return $this->dispositivoRepo->save($request);
    }

    public function getByBodega(Request $request)
    {
        return $this->dispositivoRepo->getByBodega($request);
    }

    public function getByModelo(Request $request)
    {
        return $this->dispositivoRepo->getByModelo($request);
    }

    public function getByModeloBodega(Request $request)
    {
        return $this->dispositivoRepo->getByModeloBodega($request);
    }
}
