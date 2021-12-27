<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Historium;

class InsertHistoryController extends Controller
{
    public function index(){
        $historia = Historium::all();
        return view('/backoffice/insereHistoria', compact('historia'));
    }

    public function indexPagina(){
        $historia = Historium::all();
        return view('/historia', compact('historia'));
    }



    public function store(Request $request){
        $this->validate(request(), [
            'titulo' => 'required',
            'descricao' => 'required'
        ]);


        $historia = new Historium(
            [
                "titulo" => $request->input('titulo'),
                "descricao" => $request->input('descricao'),
                "id_freguesia" => '1',
            ]);


            $historia->save();


            return view('backoffice/painel');
}


public function update(Request $request, $id){
    $historia = Historium::find($id);
    $historia->titulo = $request->input('titulo');
    $historia->descricao = $request->input('descricao');

    $historia->update();

    return redirect()->route('painel');

}

}
