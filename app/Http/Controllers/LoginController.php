<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',  
            'password' => 'required'
        ]);

        // Verificar que este autenticado
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) // remember para tener la seción activada
            return back()->with('mensaje', 'Credenciales no son corectas');

        return redirect()->route('posts.index', auth()->User());
    }

}
