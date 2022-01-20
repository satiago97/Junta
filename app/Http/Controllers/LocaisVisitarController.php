<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PontosInteresse;
use App\Models\CategoriaPontoInteresse;

class LocaisVisitarController extends Controller
{
        //
        public function index(){
            $pontoInteresse = PontosInteresse::all();
            $pontoInteresseCategoria = CategoriaPontoInteresse::all();
            return view('/backoffice/freguesia/Locais/insereLocal', compact('pontoInteresse','pontoInteresseCategoria'));
        }
    
        public function index2(){
            $pontoInteresse = PontosInteresse::all();
            $pontoInteresseCategoria = CategoriaPontoInteresse::all();
            return view('/site/freguesia/Locais-a-Visitar/locaisVisitar', compact('pontoInteresse','pontoInteresseCategoria'));
        }
    
        public function detalhes($id)
        {
            $pontoInteresse = PontosInteresse::find($id);
            return view('/site/freguesia/Locais-a-Visitar/detalhesLocal', compact('pontoInteresse'));
        }
    
        public function store(Request $request){
    
            if($request->hasFile('file')){
                $request->validate([
                    'image'=>'mimes:jpeg,bmp,png'
                ]);
    
                $request->file->store('locais', 'public');
    
                $imagem = new PontosInteresse([
                    "foto" => $request->file->hashName(),
                    "id_freguesia" => '1',
                    "id_categoria" => $request->input('categoria'),
                    "nome" => $request->input('nome'),
                    "descricao" => $request->input('descricao'),
                    "morada" => $request->input('morada'),
                    "lat" => $request->input('lat'),
                    "lng" => $request->input('lng'),
                ]);
    
                $imagem->save();
    
                return view('/backoffice/painel');
            }
    
            
        }
    
        public function edit($id)
        {
            $pontoInteresse = PontosInteresse::find($id);
            return view('backoffice.freguesia.Locais.editLocal', compact('pontoInteresse'));
        }
    
        public function update(Request $request, $id){
            $temimagem=0;
    
            if($request->hasFile('file')){
                $temimagem=1;
                $request->validate([
                    'image'=>'mimes:jpeg,bmp,png'
                ]);
    
            $request->file->store('locais', 'public');
            }
    
            $pontoInteresse = PontosInteresse::find($id);
            $pontoInteresse->nome = $request->input('nome');
            $pontoInteresse->descricao = $request->input('descricao');
            $pontoInteresse->morada = $request->input('morada');
            $pontoInteresse->lat = $request->input('lat');
            $pontoInteresse->lng = $request->input('lng');
            if($temimagem == 1){
            $pontoInteresse->foto = $request->file->hashName();
            }
            $pontoInteresse->update();
            //return view('/backoffice/painel');
            //return redirect()->back()->with('status','OndeComer Updated Successfully');
            return redirect()->route('painel');
        }
    
        public function destroy($id)
        {
            $pontoInteresse = PontosInteresse::find($id);
            $pontoInteresse->delete();
            return redirect()->route('painel');
        }
    
}
