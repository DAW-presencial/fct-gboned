<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiControlador;
use App\Http\Controllers\EmailControlador;

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

Route::view('/about', 'about')->name('about');
Route::get('/portfolio', 'PortfolioControllerResource@index')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

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
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/email', [EmailControlador::class, 'enviarEmail']);
//Route::get('/portfolio', 'PortfolioControllerResource@index')->name('portfolio');

//Route::resource('projects', 'PortfolioControllerResource');

//Route::resource('projects', 'PortfolioControllerApi');