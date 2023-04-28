<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function index(User $user)
    {
        return view('auth.sesion');
    }


    public function store(Request $request)
    {
        //dd("Iniciando sesión");
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            //dd("oh no");
            return back()->with('mensaje', 'Usuario o Contraseña incorrecta');
        }
        return redirect()->route('accesoseguro', ['user' => auth()->user()->username]);
    }
}
