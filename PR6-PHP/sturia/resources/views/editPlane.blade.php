@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Avión</h1>
    <form action="/sturia/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $avion->id }}">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $avion->nombre }}">
        </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $avion->modelo }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
