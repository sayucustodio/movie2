<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\RentalController;
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
    return view('auth.login2');
});

Route::resource('categorias','App\Http\Controllers\CategoryController')->names('categorias');
Route::resource('clientes','App\Http\Controllers\CustomerController')->names('clientes');
//Route::resource('empleados','App\Http\Controllers\StaffController')->names('empleados');
Route::resource('alquiler','App\Http\Controllers\RentalController')->names('alquiler');
Route::resource('peliculas','App\Http\Controllers\FilmController')->names('peliculas');
Route::resource('usuarios','App\Http\Controllers\UserController')->names('usuarios');
Route::resource('reportes','App\Http\Controllers\ReportesController')->names('reportes');
Route::get('ActualizarEstado','App\Http\Controllers\CustomerController@ActualizarEstado')->name('ActualizarEstado');
//Route::get('buscarCliente','App\Http\Controllers\RentalController@buscarCliente');
Route::get('calcularimporte','App\Http\Controllers\RentalController@calcularimporte');
Route::get('contacto','App\Http\Controllers\ContactoController@contacto');
Route::get('listaAlquileres',['as'=>'alquiler.listaAlquileres','uses'=>'App\Http\Controllers\RentalController@listaAlquileres']);
Route::get('ActualizarEstadoAlquiler','App\Http\Controllers\RentalController@ActualizarEstadoAlquiler')->name('ActualizarEstadoAlquiler');

/*Route::get('/alquiler/createDetalle2/{id}', [
    'as'=>'alquiler.createDetalle2',
    'uses'=>'App\Http\Controllers\RentalController@createDetalle2'
 ]);*/
// Route::get('alquiler/{id}/editdetalle',['as'=>'alquiler.detalleedit', 'uses'=>'App\Http\Controllers\RentalController@detalleedit']);
	
//Route::get('/', [CategoryController::class,'index']);
Auth::routes();
   
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');