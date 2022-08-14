<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitasController;

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
    return view('index');
});

Route::get('/mision', function () {
    return view('Mision');
})->name('mision');

Route::get('/vision', function () {
    return view('Vision');
})->name('vision');

Route::get('/valores', function () {
    return view('Valores');
})->name('valores');

Route::get('/encuentra', function () {
    return view('Geo');
})->name('Geolocalizacion');


Route::get('/citas', function () {
    return view('Citas');
})->name('citas');

//Rutas de procedimientos
Route::get('/biche', function () {
    return view('procedimientos/bichectomia');
})->name('bichectomia');
Route::get('/blefaro', function () {
    return view('procedimientos/blefaro');
})->name('blefaroplastia');
Route::get('/lifting', function () {
    return view('procedimientos/lifting');
})->name('lifting-de-labios');
Route::get('/lipo', function () {
    return view('procedimientos/Lipo');
})->name('Lipo-cervical');
Route::get('/marcaje', function () {
    return view('procedimientos/marcaje');
})->name('marcaje-de-cara');
Route::get('/otop', function () {
    return view('procedimientos/otoplastia');
})->name('otoplastia');
Route::get('/rino', function () {
    return view('procedimientos/rino');
})->name('rinoplastia');

//Api REST citas 
Route::get('/citas/create',[CitasController::class,'create']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Api personal de autenticacion 
Auth::routes();
