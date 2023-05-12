<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imgController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SecureurlController;
use App\Http\Controllers\CerrarSesionController;
use App\Http\Controllers\ComentarioController;

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

Route::get('/registrarse', [RegistroController::class, 'index'])->name('registro');
Route::post('/registrarse', [RegistroController::class, 'store']);



Route::get('/iniciarsesion}', [SesionController::class, 'index'])->name('inicio');
Route::get('/login', [SesionController::class, 'index'])->name('login');
Route::post('/login', [SesionController::class, 'store']);
Route::post('/logout', [CerrarSesionController::class, 'store'])->name('logout');
Route::get('/{user:username}', [SecureurlController::class, 'index'])->name('accesoseguro');

Route::get('/publicaciones/create', [SecureurlController::class, 'create'])->name('publicaciones.create');
Route::post('publicaciones', [SecureurlController::class, 'store'])->name('publicaciones.store');
Route::get('posts/{user:username}/{post}', [SecureurlController::class, 'show'])->name('publicaciones.show');


Route::post('posts/{user:username}/{post}', [ComentarioController::class, 'store'])->name('comentarios.store');


Route::post('/imgs', [imgController::class, 'store'])->name('imagenes.store');
Route::delete('posts/{post}', [SecureurlController::class, 'destroy'])->name('publicaciones.destroy');
