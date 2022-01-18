<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jornal;
use Illuminate\Http\Request;

class JornalController extends Controller
{
    public function indexBackoffice(){
        $jornal = Jornal::all();

        return view('/backoffice/freguesia/Jornal/jornalBackoffice', compact('jornal'));
    }


    public function indexSite(){
        $jornal = Jornal::all();

        return view('/jornais', compact('jornal'));
    }

    public function create(){
        return view('/backoffice/freguesia/jornal/insereJornal');
    }



    public function store(Request $request){
        if($request->hasFile('file')){
            $request->validate([
                'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            ]);
        
        if($request->hasFile('image')){
            $request->validate([
                'image'=>'required|mimes:jpeg,bmp,png'
            ]);

            $request->file->store('jornal', 'public');
            $request->image->store('jornal', 'public');

            $doc = new Jornal([
                "id_freguesia" => '1',
                "titulo" => $request->input('titulo'),
                "data" => $request->input('data'),
                "pdf" => $request->file->hashName(),
                "foto" => $request->image->hashName(),
             
            ]);
            
            $doc->save();

            return view('/backoffice/painel');
            }
        }
    }


    public function open($id){
        $jornal = Jornal::all()->where('id', $id);
        return view('/backoffice/freguesia/jornal/editaJornal', compact('jornal'));
    }


    public function update(Request $request, $id){
        $jornal = Jornal::find($id);
        $jornal->titulo = $request->input('titulo');
        $jornal->data = $request->input('data');



        $jornal->update();


        return redirect()->route('painel')->with('status', 'Jornal editado com sucesso');
    }



    public function destroy($id){
        $jornal = Jornal::find($id);

        $jornal->delete();

        return back();
}

}