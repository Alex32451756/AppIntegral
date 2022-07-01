<?php

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
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicioStripper', function () {
    return view('components.stripper.inicioStripper');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





























Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicioUser', function () {
    return view('components.usuario.inicioUser');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/resgistro', [App\Http\Controllers\Auth\RegisterController::class,'create'])->name('registro'); 

Route::get('/editarPerfil', function(){
    return view('/components/stripper/editarPerfil');
})->name('perfil');

