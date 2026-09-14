<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/saludo', function () {
//     return 'Hola desde Laravel';
// });

// Route::get('/api/prueba', function () {
//     return response()->json([
//         'mensaje' => 'Hola desde Laravel API',
//         'version' => '1.0'
//     ]);
// });

// Route::get('/api/saludo/{nombre}', function ($nombre) {
//     return response()->json([
//         'mensaje' => 'Hola ' . $nombre
//     ]);
// });

// Route::get('/api/saludo/{nombre}/{edad}', function ($nombre, $edad) {
//     return response()->json([
//         'mensaje' => 'Hola ' . $nombre,
//         'edad' => $edad
//     ]);
// });

// Route::get('/api/clientes', function () {
//     $clientes = DB::select('SELECT * FROM clientes');
//     return response()->json($clientes);
// });
Route::get('/api/clientes', [ClienteController::class, 'index']);
