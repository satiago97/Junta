<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trilhos;
use App\Models\PontosTrilhos;


class TrilhosController extends Controller
{
   
    public function index(){
        $trilho = Trilhos::all();
        return view('/backoffice/freguesia/Trilhos/insereTrilhos', compact('trilho'));
    }

    public function edit($id)
    {
        $trilho = Trilhos::find($id);
        $pontosTrilho = PontosTrilhos::all();
        return view('/backoffice/freguesia/Trilhos/detalhesTrilhos', compact('trilho','pontosTrilho'));
    }

    public function store(Request $request){

        $trilho = new Trilhos();
        $trilho->nome = $request->input('nome') ;
        $trilho->descricao = $request->input('descricao') ;
        // saving a polygon
        $pontos = $request->input('pontos');
        $trilho->linha = $pontos;
        $trilho->save();
        return view('/backoffice/painel');
    }
    
    public function storePonto(Request $request){

        if($request->hasFile('file')){
            $request->validate([
                'image'=>'mimes:jpeg,bmp,png'
            ]);

            $request->file->store('pontos_trilhos', 'public');

        $ponto = new PontosTrilhos();
        $ponto->nome = $request->input('nome') ;
        $ponto->descricao = $request->input('descricao') ;
        $ponto->imagem = $request->file->hashName();
        $pontos = $request->input('pontos');
        $ponto->coordenadas = $pontos;
        $ponto->id_trilho = $request->input('id_trilho') ;
        $ponto->save();
        return view('backoffice/painel');
    }
}


    
    public function destroy($id)
    {
        $trilho = Trilhos::find($id);
        $trilho->delete();
        return redirect()->route('painel');
    }


}
