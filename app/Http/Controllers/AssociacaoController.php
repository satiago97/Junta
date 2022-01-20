<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Associaco;

class AssociacaoController extends Controller
{

        public function index(){
            $associacao = Associaco::all();
            return view('/backoffice/freguesia/Associacoes/insereAssociacao', compact('associacao'));
        }
    
        public function index2(){
            $associacao = Associaco::all();
            return view('/site/freguesia/Associacoes/Associacoes', compact('associacao'));
        }
    
        public function detalhes($id)
        {
            $associacao = Associaco::find($id);
            return view('/site/freguesia/Associacoes/detalhesAssociacao', compact('associacao'));
        }
    
        public function store(Request $request){
    
            if($request->hasFile('file')){
                $request->validate([
                    'image'=>'mimes:jpeg,bmp,png'
                ]);
    
                $request->file->store('associacoes', 'public');
    
                $imagem = new Associaco([
                    "foto" => $request->file->hashName(),
                    "id_freguesia" => '1',
                    "nome" => $request->input('nome'),
                    "descricao" => $request->input('descricao'),
                    "morada" => $request->input('morada'),
                    "contacto" => $request->input('contacto'),
                    "email" => $request->input('email'),
                    "site" => $request->input('site'),
                    "lat" => $request->input('lat'),
                    "lng" => $request->input('lng'),
                ]);
    
                $imagem->save();
    
                return view('/backoffice/painel');
            }
    
            
        }
    
        public function edit($id)
        {
            $associacao = Associaco::find($id);
            return view('backoffice.freguesia.Associacoes.editAssociacao', compact('associacao'));
        }
    
        public function update(Request $request, $id){
            $temimagem=0;
    
            if($request->hasFile('file')){
                $temimagem=1;
                $request->validate([
                    'image'=>'mimes:jpeg,bmp,png'
                ]);
    
            $request->file->store('associacoes', 'public');
            }
    
            $associacao = Associaco::find($id);
            $associacao->nome = $request->input('nome');
            $associacao->descricao = $request->input('descricao');
            $associacao->morada = $request->input('morada');
            $associacao->contacto = $request->input('contacto');
            $associacao->email = $request->input('email');
            $associacao->site = $request->input('site');
            $associacao->lat = $request->input('lat');
            $associacao->lng = $request->input('lng');
            if($temimagem == 1){
            $associacao->foto = $request->file->hashName();
            }
            $associacao->update();
            //return view('/backoffice/painel');
            //return redirect()->back()->with('status','OndeComer Updated Successfully');
            return redirect()->route('painel');
        }
    
        public function destroy($id)
        {
            $associacao = Associaco::find($id);
            $associacao->delete();
            return redirect()->route('painel');
        }
    
    
}
