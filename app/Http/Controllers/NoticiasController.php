<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function indexBackoffice(){
        $noticias = Noticia::all();

        return view('/backoffice/autarquia/noticias/noticiasBackoffice', compact('noticias'));
    }

    public function create(){
        
        return view('/backoffice/autarquia/noticias/insereNoticias');
    }


    public function store(Request $request){
        if($request->hasFile('file')){
            $request->validate([
                'image'=>'mimes:jpeg,bmp,png'
            ]);

            $request->file->store('noticias', 'public');

            $doc = new Noticia([
                "id_freguesia" => '1',
                "titulo" => $request->input('titulo'),
                "descricao" => $request->input('descricao'),
                "foto" => $request->file->hashName(),
            ]);

            $doc->save();

            return view('/backoffice/painel');

        }
        
    }


    public function destroy($id){
        $noticia = Noticia::find($id);
        $noticia->delete();


        return back();

    }
}
