<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformesController;
use App\Http\Controllers\ProductoController;
use App\Models\Categoria;

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/informes/ingresos', [InformesController::class,'indexIngresos'])->name('ingresos');
Route::post('/informes/ingresos', [InformesController::class,'indexIngresosF'])->name('ingresosF');

Route::get('/informes/rotacion', [InformesController::class,'indexRotacion'])->name('rotacion');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('registro');
})->name('register');


/*Rutas de productos*/
Route::get('/productos/all', [ProductoController::class,'index'])->name('productos.index');
Route::get('/categorias/{categoria}', [ProductoController::class,'indexCategoria'])->name('productos.indexCategoria');
Route::get('/deportes/{deporte}', [ProductoController::class,'indexDeporte'])->name('productos.indexDeporte');
Route::get('/productos/{deporte}/{categoria}', [ProductoController::class,'indexDeporteCategoria'])->name('productos.indexDeporteCategoria');
Route::get('producto/{productos}', [ProductoController::class,'show'])->name('productos.show');

Route::get('/car', function () {
    return view('shoppingCar');
})->name('car');

