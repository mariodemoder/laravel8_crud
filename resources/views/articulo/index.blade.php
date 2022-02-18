@extends('adminlte::page')

@section('title', 'CRUD - Articulos')

@section('content_header')
<h1>Listado de Articulos</h1>
@stop

@section('content')
    <a class="btn btn-warning mb-3" href="articulos/create" role="button">Nuevo Artículo</a>
    <table id="articulos" class="table table-dark table-striped mt-4 shadow mt-4">
        <thead class="lg-default text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">codigo</th>
                <th scope="col">descripcion</th>
                <th scope="col">cantidad</th>
                <th scope="col">precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
            <tr>
                <td>{{$articulo->id}}</td>
                <td>{{$articulo->codigo}}</td>
                <td>{{$articulo->descripcion}}</td>
                <td>{{$articulo->cantidad}}</td>
                <td>{{$articulo->precio}}</td>
                <td>
                    <form action="{{ route ('articulos.destroy',$articulo->id)}}" method="POST">
                        <a class = "btn btn-info" href="/articulos/{{ $articulo->id}}/edit">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class='btn btn-danger'>Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
      $('#articulos').DataTable({
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
      });
  } );
</script>
@stop