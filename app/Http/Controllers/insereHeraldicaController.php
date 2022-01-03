<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Heraldica;
use Illuminate\Http\Request;

class insereHeraldicaController extends Controller
{
    public function index(){
        $heraldica = Heraldica::all();
        return view('/backoffice/insereHeraldica', compact('heraldica'));
    }

    public function indexSite(){
        $heraldica = Heraldica::all();
        return view('heraldica', compact('heraldica'));
    }


    public function update(Request $request, $id){
        $heraldica = Heraldica::find($id);

        $heraldica->titulo = $request->input('titulo');
        $heraldica->descricao = $request->input('descricao');

        $heraldica->update();

        return redirect()->route('painel');
    }
}
