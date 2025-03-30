<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TinacoController;
use App\Http\Controllers\SolarController;
use App\Http\Controllers\CisternasController;
use App\Http\Controllers\CuentaController;

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/solares', [SolarController::class, 'index'])->name('calentadores');


Route::get('/tinacos', [TinacoController::class, 'index'])->name('tinacos');

Route::get('/direccion', [DireccionController::class, 'index'])->name('direccion');
Route::get('/cuenta', [CuentaController::class, 'index'])->name('cuenta');


Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

Route::get('/cisternas', [CisternasController::class, 'index'])->name('cisternas');
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
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('contacto.enviar');





Route::get('/articulos', [ProductoController::class, 'index'])->name('articulos');
