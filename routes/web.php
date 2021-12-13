<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('vista');


Route::get('/', function () {
    return view('/welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('vista');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#####

Route::get('animales', [HomeController::class, 'index'])->name('animales.index');
Route::get('animales/crear', [HomeController::class, 'crear'])->name('animales.crear');

//Guardar 
Route::post('animales', [HomeController::class, 'guardar'])->name('animales.guardar');

//editar
Route::get('animales/{animal}/editar', [HomeController::class, 'editar'])->name('animales.editar');

//actualizar
Route::patch('animales/{animal}', [HomeController::class, 'actualizar'])->name('animales.actualizar');
//ver
Route::get('animales/{animal}', [HomeController::class, 'ver'])->name('animales.ver');
//eliminar
Route::delete('animales/{animal}', [HomeController::class, 'eliminar'])->name('animales.eliminar');
//=======
//Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('vista');