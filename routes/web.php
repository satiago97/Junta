<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OndeComerController;
use App\Http\Controllers\DocumentoExecController;
use App\Http\Controllers\DocumentoAssembleiaController;


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

Route::get('/', 'App\Http\Controllers\WelcomeController@index')->name('welcome');

Route::get('/backoffice', function(){
    return view('backoffice/painel');
})->name('painel'); 

Route::get('/calendar', function(){
    return view('calendar');
})->name('calendar'); 



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
    return view('freguesia/Paroquia/paroquia');
})->name('paroquia');

Route::get('/formulario-contacto', function(){
    return view('site/informacoes/contact-form');
})->name('contact-form'); 


Route::get('/register', '\App\Http\Controllers\RegistrationController@create')->name('register');

Route::post('register', '\App\Http\Controllers\RegistrationController@store');

Route::get('/login', '\App\Http\Controllers\SessionsController@create')->name('login');
Route::post('/login', '\App\Http\Controllers\SessionsController@store');
Route::get('/logout', '\App\Http\Controllers\SessionsController@destroy');

//Galeria
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


//Routes Documentos Assembleia
Route::get('upload-DocumentoAssembleia', [DocumentoAssembleiaController::class, 'createForm'])->name('upload-docAssembleia');
Route::get('list-DocumentoAssembleia', [DocumentoAssembleiaController::class, 'createList'])->name('list-docAssembleia');
Route::post('/upload-DocumentoAssembleia', [DocumentoAssembleiaController::class, 'fileUpload'])->name('upload-DocumentoAssembleia');


// Routes Historia
Route::get('/insereHistoria', 'App\Http\Controllers\InsertHistoryController@index')->name('inserirHistoria');
Route::resource('inserirHistoria', 'App\Http\Controllers\InsertHistoryController');
Route::put('update-inserirHistoria/{id}', ['as' => 'update-inserirHistoria', 'uses' => 'App\Http\Controllers\InsertHistoryController@update']);
Route::get('/historia', 'App\Http\Controllers\InsertHistoryController@indexPagina')->name('Historia');

// Routes Heraldica
Route::get('/insereHeraldica', 'App\Http\Controllers\insereHeraldicaController@index')->name('inserirHeraldica');
Route::get('/heraldica', 'App\Http\Controllers\insereHeraldicaController@indexSite')->name('Heraldica');
Route::resource('inserirHeraldica', 'App\Http\Controllers\insereHeraldicaController');
Route::put('update-insereHeraldica/{id}', ['as' => 'update-insereHeraldica', 'uses' => 'App\Http\Controllers\insereHeraldicaController@update']);

//Caracterizacao 
Route::get('/insereCaracterizacao', 'App\Http\Controllers\Caracterizacao@index')->name('inserirCaracterizacao');
Route::resource('inserirCaracterizacao', 'App\Http\Controllers\Caracterizacao');
Route::put('update-inserirCaracterizacao/{id}', ['as' => 'update-inserirCaracterizacao', 'uses' => 'App\Http\Controllers\Caracterizacao@update']);
Route::get('/caracterizacao', 'App\Http\Controllers\Caracterizacao@indexSite')->name('caracterizacao');

//Routes Paroquia
Route::get('/insereParoquia', 'App\Http\Controllers\ParoquiaController@index')->name('inserirParoquia');
Route::put('update-inserirParoquia/{id}', ['as' => 'update-inserirParoquia', 'uses' => 'App\Http\Controllers\ParoquiaController@update']);
Route::get('/paroquia', 'App\Http\Controllers\ParoquiaController@indexPagina')->name('paroquia');
Route::resource('Paroquia', 'App\Http\Controllers\ParoquiaController');

//Imprensa
Route::get('/imprensaBackoffice' , 'App\Http\Controllers\ImprensaController@indexBackoffice')->name('inserirImprensa');
Route::get('/insereImprensa', 'App\Http\Controllers\ImprensaController@create')->name('insereImprensa');
Route::resource('insertImprensa', 'App\Http\Controllers\ImprensaController');
Route::delete('delete-inserirImprensa/{id}' , ['as' => 'delete-inserirImprensa', 'uses' => 'App\Http\Controllers\ImprensaController@destroy']);
Route::get('open-inserirImprensa/{id}', ['as' => 'open-inserirImprensa', 'uses' => 'App\Http\Controllers\ImprensaController@open']);
Route::put('update-inserirImprensa/{id}', ['as' => 'update-inserirImprensa', 'uses' => 'App\Http\Controllers\ImprensaController@update']);

