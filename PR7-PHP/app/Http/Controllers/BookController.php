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
    public function show()
    {
        
    }
    public function create()
    {
        
    }
    public function store()
    {
        
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
