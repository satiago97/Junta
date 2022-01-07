<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paroquium;

class ParoquiaController extends Controller
{
    //

    public function index(){
        $paroquia = Paroquium::all();
        return view('/backoffice/freguesia/Paroquia/insereParoquia', compact('paroquia'));
    }

    public function indexPagina(){
        $paroquia = Paroquium::all();
        return view('site/freguesia/Paroquia/paroquia', compact('paroquia'));
    }

    public function store(Request $request){

        if($request->hasFile('file')){
            $request->validate([
                'image'=>'mimes:jpeg,bmp,png'
            ]);

            $request->file->store('paroquia', 'public');

            $imagem = new Paroquium([
                "foto" => $request->file->hashName(),
                "id_freguesia" => '1',
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
    public function update(Request $request, $id){
        $temimagem=0;

        if($request->hasFile('file')){
            $temimagem=1;
            $request->validate([
                'image'=>'mimes:jpeg,bmp,png'
            ]);

        $request->file->store('paroquia', 'public');
        }

        $paroquia = Paroquium::find($id);
        $paroquia->nome = $request->input('nome');
        $paroquia->descricao = $request->input('descricao');
        $paroquia->morada = $request->input('morada');
        $paroquia->lat = $request->input('lat');
        $paroquia->lng = $request->input('lng');
        if($temimagem == 1){
        $paroquia->imagem = $request->file->hashName();
        }
        $paroquia->update();
        //return view('/backoffice/painel');
        //return redirect()->back()->with('status','OndeComer Updated Successfully');
        return redirect()->route('painel');
    }
}