//Jornal 
Route::get('/jornalBackoffice', 'App\Http\Controllers\JornalController@indexBackoffice')->name('inserirJornal');
Route::get('/insereJornal', 'App\Http\Controllers\JornalController@create')->name('insereJornal');
Route::resource('insertJornal', 'App\Http\Controllers\JornalController');
Route::delete('delete-inserirJornal/{id}', ['as' => 'delete-inserirJornal', 'uses' => 'App\Http\Controllers\JornalController@destroy']);
Route::get('open-inserirJornal/{id}', ['as' => 'open-inserirJornal', 'uses' => 'App\Http\Controllers\JornalController@open']);
Route::put('update-inserirJornal/{id}', ['as' => 'update-inserirJornal', 'uses' => 'App\Http\Controllers\JornalController@update']);
Route::get('/jornais', 'App\Http\Controllers\JornalController@indexSite')->name('Jornal');

//Route Empresas
Route::get('/insereEmpresa', 'App\Http\Controllers\EmpresasController@index')->name('empresas');
Route::get('/Empresas', 'App\Http\Controllers\EmpresasController@index2')->name('Empresas');
Route::resource('empresa', 'App\Http\Controllers\EmpresasController');
Route::get('edit-empresa/{id}', ['as' => 'edit-empresa', 'uses' => 'App\Http\Controllers\EmpresasController@edit']);
Route::put('update-empresa/{id}', ['as' => 'update-empresa', 'uses' => 'App\Http\Controllers\EmpresasController@update']);
Route::delete('delete-empresa/{id}', ['as' => 'delete-empresa', 'uses' => 'App\Http\Controllers\EmpresasController@destroy']);
Route::get('/detalhesEmpresa/{id}', ['as' => 'detalhesEmpresa', 'uses' => 'App\Http\Controllers\EmpresasController@detalhes']);

//Route Locais a Visitar
Route::get('/insereLocal', 'App\Http\Controllers\LocaisVisitarController@index')->name('locais');
Route::get('/Local', 'App\Http\Controllers\LocaisVisitarController@index2')->name('Local');
Route::resource('local', 'App\Http\Controllers\LocaisVisitarController');
Route::get('edit-local/{id}', ['as' => 'edit-local', 'uses' => 'App\Http\Controllers\LocaisVisitarController@edit']);
Route::put('update-local/{id}', ['as' => 'update-local', 'uses' => 'App\Http\Controllers\LocaisVisitarController@update']);
Route::delete('delete-local/{id}', ['as' => 'delete-local', 'uses' => 'App\Http\Controllers\LocaisVisitarController@destroy']);
Route::get('/detalhesLocal/{id}', ['as' => 'detalhesLocal', 'uses' => 'App\Http\Controllers\LocaisVisitarController@detalhes']);

//Route Associações
Route::get('/insereAssociacao', 'App\Http\Controllers\AssociacaoController@index')->name('associacoes');
Route::get('/Associacao', 'App\Http\Controllers\AssociacaoController@index2')->name('Associacao');
Route::resource('associacao', 'App\Http\Controllers\AssociacaoController');
Route::get('edit-associacao/{id}', ['as' => 'edit-associacao', 'uses' => 'App\Http\Controllers\AssociacaoController@edit']);
Route::put('update-associacao/{id}', ['as' => 'update-associacao', 'uses' => 'App\Http\Controllers\AssociacaoController@update']);
Route::delete('delete-associacao/{id}', ['as' => 'delete-associacao', 'uses' => 'App\Http\Controllers\AssociacaoController@destroy']);
Route::get('/detalhesAssociacao/{id}', ['as' => 'detalhesassociacao', 'uses' => 'App\Http\Controllers\AssociacaoController@detalhes']);



//Route Trilhos
Route::get('/insereTrilhos', 'App\Http\Controllers\TrilhosController@index')->name('trilhos');
Route::get('/Trilhos', 'App\Http\Controllers\TrilhosController@index2')->name('Trilhos');
Route::resource('trilho', 'App\Http\Controllers\TrilhosController');
Route::post('trilhos2', 'App\Http\Controllers\TrilhosController@storePonto')->name('trilhos2');
Route::delete('delete-trilho/{id}', ['as' => 'delete-trilho', 'uses' => 'App\Http\Controllers\TrilhosController@destroy']);
Route::get('/edit-trilho/{id}', ['as' => 'edit-trilho', 'uses' => 'App\Http\Controllers\TrilhosController@edit']);

