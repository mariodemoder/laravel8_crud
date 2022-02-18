@extends('adminlte::page')

@section('title', 'CRUD - Articulos')

@section('content_header')
<h2>NUEVO ARTICULO</h2>
@stop

@section('content')

<form action="/articulos" method="post">
    @csrf
    <div class="mb-3">
        <label for="codigo" class="form-label">Codigo</label>
        <input type="text" name="codigo" id="codigo" tabindex="1" class="form-control">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">descripcion</label>
        <input type="text" name="descripcion" id="descripcion" tabindex="2" class="form-control">
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">cantidad</label>
        <input type="number" name="cantidad" id="cantidad" tabindex="3" class="form-control">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">precio</label>
        <input type="number" step="any" value="0000.00" name="precio" id="precio" tabindex="4" class="form-control">
    </div>
    <a href="/articulos" class="btn btn-secondary btn-lg" role="button">Cancelar</a>
<button type="submit" class="btn btn-success btn-lg">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop