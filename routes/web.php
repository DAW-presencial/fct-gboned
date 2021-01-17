<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiControlador;

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

Route::get('home', function() {
    $nombre = "Juan";
    return view('home')->with("nombre", $nombre);
})->name('home');

Route::get('/', function () {
   // return view('welcome');
   echo "<a href='" . route('contacto') . "'>Contacto 1</a><br>";
   echo "<a href='" . route('contacto') . "'>Contacto 2</a><br>";
   echo "<a href='" . route('contacto') . "'>Contacto 3</a><br>";
   echo "<a href='" . route('contacto') . "'>Contacto 4</a><br>";
   echo "<a href='" . route('contacto') . "'>Contacto 5</a><br>";
});

Route::get('contacto', function() {
    return "Hola desde la página de contacto";
})->name('contacto');

Route::get('saludo/{nombre?}', function($nombre = "Invitado") {
    return "Hola $nombre";
});

Route::get('/admin', [MiControlador::class, 'index']);

Route::get('/borrar', function() {
    return "Ejemplo con middleware";
})->middleware('delete');