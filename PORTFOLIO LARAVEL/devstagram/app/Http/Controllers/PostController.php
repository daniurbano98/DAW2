<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth'); //antes de ejecutarse la vista se ejecutará el middleware para comprobar si esta autenticado
                                    //si no lo esta, por defecto, laravel redirige al usuario a una ruta de login
    }

    public function index(User $user) 
    {
       
        return view('layouts.dashboards', ['user' => $user]);
    }

    public function create()
    {
         return view('posts.create');
    }
}
