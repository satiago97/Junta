<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OndeComer;
use App\Models\CategoriaOndeComer;


class OndeComerController extends Controller
{
    //
    public function index(){
        $ondeComer = OndeComer::all();
        $ondeComerCategoria = CategoriaOndeComer::all();
        return view('/backoffice/freguesia/OndeComer/insereOndeComer', compact('ondeComer','ondeComerCategoria'));
    }

    public function index2(){
        $ondeComer = OndeComer::all();
        $ondeComerCategoria = CategoriaOndeComer::all();
        return view('/site/freguesia/OndeComer/onde-Comer', compact('ondeComer','ondeComerCategoria'));
    }

    public function detalhes($id)
    {
        $ondeComer = OndeComer::find($id);
        return view('/site/freguesia/OndeComer/detalhesOndeComer', compact('ondeComer'));
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
                "id_categoria" => $request->input('categoria'),
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

    public function edit($id)
    {
        $ondeComer = OndeComer::find($id);
        return view('backoffice.freguesia.OndeComer.editOndeComer', compact('ondeComer'));
    }

    public function update(Request $request, $id){
        $temimagem=0;

        if($request->hasFile('file')){
            $temimagem=1;
            $request->validate([
                'image'=>'mimes:jpeg,bmp,png'
            ]);

        $request->file->store('ondeComer', 'public');
        }

        $ondeComer = OndeComer::find($id);
        $ondeComer->nome = $request->input('nome');
        $ondeComer->descricao = $request->input('descricao');
        $ondeComer->morada = $request->input('morada');
        $ondeComer->contacto = $request->input('contacto');
        $ondeComer->email = $request->input('email');
        $ondeComer->site = $request->input('site');
        $ondeComer->lat = $request->input('lat');
        $ondeComer->lng = $request->input('lng');
        if($temimagem == 1){
        $ondeComer->imagem = $request->file->hashName();
        }
        $ondeComer->update();
        //return view('/backoffice/painel');
        //return redirect()->back()->with('status','OndeComer Updated Successfully');
        return redirect()->route('painel');
    }

    public function destroy($id)
    {
        $ondeComer = OndeComer::find($id);
        $ondeComer->delete();
        return redirect()->route('painel');
    }

}
