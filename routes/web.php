<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OndeComerController;
use App\Http\Controllers\DocumentoExecController;


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
})->name('welcome');

Route::get('/backoffice', function(){
    return view('backoffice/painel');
})->name('painel'); 


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
Route::get('open-editaGaleria/{id}', ['as' => 'open-editaGaleria', 'uses' => 'App\Http\Controllers\GalleryController@open']);
Route::get('open2-Galeria/{id}', ['as' => 'open2-Galeria', 'uses' => 'App\Http\Controllers\GalleryController@open2']);
Route::delete('delete-editaGaleria/{id}', ['as' => 'delete-editaGaleria', 'uses' =>'App\Http\Controllers\GalleryController@destroy']);
Route::get('galeria', 'App\Http\Controllers\GalleryController@index2')->name('Galeria');


//Route Freguesia Onde Comer
Route::get('/insereOndeComer', 'App\Http\Controllers\OndeComerController@index')->name('ondecomer');
Route::get('/onde-Comer', 'App\Http\Controllers\OndeComerController@index2')->name('onde-Comer');
Route::resource('ondeComer', 'App\Http\Controllers\OndeComerController');
Route::get('edit-ondecomer/{id}', ['as' => 'edit-ondecomer', 'uses' => 'App\Http\Controllers\OndeComerController@edit']);
Route::put('update-ondecomer/{id}', ['as' => 'update-ondecomer', 'uses' => 'App\Http\Controllers\OndeComerController@update']);
Route::delete('delete-ondecomer/{id}', ['as' => 'delete-ondecomer', 'uses' => 'App\Http\Controllers\OndeComerController@destroy']);
Route::get('/detalhesOndeComer/{id}', ['as' => 'detalhesOndeComer', 'uses' => 'App\Http\Controllers\OndeComerController@detalhes']);

//Route Freguesia Onde Dormir
Route::get('/insereOndeDormir', 'App\Http\Controllers\OndeDormirController@index')->name('ondedormir');
Route::get('/onde-Dormir', 'App\Http\Controllers\OndeDormirController@index2')->name('onde-Dormir');
Route::resource('ondeDormir', 'App\Http\Controllers\OndeDormirController');
Route::get('edit-ondedormir/{id}', ['as' => 'edit-ondedormir', 'uses' => 'App\Http\Controllers\OndeDormirController@edit']);
Route::put('update-ondedormir/{id}', ['as' => 'update-ondedormir', 'uses' => 'App\Http\Controllers\OndeDormirController@update']);
Route::delete('delete-ondedormir/{id}', ['as' => 'delete-ondedormir', 'uses' => 'App\Http\Controllers\OndeDormirController@destroy']);
Route::get('/detalhesOndeDormir/{id}', ['as' => 'detalhesOndeDormir', 'uses' => 'App\Http\Controllers\OndeDormirController@detalhes']);


//Routes Documentos Executivo
Route::get('upload-DocumentoExec', [DocumentoExecController::class, 'createForm'])->name('upload-docexec');
Route::get('list-DocumentoExec', [DocumentoExecController::class, 'createList'])->name('list-docexec');
Route::post('/upload-DocumentoExec', [DocumentoExecController::class, 'fileUpload'])->name('upload-DocumentoExec');


Route::get('/insereHistoria', 'App\Http\Controllers\InsertHistoryController@index')->name('inserirHistoria');
Route::resource('inserirHistoria', 'App\Http\Controllers\InsertHistoryController');
Route::put('update-inserirHistoria/{id}', ['as' => 'update-inserirHistoria', 'uses' => 'App\Http\Controllers\InsertHistoryController@update']);

Route::get('/historia', 'App\Http\Controllers\InsertHistoryController@indexPagina')->name('Historia');

Route::get('/insereHeraldica', 'App\Http\Controllers\insereHeraldicaController@index')->name('inserirHeraldica');
Route::get('/heraldica', 'App\Http\Controllers\insereHeraldicaController@indexSite')->name('Heraldica');
Route::resource('inserirHeraldica', 'App\Http\Controllers\insereHeraldicaController');
Route::put('update-insereHeraldica/{id}', ['as' => 'update-insereHeraldica', 'uses' => 'App\Http\Controllers\insereHeraldicaController@update']);

//Caracterizacao 
Route::get('/insereCaracterizacao', 'App\Http\Controllers\Caracterizacao@index')->name('inserirCaracterizacao');
Route::resource('inserirCaracterizacao', 'App\Http\Controllers\Caracterizacao');
Route::put('update-inserirCaracterizacao/{id}', ['as' => 'update-inserirCaracterizacao', 'uses' => 'App\Http\Controllers\Caracterizacao@update']);
Route::get('/caracterizacao', 'App\Http\Controllers\Caracterizacao@indexSite')->name('caracterizacao');

