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

    public function destroy($id){
        $imprensa = Imprensa::find($id);

        $imprensa->delete();

        return back();
    }



}
