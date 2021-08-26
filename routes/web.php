<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController ;
use App\Http\Controllers\ClienteController ;
use App\Http\Controllers\VentaController ;
use App\Http\Controllers\ProductoController ;

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

Route::resource('/admin/home', AdministradorController::class);
Route::resource('/admin/clientes', ClienteController::class);
Route::resource('/admin/ventas', VentaController::class);
Route::resource('/admin/productos', ProductoController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
