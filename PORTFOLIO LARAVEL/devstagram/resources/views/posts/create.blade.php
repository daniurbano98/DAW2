@extends('layouts.app')

@section('titulo')
    Crea una nueva publicación
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form id="dropzone" class="dropzone border-dashed border-2 w-full h-96 
            rounded flex flex-col justify-center items-center" action="">

            </form>
        </div>
        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="titulo">Titulo</label>
                    <input 
                        type="text" 
                        name="titulo" 
                        id="titulo"
                        placeholder="Titulo de la publicación"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"  
                        value="{{old('titulo')}}"
                        />
                        @error('titulo')
                            <p class="bg-red-500 text-white my-2 rounded-lg 
                            text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="descripcion">Descipcion</label>
                    <textarea 
                        type="text" 
                        name="descripcion" 
                        id="descripcion"
                        placeholder="Descripción de la publicación"
                        class="border p-3 w-full rounded-lg @error('descripcion') border-red-500 @enderror"  
                        >{{old('titulo')}}</textarea>
                        @error('titulo')
                            <p class="bg-red-500 text-white my-2 rounded-lg 
                            text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                </div>

                <input type="submit" value="Crear Publicacion" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer 
                uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection