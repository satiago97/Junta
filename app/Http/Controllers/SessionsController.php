<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){
        return view('login');
    }


    public function store(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors(['message' => 'O e-mail ou a password estão errados, tente outra vez!']);
        }

        return redirect()->to('/backoffice');
    }

    public function destroy(){
        auth()->logout();

        return redirect()->to('/login');
    }
}
