<?php

use App\Http\Controllers\EmpleadoController;
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

Route::get('get-empleados', [\App\Http\Controllers\EmpleadoController::class, 'getAll'])->name('api-getAll')->middleware('auth:sanctum');
Route::put('guardar-empleados', [\App\Http\Controllers\EmpleadoController::class, 'save'])->name('save');
Route::delete('eliminar-empleados/{id}', [\App\Http\Controllers\EmpleadoController::class, 'eliminarEmpleado'])->name('delete');
Route::post('editar-empleado/{id}', [\App\Http\Controllers\EmpleadoController::class, 'editarEmpleado'])->name('editarEmpleado');
Route::get('get-empleado/{id}', [\App\Http\Controllers\EmpleadoController::class, 'getEmpleado'])->name('getEmpleado');

Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::get('userinfo', [\App\Http\Controllers\AuthController::class, 'userinfo'])->middleware('auth:sanctum');