@extends('adminlte::page')

@section('title', 'CRUD - clientes')

@section('content_header')
    <h2>Editar Cliente</h2>
@stop

@section('content')
    <form action="/clientes/{{$cliente->id}}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="dni" class="form-label">dni</label>
            <input type="number" name="dni" id="dni" tabindex="1" value="{{$cliente->dni}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">nombre</label>
            <input type="text" name="nombre" id="nombre" tabindex="2" value="{{$cliente->nombre}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">apellido</label>
            <input type="text" name="apellido" id="apellido" tabindex="3" value="{{$cliente->apellido}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="cbu" class="form-label">cbu</label>
            <input type="text" name="cbu" id="cbu" tabindex="4" value="{{$cliente->cbu}}" class="form-control">
        </div>
        <a href="/clientes" class="btn btn-secondary btn-lg" role="button">Cancelar</a>
    <button type="submit" class="btn btn-info btn-lg">Editar</button>
    </form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop