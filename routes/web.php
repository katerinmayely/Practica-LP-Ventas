<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;

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
    return view('inicio.saludo');
});

Route::get('/productos/guardar/form', [ProductoController::class, 'create']);
Route::post('/productos/guardar/store', [ProductoController::class, 'store'])->name('producto.guardar');
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.mostrar');
Route::get('/ventas/guardar/form', [VentaController::class, 'create']);
Route::post('/ventas/guardar/store', [VentaController::class, 'store'])->name('venta.guardar');
Route::get('/ventas', [VentaController::class, 'index'])->name('ventas.ver');