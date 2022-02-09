<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use App\Models\ContactosGerai;
use Illuminate\Http\Request;

class ContactosGeraisController extends Controller
{
    public function indexBackoffice(){
        $contactos = ContactosGerai::all();

        return view('/backoffice/contactosGeraisBackoffice', compact('contactos'));
    }

    public function indexSite(){
        $contactos = ContactosGerai::all();
        return view('/contactosGerais', compact('contactos'));
    }

    public function create(){
        return view('/backoffice/insereContacto');
    }


    public function store(Request $request){
            $doc = new ContactosGerai([
                "id_freguesia" => '1',
                "titulo" => $request->input('titulo'),
                "morada" => $request->input('morada'),
                "contacto" => $request->input('contacto'),
                "email" => $request->input('email'),
                "horario" => $request->input('horario')

            ]);

            $doc->save();


            return view('/backoffice/painel');
    }

    public function destroy($id){
        $contactos = ContactosGerai::find($id);

        $contactos->delete();
        
        return back();
    }

    public function open($id){
        $contactos = ContactosGerai::all()->where('id', $id);
        return view('/backoffice/editaContacto', compact('contactos'));
    }

    public function update(Request $request, $id){
        $contactos = ContactosGerai::find($id);

        $contactos->titulo = $request->input('titulo');
        $contactos->morada = $request->input('morada');
        $contactos->contacto = $request->input('contacto');
        $contactos->email = $request->input('email');
        $contactos->horario = $request->input('horario');


        $contactos->update();
        return redirect()->route('painel')->with('status', 'Contacto atualizado com sucesso');
    }
}
