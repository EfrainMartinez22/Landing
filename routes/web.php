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

Route::get('/citas/create',[CitasController::class,'create']);

//Route::resource('citas', CitasController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
