<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OndeDormir;
use App\Models\CategoriaOndeDormir;

class OndeDormirController extends Controller
{
       //
        public function index(){
            $ondeDormir = OndeDormir::all();
            return view('/backoffice/freguesia/OndeDormir/insereOndeDormir', compact('ondeDormir'));
        }
    
        public function index2(){
            $ondeDormir = OndeDormir::all();
            return view('/site/freguesia/OndeDormir/onde-Dormir', compact('ondeDormir'));
        }

        public function detalhes($id)
        {
            $ondeDormir = OndeDormir::find($id);
            return view('/site/freguesia/OndeDormir/detalhesOndeDormir', compact('ondeDormir'));
        }
    
        public function store(Request $request){
    
            if($request->hasFile('file')){
                $request->validate([
                    'image'=>'mimes:jpeg,bmp,png'
                ]);
    
                $request->file->store('ondeDormir', 'public');
    
                $imagem = new ondeDormir([
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
            $ondeDormir = OndeDormir::find($id);
            return view('backoffice.freguesia.OndeDormir.editOndeDormir', compact('ondeDormir'));
        }
    
        public function update(Request $request, $id){
            $temimagem=0;
    
            if($request->hasFile('file')){
                $temimagem=1;
                $request->validate([
                    'image'=>'mimes:jpeg,bmp,png'
                ]);
    
            $request->file->store('ondeDormir', 'public');
            }
    
            $ondeDormir = ondeDormir::find($id);
            $ondeDormir->nome = $request->input('nome');
            $ondeDormir->descricao = $request->input('descricao');
            $ondeDormir->morada = $request->input('morada');
            $ondeDormir->contacto = $request->input('contacto');
            $ondeDormir->email = $request->input('email');
            $ondeDormir->site = $request->input('site');
            $ondeDormir->lat = $request->input('lat');
            $ondeDormir->lng = $request->input('lng');
            if($temimagem == 1){
            $ondeDormir->imagem = $request->file->hashName();
            }
            $ondeDormir->update();
            //return view('/backoffice/painel');
            //return redirect()->back()->with('status','ondeDormir Updated Successfully');
            return redirect()->route('painel');
        }
    
        public function destroy($id)
        {
            $ondeDormir = OndeDormir::find($id);
            $ondeDormir->delete();
            return redirect()->route('painel');
        }
    
    }

