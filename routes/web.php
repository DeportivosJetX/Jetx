<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformesController;
use App\Http\Controllers\ProductoController;
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
Route::get('/', [HomeController::class,'index'])->name('home');

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/**
 * Rutas autentificación
 */
require __DIR__.'/auth.php';

/**
 * Rutas de los informes
 */
Route::get('/informes/ingresos', [InformesController::class,'indexIngresos'])->middleware(['auth'])->name('ingresos');
Route::post('/informes/ingresos', [InformesController::class,'indexIngresosF'])->middleware(['auth'])->name('ingresosF');

Route::get('/informes/rotacion', [InformesController::class,'indexRotacion'])->middleware(['auth'])->name('rotacion');

/**
 * Rutas de productos
 */
Route::get('/productos/all', [ProductoController::class,'index'])->name('productos.index');
Route::get('/categorias/{categoria}', [ProductoController::class,'indexCategoria'])->name('productos.indexCategoria');
Route::get('/deportes/{deporte}', [ProductoController::class,'indexDeporte'])->name('productos.indexDeporte');
Route::get('/productos/{deporte}/{categoria}', [ProductoController::class,'indexDeporteCategoria'])->name('productos.indexDeporteCategoria');
Route::get('producto/{productos}', [ProductoController::class,'show'])->name('productos.show');

Route::get('/car', function () {
    return view('shoppingCar');
})->name('car');


