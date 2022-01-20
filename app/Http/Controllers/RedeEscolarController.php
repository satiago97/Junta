<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Escola;
use Illuminate\Http\Request;

class RedeEscolarController extends Controller
{
    public function indexBackoffice(){
        $redeEscolar = Escola::all();

        return view('/backoffice/freguesia/RedeEscolar/redeEscolarBackoffice', compact('redeEscolar'));
    }

    public function indexSite(){
        $redeEscolar = Escola::all();
        return view('/redeEscolar', compact('redeEscolar'));
    }


    public function create(){
        return view('/backoffice/freguesia/RedeEscolar/insereRedeEscolar');
    }


    public function store(Request $request){
        if($request->hasFile('file')){
            $request->validate([
                'file'=>'mimes:jpeg,bmp,png'
            ]);


            $request->file->store('redeEscolar', 'public');
            $doc = new Escola([
                "id_freguesia" => '1',
                "nome" => $request->input('nome'),
                "descricao" => $request->input('descricao'),
                "morada" => $request->input('morada'),
                "lat" => $request->input('lat'),
                "lng" => $request->input('lng'), 
                "foto" => $request->file->hashName(),
                "link" => $request->input('link')

            ]);
            $doc->save();

            return view('/backoffice/painel');
        }
    }

    public function update(Request $request, $id){
        $redeEscolar = Escola::find($id);
        $redeEscolar->nome = $request->input('nome');
        $redeEscolar->descricao = $request->input('descricao');
        $redeEscolar->morada = $request->input('morada');
        $redeEscolar->lat = $request->input('lat');
        $redeEscolar->lng = $request->input('lng');
        $redeEscolar->link = $request->input('link');



        $redeEscolar->update();


        return redirect()->route('painel')->with('status', 'Rede escolar editada com sucesso!');
    }


    public function open($id){
        $redeEscolar = Escola::all()->where('id', $id);
        return view('/backoffice/freguesia/RedeEscolar/editaRedeEscolar', compact('redeEscolar'));
    }

    public function openSite($id){
        $redeEscolar = Escola::all()->where('id', $id);
        return view('escola', compact('redeEscolar'));
    }

    public function destroy($id){
            $redeEscolar = Escola::find($id);

            $redeEscolar->delete();
            return back();
    }



}
