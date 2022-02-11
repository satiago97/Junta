<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DocumentosExecutivo;
use App\Models\DetalhesDocumentoExecutivo;
use App\Models\ContactosGerai;
use App\Models\Slider;


class WelcomeController extends Controller
{
    public function index(){
        $docs = DocumentosExecutivo::all()->take(3);
        $dets = DetalhesDocumentoExecutivo::all();
        $contactos = ContactosGerai::all();
        $slider = Slider::all();

        return view('/welcome', compact('docs','dets','contactos','slider'));
    }

}
