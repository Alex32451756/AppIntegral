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
})->name('inicioStripper')->middleware('verified')->middleware('can:inicioStripper');

Route::get('/inicioAdmin', function () {
    return view('components.administrador.incioAdmin');
})->name('inicioAdmin')->middleware('verified')->middleware('can:inicioAdmin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');


//Admin
Route::post('/resgistro', [App\Http\Controllers\Auth\RegisterController::class,'create'])->name('registro'); 
Route::get('/pendientes', 'App\Http\Controllers\AdminController@pendiente')->name('pendiente')->middleware('verified')->middleware('can:inicioAdmin'); 
Route::get('/inicio', 'App\Http\Controllers\AdminController@inicio')->name('inicio')->middleware('verified')->middleware('can:inicioAdmin'); 
Route::get('/acceptados', 'App\Http\Controllers\AdminController@acceptados')->name('acceptados')->middleware('verified')->middleware('can:inicioAdmin');
Route::get('/clientes', 'App\Http\Controllers\AdminController@clientes')->name('clientes')->middleware('verified')->middleware('can:inicioAdmin');
Route::post('/actualizarAdmin/{id}', 'App\Http\Controllers\AdminController@update')->name('actualizarAdmin')->middleware('verified')->middleware('can:inicioAdmin');  
Route::post('/cantidad/{id}', 'App\Http\Controllers\AdminController@registerStr')->name('cantidad')->middleware('verified')->middleware('can:inicioAdmin');
Route::post('/eleminarAdmin/{id}', 'App\Http\Controllers\AdminController@destroy')->name('eliminarAdmin')->middleware('verified')->middleware('can:inicioAdmin');  
Route::post('/ver/{id}', 'App\Http\Controllers\AdminController@show')->name('ver')->middleware('verified')->middleware('can:inicioAdmin');  

//usuario
Route::get('/inicioUser', 'App\Http\Controllers\UserController@index')->name('inicioUser')->middleware('verified')->middleware('can:inicioUser');
Route::get('/agenda', 'App\Http\Controllers\EventoController@index')->name('agenda')->middleware('verified')->middleware('can:inicioUser');
Route::post('/agregar', 'App\Http\Controllers\EventoController@store')->name('agregar')->middleware('verified')->middleware('can:inicioUser');
Route::get('/mostrar', 'App\Http\Controllers\EventoController@show')->name('mostrar')->middleware('verified')->middleware('can:inicioUser');
Route::post('/editar/{id}', 'App\Http\Controllers\EventoController@edit')->name('editar')->middleware('verified')->middleware('can:inicioUser');
Route::post('/eliminar/{id}', 'App\Http\Controllers\EventoController@destroy')->name('eliminar')->middleware('verified')->middleware('can:inicioUser');
Route::post('/update/{evento}', 'App\Http\Controllers\EventoController@update')->name('actualizar')->middleware('verified')->middleware('can:inicioUser');
Route::post('/verStripper/{id}', 'App\Http\Controllers\UserController@verStripper')->name('verStripper')->middleware('verified')->middleware('can:inicioUser');

Route::get('/editarPerfil', function(){
    return view('/components/stripper/editarPerfil');
})->name('perfil')->middleware('verified');

 
Route::get('/clear-cache', function () {
    echo Artisan::call('config:clear');
    echo Artisan::call('config:cache');
    echo Artisan::call('cache:clear');
    echo Artisan::call('route:clear');
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
