<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/new', function () {
    return "HOLA MUNDO";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/productos', [App\Http\Controllers\productosController::class, 'index'])->name('productos');
Route::get('/addclientes', [App\Http\Controllers\addclientesController::class, 'index'])->name('addclientes');
Route::get('/ingresos', [App\Http\Controllers\ingresosController::class, 'index'])->name('ingresos');
Route::get('/categorias', [App\Http\Controllers\categoriasController::class, 'index'])->name('categorias');
Route::get('/ventas', [App\Http\Controllers\ventasController::class, 'index'])->name('ventas');
