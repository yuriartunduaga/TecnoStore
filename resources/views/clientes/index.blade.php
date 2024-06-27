@extends('layouts.app')

@section('titulo','Clientes')

@section('contenido')
<br>
<a href="clientes/create" class="btn btn-success">CREAR</a>
<br>
<h3 class="text-center">LISTADO DE CLIENTES</h3>
<br>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">EMAIL</th>
            <th scope="col">OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->email}}</td>
            <td>
                <form action="{{ route ('clientes.destroy',$cliente->id)}}" method="POST">
                    <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-success">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>

                </form>

            </td>
        </tr>

        @endforeach
    </tbody>
  </table>

@endsection
