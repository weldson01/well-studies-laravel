<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        // mostrar a view users create
        return view('users.create');
    }

    public function store(Request $request){
        // dd($request->all());
        try{
            User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password"=> $request->password
            ]);
    
            return redirect()->route('user.create')->with('success', 'Usuário cadastrado com sucesso!');
        }catch(\Throwable $err){
            return back()->withInput()->with('error', 'Não foi possível cadastrar usuário.');
        }
    }
}
