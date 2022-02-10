<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetalhesDocumentoAssembleium;
use App\Models\DocumentosAssembleium;
use App\Models\CategoriaDocumentoAssembleium;


class DocumentoAssembleiaController extends Controller
{

        public function createForm(){
            $documentoAssembleiaCategoria = CategoriaDocumentoAssembleium::all();
            return view('backoffice/autarquia/documentosAssembleia/upload-DocumentoAssembleia', compact('documentoAssembleiaCategoria'));
          }
    
          public function createList(){
            $documentoAssembleiaCategoria = CategoriaDocumentoAssembleium::all();
            $documentosAssembleia = DocumentosAssembleium::all();
            $detalhesDocumentosAssembleia = DetalhesDocumentoAssembleium::all();
            return view('site/autarquia/assembleia/documentosAssembleia', compact('documentoAssembleiaCategoria', 'documentosAssembleia', 'detalhesDocumentosAssembleia'));
          }
        
        
          public function fileUpload(Request $req){
    
    
            $doc = new DocumentosAssembleium([
                "id_freguesia" => '1',
                "categoria_documento_assembleia" => $req->input('categoria'),
                "data" => $req->input('data')
            ]);
            $doc->save();
    
                $req->validate([
                'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
                ]);
        
                $fileModel = new DetalhesDocumentoAssembleium;
      
                if($req->file()) {
                    $fileName = time().'_'.$req->file->getClientOriginalName();
                    $fileModel->titulo = $req->input('titulo');
                    $fileModel->id_documento_assembleia = DocumentosAssembleium::orderBy('id', 'desc')->first()->id;
    
                    $ano = date("Y",strtotime($req->input('data')));

                    $cats = CategoriaDocumentoAssembleium::all();
                    foreach($cats as $cat){
                      if($cat->id == $req->input('categoria')){
                        $categoriaFolder = $cat->descricao;
                      }
                    }
    
                    $filePath = $req->file('file')->storeAs('uploads_documentosAssembleia/files/'.$categoriaFolder.'/'.$ano, $fileName, 'public');
                    $fileModel->documento = '/storage/' . $filePath;
    
                    $fileModel->save();
        
                    return back()
                    ->with('success','File has been uploaded.')
                    ->with('file', $fileName);
                }
        }
    }   
    
