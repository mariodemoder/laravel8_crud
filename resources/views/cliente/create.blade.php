@extends('adminlte::page')

@section('title', 'CRUD - Articulos')

@section('content_header')
<h2>NUEVO CLIENTE</h2>
@stop

@section('content')

<form action="/clientes" method="post">
    @csrf
    <div class="mb-3">
        <label for="dni" class="form-label">DNI</label>
        <input type="number" name="dni" id="dni" tabindex="1" class="form-control">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">nombre</label>
        <input type="text" name="nombre" id="nombre" tabindex="2" class="form-control">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">apellido</label>
        <input type="text" name="apellido" id="apellido" tabindex="3" class="form-control">
    </div>
    <div class="mb-3">
        <label for="cbu" class="form-label">cbu</label>
        <input type="text" name="cbu" id="cbu" tabindex="4" class="form-control">
    </div>

    <a href="/clientes" class="btn btn-secondary btn-lg" role="button">Cancelar</a>
<button type="submit" class="btn btn-success btn-lg">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop