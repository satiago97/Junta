<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Incidente;
use App\Models\TipoIncidente;
use App\Models\TipoSituacao;




class IncidentesController extends Controller
{
        //
        public function index(){
            $incidente = Incidente::all();
            $tipoIncidente = TipoIncidente::all();
            return view('/backoffice/freguesia/OndeComer/insereOndeComer', compact('incidente','tipoIncidente'));
        }
    
        public function index2(){
            $incidente = Incidente::all();
            $tipoIncidente = TipoIncidente::all();
            $tipoSituacao = TipoSituacao::all();
            return view('/site/autarquia/Incidentes/incidentes', compact('incidente','tipoIncidente','tipoSituacao'));
        }
    
        public function store(Request $request){
    
            if($request->hasFile('file')){
                $request->validate([
                    'image'=>'mimes:jpeg,bmp,png'
                ]);
    
                $request->file->store('incidentes', 'public');
    
                $imagem = new Incidente([
                    "imagem" => $request->file->hashName(),
                    "id_freguesia" => '1',
                    "estado" => 'Por tratar',
                    "tipo_incidente" => $request->input('categoria'),
                    "tipo_situacao" => $request->input('tipo_situacao'),
                    "nome" => $request->input('nome'),
                    "morada" => $request->input('morada'),
                    "contacto" => $request->input('contacto'),
                    "email" => $request->input('email'),
                    "mensagem" => $request->input('mensagem'),
                    "ponto" => $request->input('pontos'),
                ]);
    
                $imagem->save();
    
                return redirect()->route('Incidentes');
            }
    
            
        }
    
        public function update(Request $request, $id){

            $incidente = Incidente::find($id);
            $incidente->estado = $request->input('estado');
            $incidente->update();
            //return view('/backoffice/painel');
            //return redirect()->back()->with('status','OndeComer Updated Successfully');
            return redirect()->route('painel');
        }
    
        public function destroy($id)
        {
            $incidente = Incidente::find($id);
            $incidente->delete();
            return redirect()->route('painel');
        }
}
