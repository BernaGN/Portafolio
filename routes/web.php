<?php

use App\Http\Controllers\AuditController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\HabilidadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', PrincipalController::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', HomeController::class)->name('home');

//Sistema
    Route::resource('/usuarios', UserController::class)->except(['create', 'show']);

    Route::resource('/roles', RolController::class);

    Route::resource('/auditorias', AuditController::class)->only('index', 'show');

//Catalogos
    Route::resource('/permisos', PermisoController::class);

    Route::resource('/categorias', CategoriaController::class);

    Route::resource('/clientes', ClienteController::class);

    Route::resource('/etiquetas', EtiquetaController::class);

    Route::resource('/habilidades', HabilidadController::class);

    Route::resource('/servicios', ServicioController::class);

//Procesos
});
