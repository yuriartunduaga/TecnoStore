@extends('layouts.app')

@section('titulo','Editar Cliente')

@section('contenido')
<br>
<h2>Editar Cliente</h2>
<br>
<form action="/clientes/{{$cliente->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre Cliente</label>
      <input type="text" class="form-control" id="nombre" name="nombre" value="{{$cliente->nombre}}">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="number" class="form-control" id="telefono" name="telefono" value="{{$cliente->telefono}}">
      </div>
      <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{$cliente->direccion}}">
      </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo electronico</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$cliente->email}}">
      </div>
      <br>
      <div id="emailHelp" class="form-text">Los datos serán tratados bajo la ley 1581 de 2012 </div>
      <br>
        <a href="/clientes" class="btn btn-outline-danger" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-outline-success" tabindex="4">Guardar</button>

  </form>

@endsection
