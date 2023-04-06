<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    

    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(!auth()->attempt($credentials)){
            //con back puedes volver a la pagina anterior
            //con with puedes guardar datos en una especie de variable de sesion y poder mostarlo por tu vista
            return back()->with('message', 'Credenciales incorrectas. Por favor, vuelve a intentarlo');
            //Vuelve a la pagina anterior con este mensaje: "credenciales incorrectas"
        }
        
        return redirect()->route('events.index', ['user' => auth()->user()->name]);
    }



    public function logout()
    {
        auth()->logout();
        //TODO asignar una ruta para el logout
        return redirect();
    }
}
