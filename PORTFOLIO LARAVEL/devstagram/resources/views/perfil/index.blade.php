@extends('layouts.app')

@section('titulo')
    Editar Perfil: {{ auth()->user()->username }}
@endsection


@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form class="mt-10 md:mt-0" action="">
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="username">UserName</label>
                    <input 
                        type="text" 
                        name="username" 
                        id="username"
                        placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"  
                        value="{{auth()->user()->username}}"
                        />
                        @error('username')
                            <p class="bg-red-500 text-white my-2 rounded-lg 
                            text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="imagen">Imagen de Perfil</label>
                    <input 
                        type="file" 
                        name="imagen" 
                        id="imagen"
                        placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"  
                        value="{{auth()->user()->username}}"
                        />
                        @error('username')
                            <p class="bg-red-500 text-white my-2 rounded-lg 
                            text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                </div>
            </form>
        </div>
    </div>
@endsection