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

    public function indexSite(){
        $agenda = Agenda::all();

        return view('/agenda', compact('agenda'));
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

    public function open($id){
        $agenda = Agenda::all()->where('id', $id);
        return view('/backoffice/freguesia/Agenda/editAgenda', compact('agenda'));

    }

    public function openSite($id){
        $agenda = Agenda::all()->where('id', $id);
       
        return view('/agendaDetalhes', compact('agenda'));
    }

    public function update(Request $request, $id){
        $agenda = Agenda::find($id);

        $agenda->titulo = $request->input('titulo');
        $agenda->descricao = $request->input('descricao');
        $agenda->data_inicio = $request->input('data_inicio');
        $agenda->data_fim = $request->input('data_fim');
        $agenda->link = $request->input('link');
        $agenda->hora = $request->input('hora');



        $agenda->update();


        return redirect()->route('painel')->with('status', 'Agenda atualizada com sucesso');

    }



    public function destroy($id){

        $agenda = Agenda::find($id);
        $agenda->delete();

        return back();

    }


}
