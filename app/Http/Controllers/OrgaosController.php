<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MembrosOrgaoAutarquia;
use App\Models\Partido;
use App\Models\TipoMembro;
use App\Models\TipoOrgao;
use Illuminate\Http\Request;

class OrgaosController extends Controller
{
    public function indexBackoffice(){
        $orgaos = MembrosOrgaoAutarquia::all();
        return view('/backoffice/autarquia/orgaos/orgaosBackoffice', compact('orgaos'));
    }

    public function indexSite(){
        $orgaos = MembrosOrgaoAutarquia::all();
       
        return view('orgaosAutarquia', compact('orgaos', ));
    }

    public function create(){
        $tipo_membro = TipoMembro::all();
        $tipo_orgao = TipoOrgao::all();
        $partido = Partido::all();
        return view('/backoffice/autarquia/orgaos/insereOrgao', compact('tipo_membro', 'tipo_orgao', 'partido'));
    }



    public function store(Request $request){

        if($request->hasFile('file')){
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png'
            ]);

            $request->file->store('orgaosAutarquia', 'public');

            $orgao = new MembrosOrgaoAutarquia([
                "id_freguesia" => '1',
                "foto" => $request->file->hashName(),
                "tipo_membro" => $request->input('tipoMembro'),
                "tipo_orgao" => $request->input('tipoOrgao'),
                "partido" => $request->input('partido'),
                "nome" => $request->input('nome'),
            ]);

            $orgao->save();

            return view('/backoffice/painel');
    
        }
    }


    public function destroy($id){
        $orgaos = MembrosOrgaoAutarquia::find($id);
        $orgaos->delete();

        return back();
    }
}