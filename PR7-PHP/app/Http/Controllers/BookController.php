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

    public function store()
    {
        return view("create");

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
