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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('anonimo.index');
});

Route::get('/listaClientes', function () {
    return view('gerente.listaClientes');
});


Route::get('/create-party', function () {
    return view('party.party.crear-fiesta');
});
Route::get('/pakages', ['App\Http\Controllers\PackagesController', 'index2']);
Route::get('/pakages-crear', ['App\Http\Controllers\PackagesController', 'create']);
Route::get('/pakages-editar', ['App\Http\Controllers\PackagesController', 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Rutas de Eventos */
Route::get('party/list',function(){return view('party/party/lista-fiestas');})->name('party.index');
Route::get('list', [App\Http\Controllers\PartyController::class, 'index'])->name('party.list');

Route::get('/listParty', ['App\Http\Controllers\PartyController', 'list']);
Route::post('/create-party', ['App\Http\Controllers\PartyController', 'create']);
Route::get('/update-party', ['App\Http\Controllers\PartyController', 'update']);

Route::get('/dashboard', ['App\Http\Controllers\UserController', 'views']);
Route::get('/listaClientes', ['App\Http\Controllers\UserController', 'index']);

Route::get('/crearUsuario', ['App\Http\Controllers\UserController', 'create']);
Route::get('usuario1/{user}', ['App\Http\Controllers\UserController', 'show'])->name('users.show');
Route::post('actualizar/{user}', ['App\Http\Controllers\UserController', 'update']);
Route::get('usuario2/{user}', ['App\Http\Controllers\UserController', 'edit'])->name('users.edit');
Route::get('usuario3/{user}', ['App\Http\Controllers\UserController', 'destroy'])->name('users.destroy');
Route::post('registro', ['App\Http\Controllers\UserController', 'store']);
