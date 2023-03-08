<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {   
        $books = DB::table('books')->get();
        return view('index',['books' => $books]);
    }

    public function create()
    {
        return view('createBook'); 
    }

    public function show($id)
    {
        $book = DB::table('books')->where('id', $id)->get();
        return view('show',['book' => $book[0]]);
    }

    public function store(Request $request)
    {
        dd($request);
        
            $this->validate($request, [
                'isbn' => 'required|unique:books|min:13|max:13',
                'author' => 'required',
                'title' => 'required',
                'date_published' => 'required|date',
                'description' => 'required',
                'price' => 'required'
            ]);

            $book = DB::table('books')->insert([
                'isbn' => $request->isbn,
                'author' =>  $request->author,
                'title' =>  $request->title,
                'date_published' =>  $request->fecha_publicacion,
                'description' =>  $request->descripcion,
                'price' =>  $request->precio
            ]);

    }
    public function edit()
    {
        
    }
    public function update()
    {
        
    }
    public function destroy()
    {
        
    }
}
