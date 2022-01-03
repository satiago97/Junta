<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CarecterizacaoFreguesium;
use Illuminate\Http\Request;

class Caracterizacao extends Controller
{
    public function index(){
        $caracterizacao = CarecterizacaoFreguesium::all();
        return view('/backoffice/insereCaracterizacao', compact('caracterizacao'));
    }


    public function indexSite(){
        $caracterizacao = CarecterizacaoFreguesium::all();
        return view('/caracterizacao', compact('caracterizacao'));
    }


    public function update(Request $request, $id){
        $caracterizacao = CarecterizacaoFreguesium::find($id);
        $caracterizacao->titulo = $request->input('titulo');
        $caracterizacao->descricao = $request->input('descricao');

        $caracterizacao->update();

        return redirect()->route('painel');
    }
}
