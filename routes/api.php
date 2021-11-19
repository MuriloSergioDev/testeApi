<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('cliente', [ClienteController::class, 'store'])->name('api.cliente.store');
Route::put('cliente/{id}', [ClienteController::class, 'update'])->name('api.cliente.update');
Route::delete('cliente/{id}', [ClienteController::class, 'destroy'])->name('api.cliente.delete');
Route::get('cliente/{id}', [ClienteController::class, 'index'])->name('api.cliente.index');
Route::get('consulta/final-placa/{numero}', [ClienteController::class, 'show'])->name('api.cliente.show');
