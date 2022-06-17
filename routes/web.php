<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\MovimientoController;
use App\Models\Movimiento;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('clientes', ClienteController::class);

Route::resource('cuentas', CuentaController::class);

Route::resource('movimientos', MovimientoController::class);

Route::middleware(['auth'])->group(function () {

    Route::get('/cuentas/{cuenta}/titular', [CuentaController::class, 'titular'])
    ->name('cuentas.titulares');

    Route::get('/cuentas/{cuenta}/addtitular', [CuentaController::class, 'addtitular'])
    ->name('cuentas.addtitular');

    Route::put('/cuentas/{cuenta}', [CuentaController::class, 'addtitularmeter'])
    ->name('cuentas.addtitular.meter');

    Route::post('/cuentas/{cuenta}/quitar/clientes/{cliente}', [CuentaController::class, 'quitartitular'])
    ->name('cuentas.quitartitular');

    Route::get('/cuentas/{cuenta}/movimientos', [CuentaController::class, 'movimientos'])
    ->name('cuentas.movimientos');
});

require __DIR__.'/auth.php';
