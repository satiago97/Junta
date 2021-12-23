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



/*Route::get('/registar', function(){
    return view('registar');
})->name('registar'); */

Route::get('/backoffice', function(){
    return view('backoffice/painel');
})->name('painel'); 

Route::get('/historia', function(){
    return view('historia');
})->name('historia');

Route::get('/heraldica', function(){
    return view('heraldica');
})->name('heraldica');

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

Route::get('/caracterizacao', function(){
    return view('caracterizacao');
})->name('caracterizacao');

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

/*Route::get('/onde-comer', function(){
    return view('onde-Comer');
})->name('onde-comer');*/

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



/*Route::get('/insereGaleria', function(){
    return view('/backoffice/insereGaleria');
})->name('insereGaleria');*/

Route::get('/insereGaleria', 'App\Http\Controllers\GalleryController@index')->name('inserirGaleria');
Route::resource('imagens', 'App\Http\Controllers\GalleryController');

Route::get('/insereOndeComer', 'App\Http\Controllers\OndeComerController@index')->name('ondecomer');
Route::get('/onde-Comer', 'App\Http\Controllers\OndeComerController@index2')->name('onde-Comer');
Route::resource('ondeComer', 'App\Http\Controllers\OndeComerController');
