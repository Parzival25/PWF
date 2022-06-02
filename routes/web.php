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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Rutas de Eventos */
Route::get('party/list',function(){return view('party/party/lista-fiestas');})->name('party.index');
Route::get('list', [App\Http\Controllers\PartyController::class, 'index'])->name('party.list');

Route::get('/listParty', ['App\Http\Controllers\PartyController', 'list']);
Route::post('/create-party', ['App\Http\Controllers\PartyController', 'create']);
Route::get('/update-party', ['App\Http\Controllers\PartyController', 'update']);

