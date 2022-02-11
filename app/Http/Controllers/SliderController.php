<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    //  
    public function index(){
        $slider = Slider::all();
        return view('/backoffice/Slider/insereSlider', compact('slider'));
    }


    public function edit($id)
    {
        $slide = Slider::find($id);
        return view('/backoffice/Slider/editSlide', compact('slide'));
    }


    public function store(Request $request){

        if($request->hasFile('file')){
            $request->validate([
                'image'=>'mimes:jpeg,bmp,png'
            ]);

        $request->file->store('Slider', 'public');

        $slider = new Slider();
        $slider->titulo = $request->input('titulo') ;
        $slider->subtitulo = $request->input('subtitulo') ;
        $slider->textobotao = $request->input('textobotao') ;
        $slider->descricao = $request->input('descricao') ;
        $slider->link = $request->input('link') ;
        $slider->imagem = $request->file->hashName();
     
        $slider->save();
        return view('backoffice/painel');
    }
}


    
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('painel');
    }

        
    public function update(Request $request, $id){
        $temimagem=0;

        if($request->hasFile('file')){
            $temimagem=1;
            $request->validate([
                'image'=>'mimes:jpeg,bmp,png'
            ]);

        $request->file->store('Slider', 'public');
        }

        $slider = Slider::find($id);
        $slider->titulo = $request->input('titulo') ;
        $slider->subtitulo = $request->input('subtitulo') ;
        $slider->textobotao = $request->input('textobotao') ;
        $slider->descricao = $request->input('descricao') ;
        $slider->link = $request->input('link') ;
        if($temimagem == 1){
        $slider->imagem = $request->file->hashName();
        }
        $slider->update();
        return redirect()->route('slider');
    }

}
