<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Imprensa;
use Illuminate\Http\Request;

class ImprensaController extends Controller
{
    public function indexBackoffice(){
        $imprensa = Imprensa::all();

        return view('/backoffice/freguesia/Imprensa/imprensaBackoffice', compact('imprensa'));
    }

    public function index(){
        $imprensa = Imprensa::all();
        return view('/site/freguesia/imprensa/imprensa', compact('imprensa'));
    }

    public function create(){
        return view('/backoffice/freguesia/imprensa/insereImprensa');
    }


    public function store(Request $request){
        if($request->hasFile('file')){
            $request->validate([
                'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            ]);

            $request->file->store('imprensa', 'public');
            $doc = new Imprensa([
                "id_freguesia" => '1',
                "nome" => $request->input('nome'),
                "data" => $request->input('data'),
                "pdf" => $request->file->hashName(),
            ]);
            $doc->save();

            return view('/backoffice/painel');
        }
        
    }


    public function open($id){
            $imprensa = Imprensa::all()->where('id', $id);
            return view('/backoffice/freguesia/imprensa/editaImprensa', compact('imprensa'));
        }
    


    public function update(Request $request, $id){
        $imprensa = Imprensa::find($id);
        $imprensa->nome = $request->input('nome');
        $imprensa->data = $request->input('data');



        $imprensa->update();


        return redirect()->route('painel')->with('status', 'Imprensa editada com sucesso');
        }



    public function destroy($id){
        $imprensa = Imprensa::find($id);

        $imprensa->delete();

        return back();
    }



}
