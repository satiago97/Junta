<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UtilizadoresController extends Controller
{
    //

    public function index(){
        $users = User::all();
        return view('/backoffice/Utilizadores/utilizadores', compact('users'));
    }


public function update1(Request $request, $id){

    $user = User::find($id);
    $user->estado = $request->input('estado');
    $user->update();
    //return view('/backoffice/painel');
    //return redirect()->back()->with('status','OndeComer Updated Successfully');
    return redirect()->route('painel');
}

public function update2(Request $request, $id){

    $user = User::find($id);
    $user->estado = $request->input('estado1');
    $user->update();
    //return view('/backoffice/painel');
    //return redirect()->back()->with('status','OndeComer Updated Successfully');
    return redirect()->route('painel');
}


}
