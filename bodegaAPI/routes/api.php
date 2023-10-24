<?php

use App\Http\Controllers\BodegaController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/bodegas')->group(function () use ($router) {
    $router->get('/all', [BodegaController::class, 'getAll']);
    $router->get('/get/{id}', [BodegaController::class, 'get']);
    $router->post('/save', [BodegaController::class, 'save']);
});

Route::prefix('/dispositivos')->group(function () use ($router) {
    $router->get('/all', [DispositivoController::class, 'getAll']);
    $router->get('/get/{id}', [DispositivoController::class, 'get']);
    $router->post('/save', [DispositivoController::class, 'save']);
    $router->get('/getbymodelo/{id}', [DispositivoController::class, 'getByModelo']);
    $router->get('/getbybodega/{id}', [DispositivoController::class, 'getByBodega']);
    $router->get('/get/{bodega_id}/{modelo_id}', [DispositivoController::class, 'getByModeloBodega']);
});

Route::prefix('/marcas')->group(function () use ($router) {
    $router->get('/all', [MarcaController::class, 'getAll']);
    $router->get('/get/{id}', [MarcaController::class, 'get']);
    $router->post('/save', [MarcaController::class, 'save']);
});


Route::prefix('/modelos')->group(function () use ($router) {
    $router->get('/all', [ModeloController::class, 'getAll']);
    $router->get('/get/{id}', [ModeloController::class, 'get']);
    $router->post('/save', [ModeloController::class, 'save']);
    $router->get('/getbymarca/{id}', [ModeloController::class, 'getByMarca']);
});
