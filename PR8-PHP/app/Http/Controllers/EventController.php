<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show']); //antes de ejecutarse la vista se ejecutará el middleware para comprobar si esta autenticado
                                    //si no lo esta, por defecto, laravel redirige al usuario a una ruta de login
    }

    public function index(User $user){
        
        $events = Event::where('user_id',$user->id)->paginate(5);
        
        return view('indexEvents',[
            'user'=>$user,
            'events'=>$events
        ]);
    }

    public function create(){

    }

    public function store(){
        
    }

    public function show($id){
        
    }

    public function register($id){
        
    }

    public function storeAttendee($idEvent){
        
    }

    public function edit($id){

    }

    public function update($id){
        
    }

}
