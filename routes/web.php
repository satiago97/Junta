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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/backoffice', function(){
    return view('backoffice/painel');
})->name('painel'); 



Route::get('/galeria', function(){
    return view('galeria');
})->name('galeria');

Route::get('/imprensa', function(){
    return view('imprensa');
})->name('imprensa');


Route::get('/redeEscolar', function(){
    return view('redeEscolar');
})->name('redeEscolar');


Route::get('/agenda', function(){
    return view('agenda');
})->name('agenda');



Route::get('/empresas', function(){
    return view('empresas');
})->name('empresas');

Route::get('/instituicoesEAssociacoes', function(){
    return view('instituicoesEAssociacoes');
})->name('instituicoesEAssociacoes');


Route::get('/jornais', function(){
    return view('jornais');
})->name('jornais');

Route::get('/locaisAvisitar', function(){
    return view('locaisAvisitar');
})->name('locaisAvisitar');

Route::get('/ondeComer', function(){
    return view('ondeComer');
})->name('ondeComer');

Route::get('/ondeDormir', function(){
    return view('ondeDormir');
})->name('ondeDormir');

Route::get('/paroquia', function(){
    return view('paroquia');
})->name('paroquia');


Route::get('/register', '\App\Http\Controllers\RegistrationController@create')->name('register');

Route::post('register', '\App\Http\Controllers\RegistrationController@store');

Route::get('/login', '\App\Http\Controllers\SessionsController@create')->name('login');
Route::post('/login', '\App\Http\Controllers\SessionsController@store');
Route::get('/logout', '\App\Http\Controllers\SessionsController@destroy');


Route::get('/insereGaleria', 'App\Http\Controllers\GalleryController@index')->name('inserirGaleria');
Route::resource('imagens', 'App\Http\Controllers\GalleryController');