//Routes Pontos de trilhos
Route::delete('delete-ponto/{id}', ['as' => 'delete-ponto', 'uses' => 'App\Http\Controllers\TrilhosController@destroyPonto']);
Route::put('update-ponto/{id}', ['as' => 'update-ponto', 'uses' => 'App\Http\Controllers\TrilhosController@updatePonto']);
Route::get('/edit-ponto/{id}/{id_trilho}', ['as' => 'edit-ponto', 'uses' => 'App\Http\Controllers\TrilhosController@editPonto']);




//Agenda
Route::get('/agendaBackoffice', 'App\Http\Controllers\AgendaController@indexBackoffice')->name('inserirAgenda');
Route::get('/insereAgenda', 'App\Http\Controllers\AgendaController@create')->name('insereAgenda');
Route::resource('insertAgenda', 'App\Http\Controllers\AgendaController');
Route::delete('delete-inserirAgenda/{id}', ['as' => 'delete-inserirAgenda', 'uses' => 'App\Http\Controllers\AgendaController@destroy']);
Route::put('update-inserirAgenda/{id}', ['as' => 'update-inserirAgenda', 'uses' => 'App\Http\Controllers\AgendaController@update']);
Route::get('open-inserirAgenda/{id}', ['as' => 'open-inserirAgenda', 'uses' => 'App\Http\Controllers\AgendaController@open']);
Route::get('/agenda', 'App\Http\Controllers\AgendaController@indexSite')->name('Agenda'); 
Route::get('openSite-Agenda/{id}', ['as' => 'openSite-Agenda', 'uses' => 'App\Http\Controllers\AgendaController@openSite']);


//Rede escolar
Route::get('/redeescolarBackoffice', 'App\Http\Controllers\RedeEscolarController@indexBackoffice')->name('inserirRedeEscolar');
Route::get('/insereRedeEscolar', 'App\Http\Controllers\RedeEscolarController@create')->name('insereRedeEscolar');
Route::resource('insertRedeEscolar', 'App\Http\Controllers\RedeEscolarController');
Route::delete('delete-inserirRedeEscolar/{id}', ['as' => 'delete-inserirRedeEscolar', 'uses' => 'App\Http\Controllers\RedeEscolarController@destroy']);
Route::put('update-inserirRedeEscolar/{id}', ['as' => 'update-inserirRedeEscolar', 'uses' => 'App\Http\Controllers\RedeEscolarController@update']);
Route::get('open-inserirRedeEscolar/{id}', ['as' => 'open-inserirRedeEscolar', 'uses' => 'App\Http\Controllers\RedeEscolarController@open']);
Route::get('/redeEscolar', 'App\Http\Controllers\RedeEscolarController@indexSite')->name('redeEscolar');
Route::get('openSite-redeEscolar/{id}', ['as' => 'openSite-redeEscolar', 'uses'=>'App\Http\Controllers\RedeEscolarController@openSite']);

//Routes Incidentes
Route::resource('insertIncidente', 'App\Http\Controllers\IncidentesController');
Route::get('/incidentes', 'App\Http\Controllers\IncidentesController@index')->name('incidentes');
Route::get('/Incidentes', 'App\Http\Controllers\IncidentesController@index2')->name('Incidentes');
Route::put('start-incidente/{id}', ['as' => 'start-incidente', 'uses' => 'App\Http\Controllers\IncidentesController@update1']);
Route::put('end-incidente/{id}', ['as' => 'end-incidente', 'uses' => 'App\Http\Controllers\IncidentesController@update2']);



//Route Serviços
Route::get('/insereServico', 'App\Http\Controllers\ServicosController@index')->name('servicos-backoffice');
Route::get('/Servicos', 'App\Http\Controllers\ServicosController@index2')->name('servicos-frontoffice');
Route::resource('servicos', 'App\Http\Controllers\ServicosController');
Route::get('edit-servico/{id}', ['as' => 'edit-servico', 'uses' => 'App\Http\Controllers\ServicosController@edit']);
Route::put('update-servico/{id}', ['as' => 'update-servico', 'uses' => 'App\Http\Controllers\ServicosController@update']);
Route::delete('delete-servico/{id}', ['as' => 'delete-servico', 'uses' => 'App\Http\Controllers\ServicosController@destroy']);
Route::get('/detalhesServico/{id}', ['as' => 'detalhesServico', 'uses' => 'App\Http\Controllers\ServicosController@detalhes']);




