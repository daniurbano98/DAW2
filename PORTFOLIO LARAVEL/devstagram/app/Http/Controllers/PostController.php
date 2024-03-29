<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'index']); //antes de ejecutarse la vista se ejecutará el middleware para comprobar si esta autenticado
                                    //si no lo esta, por defecto, laravel redirige al usuario a una ruta de login
    }

    public function index(User $user) 
    {   
        $posts = Post::where('user_id',$user->id)->paginate(20);

        return view('layouts.dashboards', [
            'user' => $user,
            'posts' => $posts
        ]);
    }

    

    public function create()
    {
         return view('posts.create');
    }

    public function store(Request $request)
    {
        

        $this->validate($request, [
            'titulo'=> 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);

        //Una forma de crear un post
        // Post::create([
        //     'titulo' => $request->titulo,
        //     'descripcion' => $request->descripcion,
        //     'imagen' => $request->imagen,
        //     'user_id' => auth()->user()->id
        // ]);

        //Otra forma
        $request->user()->posts()->create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('posts.index', auth()->user()->username);
    }

    public function show(User $user, Post $post)
    {
        return view('posts.show',[
            'post' => $post,
            'user' => $user
        ]);    
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        // Eliminar la imagen del post
        $imagen_path = public_path('uploads/'.$post->imagen);
        
        if(File::exists($imagen_path)){
            unlink($imagen_path);
        }
        return redirect()->route('posts.index',auth()->user()->username);
    }
}
