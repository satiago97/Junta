<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servico;

class ServicosController extends Controller
{
     //
     public function index(){
        $servicos = Servico::all();
        return view('/backoffice/autarquia/Servicos/insereServicos', compact('servicos'));
    }

    public function index2(){
        $servicos = Servico::all();
        return view('/site/autarquia/Servicos/Servicos', compact('servicos'));
    }

    public function detalhes($id)
    {
        $servico = Servico::find($id);
        return view('/site/autarquia/Servicos/detalhesServico', compact('servico'));
    }

    public function store(Request $request){

        if($request->hasFile('file')){
            $request->validate([
                'image'=>'mimes:jpeg,bmp,png'
            ]);

            $request->file->store('Servicos', 'public');

            $imagem = new Servico([
                "foto" => $request->file->hashName(),
                "id_freguesia" => '1',
                "titulo" => $request->input('titulo'),
                "descricao" => $request->input('descricao'),
            ]);

            $imagem->save();

            return view('/backoffice/painel');
        }

        
    }

    public function edit($id)
    {
        $servico = Servico::find($id);
        return view('backoffice.autarquia.Servicos.editServico', compact('servico'));
    }

    public function update(Request $request, $id){
        $temimagem=0;

        if($request->hasFile('file')){
            $temimagem=1;
            $request->validate([
                'image'=>'mimes:jpeg,bmp,png'
            ]);

        $request->file->store('Servicos', 'public');
        }

        $servicos = Servico::find($id);
        $servicos->titulo = $request->input('titulo');
        $servicos->descricao = $request->input('descricao');
        if($temimagem == 1){
        $servicos->foto = $request->file->hashName();
        }
        $servicos->update();
        return redirect()->route('painel');
    }

    public function destroy($id)
    {
        $servicos = Servico::find($id);
        $servicos->delete();
        return redirect()->route('painel');
    }


}
