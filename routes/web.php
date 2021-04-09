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
Route::get('/', 'UsuarioController@login')->name('usuarios.login');
Route::post('logear', 'UsuarioController@logear')->name('usuarios.logear');
Route::get('home', 'UsuarioController@home')->name('layouts.app');
Route::get('logout', 'UsuarioController@logout')->name('usuarios.logout');
Route::get('usuarios/{id}/{estado}/cambiarEstado', 'UsuarioController@cambiarEstado')->name('usuarios.cambiarEstado');
Route::resource('usuarios', 'UsuarioController', ['only' => ['index', 'show', 'create', 'store', 'edit', 'update']]);

Route::resource('autores', 'AutorController');
Route::resource('materias', 'MateriaController');
Route::resource('materiales', 'MaterialController');
Route::resource('carreras', 'CarreraController');
Route::resource('libros', 'LibroController');
Route::resource('tesis', 'TesisController');
Route::resource('profocoms', 'ProfocomController');
Route::resource('revistas', 'RevistaController');
Route::resource('autorMaterials', 'AutorMaterialController');
Route::resource('materiaMaterials', 'MateriaMaterialController');
Route::resource('prestamos', 'PrestamoController');
Route::resource('reservas', 'ReservaController');

Route::get('autores/{id}/{estado}/cambiarEstado', 'AutorController@cambiarEstado')->name('autores.cambiarEstado');
Route::get('materias/{id}/{estado}/cambiarEstado', 'MateriaController@cambiarEstado')->name('materias.cambiarEstado');
Route::get('carreras/{id}/{estado}/cambiarEstado', 'CarreraController@cambiarEstado')->name('carreras.cambiarEstado');
Route::get('reservas/{id}/{ruta}/guardar', 'ReservaController@guardar')->name('reservas.guardar');


//Route::get('/', function () {
//    return view('layouts.app');
//});
