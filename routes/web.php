<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TinacoController;
use App\Http\Controllers\SolarController;

Route::get('/solares', [SolarController::class, 'index'])->name('calentadores');


Route::get('/tinacos', [TinacoController::class, 'index'])->name('tinacos');


Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

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

Route::get('/cisternas', function () {
    return view('cisternas'); // Carga la vista nueva
})->name('cisternas');





Route::get('/articulos', [ProductoController::class, 'index'])->name('articulos');
