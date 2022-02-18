@extends('adminlte::page')

@section('title', 'CRUD - Articulos')

@section('content_header')
    <h2>Editar Articulo</h2>
@stop

@section('content')
    <form action="/articulos/{{$articulo->id}}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="codigo" class="form-label">Codigo</label>
            <input type="text" name="codigo" id="codigo" tabindex="1" value="{{$articulo->codigo}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">descripcion</label>
            <input type="text" name="descripcion" id="descripcion" tabindex="2" value="{{$articulo->descripcion}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">cantidad</label>
            <input type="number" name="cantidad" id="cantidad" tabindex="3" value="{{$articulo->cantidad}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">precio</label>
            <input type="number" step="any" name="precio" id="precio" tabindex="4" value="{{$articulo->precio}}" class="form-control">
        </div>
        <a href="/articulos" class="btn btn-secondary btn-lg" role="button">Cancelar</a>
    <button type="submit" class="btn btn-info btn-lg">Editar</button>
    </form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop