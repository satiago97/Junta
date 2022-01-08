<?php

namespace App\Http\Controllers;
use App\Models\Agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function indexBackoffice(){
        $agenda = Agenda::all();

        return view('/backoffice/freguesia/agenda/agendaBackoffice', compact('agenda'));
    }



    public function create(){
        return view('/backoffice/freguesia/agenda/insereAgenda');
    }



    public function store(Request $request){
            if($request->hasFile('file')){
                $request->validate([
                    'image'=>'mimes:jpeg,bmp,png'
                ]);


                $request->file->store('agenda', 'public');


                $doc = new Agenda([
                    "id_freguesia" => '1',
                    "titulo" => $request->input('titulo'),
                    "descricao" => $request->input('descricao'),
                    "imagem" => $request->file->hashName(),
                    "data_inicio" => $request->input('data_inicio'),
                    "data_fim" => $request->input('data_fim'),
                    "link" => $request->input('link'),
                    "hora" => $request->input('hora')
                ]);


                $doc->save();

                return view('/backoffice/painel'); 
            }
    }


    public function destroy($id){

        $agenda = Agenda::find($id);
        $agenda->delete();

        return back();

    }
}
