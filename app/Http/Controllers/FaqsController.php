<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function indexBackoffice(){
        $faqs = Faq::all();
        
        return view('/backoffice/faqsBackoffice', compact('faqs'));
    }

    public function indexSite(){
        $faqs = Faq::all();
        return view('/faqs', compact('faqs'));
    }

    public function create(){
        return view('/backoffice/insereFaqs');
    }

    public function store(Request $request){
        $doc = new Faq([
            "id_freguesia" => '1',
            "titulo" => $request->input('titulo'),
            "texto" => $request->input('texto')
        ]);


        $doc->save();


        return view('/backoffice/painel');
    }


    public function destroy($id){
        $faqs = Faq::find($id);

        $faqs->delete();
        return back();
    }


    public function open($id){
        $faqs = Faq::all()->where('id', $id);
        return view('/backoffice/editaFaqs', compact('faqs'));
    }

    public function update(Request $request, $id){
        $faqs = Faq::find($id);

        $faqs->titulo = $request->input('titulo');
        $faqs->texto = $request->input('texto');


        $faqs->update();
        return redirect()->route('painel')->with('status', 'Faq atualizada com sucesso');
     }
}
