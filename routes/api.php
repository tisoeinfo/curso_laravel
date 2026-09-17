<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Laravel automáticamente lo convierte en:/api/clientes, porque depende de la configuracion de bootrap.
// Para algunos endpoint existen parametros de rutas y es el estandar que maneja APIs REST
Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/{id}', [ClienteController::class, 'show']);
Route::post('/clientes', [ClienteController::class, 'store']);
Route::put('/clientes/{id}', [ClienteController::class, 'update']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);