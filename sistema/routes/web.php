<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomicilioController;
use App\Http\Controllers\AnexosController;
use App\Http\Controllers\ActividadEconomicaController;
use App\Http\Controllers\ReferenciasPersonalesController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\GestionesController;
use App\Http\Controllers\CooperativaController;


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

Route::get('/', function () {
    return view('auth.login');
});
/*
Route::get('/domicilioview', function () {
    return view('domicilioview.domicilio');
});
Route::get('/domicilioview/create',[DomicilioController::class,'create']); */
Route::resource('vistaDomicilio', DomicilioController::class);
Route::resource('vistaAnexos', AnexosController::class);
Route::resource('ActividadEconomica', ActividadEconomicaController::class);
Route::resource('ReferenciasPersonales', ReferenciasPersonalesController::class);
Route::resource('personas',PersonaController::class);
Route::resource('Gestiones',GestionesController::class);


Route::get('Cooperativa/',[CooperativaController::class,'index']);
Route::get('Cooperativa/cooperativa',[CooperativaController::class,'create']);
Route::resource('Cooperativa.cooperativa', CooperativaController::class);

/*COMPLEMENTOS */

Route::get('/Complementos', function () {
    return view('Complementos/lista');
});
Route::get('/home', function () {
    return view('Complementos/index');
});

Auth::routes();
/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* login*/

Route::group(['middleware' => 'auth'], function() { 

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});