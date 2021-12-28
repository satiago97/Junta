<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategoriaGalerium;
use App\Models\Galerium;
use Illuminate\Http\Request;

class GalleryController extends Controller
{


    public function index(){
        $galeria = Galerium::all();
        $categoriasGaleria = CategoriaGalerium::all();
        return view('/backoffice/insereGaleria', compact('galeria', 'categoriasGaleria'));
    }


    public function store(Request $request){

        if($request->hasFile('file')){
            $request->validate([
                'image'=>'mimes:jpeg,bmp,png'
            ]);

            $request->file->store('galeria', 'public');

            $imagem = new Galerium([
                "imagem" => $request->file->hashName(),
                "id_freguesia" => '1',
                "id_categoria" => '1',
                "nome" => $request->input('nome'), 
            ]);

            $imagem->save();

            return view('/backoffice/painel');
        }

        
    }

    public function open($id_categoria){
        $galeria = Galerium::find($id_categoria);

        return view('backoffice.editaGaleria', compact('galeria'));

    }
}