//Faqs
Route::get('/faqsBackoffice', 'App\Http\Controllers\FaqsController@indexBackoffice')->name('inserirFaqs');
Route::get('/insereFaqs', 'App\Http\Controllers\FaqsController@create')->name('insereFaqs');
Route::resource('insertFaqs', 'App\Http\Controllers\FaqsController');
Route::delete('delete-inserirFaqs/{id}', ['as' => 'delete-inserirFaqs', 'uses' => 'App\Http\Controllers\FaqsController@destroy']);
Route::get('open-inserirFaqs/{id}', ['as' => 'open-inserirFaqs', 'uses' => 'App\Http\Controllers\FaqsController@open']);
Route::put('update-inserirFaqs/{id}', ['as' => 'update-inserirFaqs', 'uses' => 'App\Http\Controllers\FaqsController@update']);
Route::get('/faqs', 'App\Http\Controllers\FaqsController@indexSite')->name('faqs');


//Contactos gerais
Route::get('/contactosBackoffice', 'App\Http\Controllers\ContactosGeraisController@indexBackoffice')->name('contactosGeraisBackoffice');
Route::get('/insereContactos', 'App\Http\Controllers\ContactosGeraisController@create')->name('insereContactos');
Route::resource('insertContactos' , 'App\Http\Controllers\ContactosGeraisController');
Route::delete('delete-contactosGeraisBackoffice/{id}', ['as' => 'delete-contactosGeraisBackoffice', 'uses' => 'App\Http\Controllers\ContactosGeraisController@destroy']);
Route::get('open-contactosGeraisBackoffice/{id}', ['as' => 'open-contactosGeraisBackoffice', 'uses' => 'App\Http\Controllers\ContactosGeraisController@open']);
Route::put('update-contactosGeraisBackoffice/{id}', ['as' => 'update-contactosGeraisBackoffice', 'uses' => 'App\Http\Controllers\ContactosGeraisController@update']);
Route::get('/contactosGerais', 'App\Http\Controllers\ContactosGeraisController@indexSite')->name('contactosGerais');

//Orgaos
Route::get('/orgaosAutarquia', 'App\Http\Controllers\OrgaosController@indexBackoffice')->name('orgaosBackoffice');
Route::get('insereOrgao', 'App\Http\Controllers\OrgaosController@create')->name('insereOrgao');
Route::resource('insertOrgao', 'App\Http\Controllers\OrgaosController');
Route::delete('delete-orgaosBackoffice/{id}', ['as' => 'delete-orgaosBackoffice', 'uses' => 'App\Http\Controllers\OrgaosController@destroy']);
Route::get('/orgaosAutarquiaSite', 'App\Http\Controllers\OrgaosController@indexSite')->name('orgaosAutarquia');


//Noticias
Route::get('/noticiasBackoffice', 'App\Http\Controllers\NoticiasController@indexBackoffice')->name('noticiasBackoffice');
Route::get('/insereNoticias', 'App\Http\Controllers\NoticiasController@create')->name('insereNoticias');
Route::resource('insertNoticia', 'App\Http\Controllers\NoticiasController');
Route::delete('delete-noticiasBackoffice/{id}', ['as' => 'delete-noticiasBackoffice', 'uses' => 'App\Http\Controllers\NoticiasController@destroy']);


//Routes Slider
Route::get('/slider', 'App\Http\Controllers\SliderController@index')->name('slider');
Route::resource('slide' , 'App\Http\Controllers\SliderController');
Route::delete('delete-slide/{id}', ['as' => 'delete-slide', 'uses' => 'App\Http\Controllers\SliderController@destroy']);
Route::get('edit-slide/{id}', ['as' => 'edit-slide', 'uses' => 'App\Http\Controllers\SliderController@edit']);
Route::put('update-slide/{id}', ['as' => 'update-slide', 'uses' => 'App\Http\Controllers\SliderController@update']);


//Routes Utilizadores
Route::get('/utilizadores', 'App\Http\Controllers\UtilizadoresController@index')->name('utilizadores');
Route::put('approve-user/{id}', ['as' => 'approve-user', 'uses' => 'App\Http\Controllers\UtilizadoresController@update1']);
Route::put('reject-user/{id}', ['as' => 'reject-user', 'uses' => 'App\Http\Controllers\UtilizadoresController@update2']);