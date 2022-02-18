@extends('adminlte::page')

@section('title', 'CRUD - clientes')

@section('content_header')
<h1>Listado de Clientes</h1>
@stop

@section('content')
    <a class="btn btn-danger mb-3" href="clientes/create" role="button">Nuevo Cliente</a>
    <table id="clientes" class="table table-dark table-striped mt-4 shadow mt-4">
        <thead class="lg-default text-white">
            <tr>
                <th scope="col">DNI</th>
                <th scope="col">nombre</th>
                <th scope="col">apellido</th>
                <th scope="col">cbu</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente->dni}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->cbu}}</td>
                <td>
                    <form action="{{ route ('clientes.destroy',$cliente->id)}}" method="POST">
                        <a class = "btn btn-info" href="/clientes/{{ $cliente->id}}/edit">Editar</a>
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
      $('#clientes').DataTable({
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
      });
  } );
</script>
@stop