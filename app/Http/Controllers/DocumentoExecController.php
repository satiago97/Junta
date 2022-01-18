<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetalhesDocumentoExecutivo;
use App\Models\DocumentosExecutivo;
use App\Models\CategoriaDocumentoExecutivo;



class DocumentoExecController extends Controller
{
    public function createForm(){
        $documentoExecCategoria = CategoriaDocumentoExecutivo::all();
        return view('backoffice/autarquia/documentosExecutivo/upload-DocumentoExec', compact('documentoExecCategoria'));
      }

      public function createList(){
        $documentoExecCategoria = CategoriaDocumentoExecutivo::all();
        $documentosExecutivo = DocumentosExecutivo::all();
        $detalhesDocumentosExecutivo = DetalhesDocumentoExecutivo::all();
        return view('site/autarquia/executivo/documentosExecutivo', compact('documentoExecCategoria', 'documentosExecutivo', 'detalhesDocumentosExecutivo'));
      }
    
    
      public function fileUpload(Request $req){


        $doc = new DocumentosExecutivo([
            "id_freguesia" => '1',
            "categoria_documento_executivo" => $req->input('categoria'),
            "data" => $req->input('data')
        ]);
        $doc->save();

            $req->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            ]);
    
            $fileModel = new DetalhesDocumentoExecutivo;
    
            if($req->file()) {
                $fileName = time().'_'.$req->file->getClientOriginalName();
                $fileModel->titulo = $req->input('titulo');
                $fileModel->id_documento_executivo = DocumentosExecutivo::orderBy('id', 'desc')->first()->id;

                $ano = date("Y",strtotime($req->input('data')));
                $cats = CategoriaDocumentoExecutivo::all();
                foreach($cats as $cat){
                  if($cat->id == $req->input('categoria')){
                    $categoriaFolder = $cat->descricao;
                  }
                }

                $filePath = $req->file('file')->storeAs('uploads_documentosExec/files/'.$categoriaFolder.'/'.$ano, $fileName, 'public');
                $fileModel->documento = '/storage/' . $filePath;

                $fileModel->save();
    
                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
            }
    }
}   
