<?php

use Illuminate\Support\Facades\Route;
//agregamos los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProcesoController;
use App\Http\Controllers\ClienteController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('blogs', [App\Http\Controllers\BlogController::class, 'index']);
Route::post('/blogs/submit', [BlogController::class, 'store']);
Route::get('/blogs/showevents', [BlogController::class, 'show']);
Route::post('/blogs/editevents/{id}', [BlogController::class, 'edit']);
Route::post('/blogs/delete/{id}', [BlogController::class, 'destroy']);
Route::post('/blogs/update/{event}', [BlogController::class, 'update']);

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    //Route::resource('blogs', BlogController::class);
    Route::resource('procesos', ProcesoController::class);
    Route::resource('clientes', ClienteController::class);
});