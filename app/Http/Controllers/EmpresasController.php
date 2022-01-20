<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\CategoriaEmpresa;


class EmpresasController extends Controller
{
    public function index(){
        $empresa = Empresa::all();
        $empresaCategoria = CategoriaEmpresa::all();
        return view('/backoffice/freguesia/Empresas/insereEmpresa', compact('empresa','empresaCategoria'));
    }

    public function index2(){
        $empresa = Empresa::all();
        $empresaCategoria = CategoriaEmpresa::all();
        return view('/site/freguesia/Empresas/empresas', compact('empresa','empresaCategoria'));
    }

    public function detalhes($id)
    {
        $empresa = Empresa::find($id);
        $empresaCategoria = CategoriaEmpresa::all();
        return view('/site/freguesia/Empresas/detalhesEmpresa', compact('empresa','empresaCategoria'));
    }

    public function store(Request $request){

        if($request->hasFile('file')){
            $request->validate([
                'image'=>'mimes:jpeg,bmp,png'
            ]);

            $request->file->store('Empresas', 'public');

            $imagem = new Empresa([
                "foto" => $request->file->hashName(),
                "id_freguesia" => '1',
                "nome" => $request->input('nome'),
                "descricao" => $request->input('descricao'),
                "morada" => $request->input('morada'),
                "contacto" => $request->input('contacto'),
                "email" => $request->input('email'),
                "facebook" => $request->input('facebook'),
                "site" => $request->input('site'),
                "lat" => $request->input('lat'),
                "lng" => $request->input('lng'),
                "categoria" => $request->input('categoria'),
            ]);

            $imagem->save();

            return view('/backoffice/painel');
        }

        
    }

    public function edit($id)
    {
        $empresa = Empresa::find($id);
        return view('backoffice.freguesia.Empresas.editEmpresa', compact('empresa'));
    }

    public function update(Request $request, $id){
        $temimagem=0;

        if($request->hasFile('file')){
            $temimagem=1;
            $request->validate([
                'image'=>'mimes:jpeg,bmp,png'
            ]);

        $request->file->store('ondeDormir', 'public');
        }

        $empresa = Empresa::find($id);
        $empresa->nome = $request->input('nome');
        $empresa->descricao = $request->input('descricao');
        $empresa->morada = $request->input('morada');
        $empresa->contacto = $request->input('contacto');
        $empresa->email = $request->input('email');
        $empresa->facebook = $request->input('facebook');
        $empresa->site = $request->input('site');
        $empresa->lat = $request->input('lat');
        $empresa->lng = $request->input('lng');
        if($temimagem == 1){
        $empresa->imagem = $request->file->hashName();
        }
        $empresa->update();
        //return view('/backoffice/painel');
        //return redirect()->back()->with('status','ondeDormir Updated Successfully');
        return redirect()->route('painel');
    }

    public function destroy($id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();
        return redirect()->route('painel');
    }

}
