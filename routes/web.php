<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformesController;
use App\Http\Controllers\ProductoController;

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/informes/ingresos', [InformesController::class,'indexIngresos'])->name('ingresos');
Route::post('/informes/ingresos', [InformesController::class,'indexIngresosF'])->name('ingresosF');

Route::get('/informes/rotacion', [InformesController::class,'indexRotacion'])->name('rotacion');

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('registro');
})->name('register');


/*Rutas de productos*/
Route::get('/productos/all', [ProductoController::class,'index'])->name('productos.index');

Route::get('producto/{productos}', [ProductoController::class,'show'])->name('productos.show');


