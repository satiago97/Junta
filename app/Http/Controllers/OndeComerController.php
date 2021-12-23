<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OndeComer;

class OndeComerController extends Controller
{
    //
    public function index(){
        $ondeComer = OndeComer::all();
        return view('/backoffice/insereOndeComer', compact('ondeComer'));
    }

    public function index2(){
        $ondeComer = OndeComer::all();
        return view('/onde-Comer', compact('ondeComer'));
    }

    public function store(Request $request){

        if($request->hasFile('file')){
            $request->validate([
                'image'=>'mimes:jpeg,bmp,png'
            ]);

            $request->file->store('ondeComer', 'public');

            $imagem = new OndeComer([
                "imagem" => $request->file->hashName(),
                "id_freguesia" => '1',
                "id_categoria" => '1',
                "nome" => $request->input('nome'),
                "descricao" => $request->input('descricao'),
                "morada" => $request->input('morada'),
                "contacto" => $request->input('contacto'),
                "email" => $request->input('email'),
                "site" => $request->input('site'),
                "lat" => $request->input('lat'),
                "lng" => $request->input('lng'),
            ]);

            $imagem->save();

            return view('/backoffice/painel');
        }

        
    }

}
