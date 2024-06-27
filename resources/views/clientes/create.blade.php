@extends('layouts.app')

@section('titulo','crear cliente')

@section('contenido')
<br>
<h2>Registrar nuevo cliente</h2>
<br>
<form action="/clientes" method="post">
    @csrf
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre Cliente</label>
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="number" class="form-control" id="telefono" name="telefono">
      </div>
      <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion">
      </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo electronico</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <br>
      <div id="emailHelp" class="form-text">Los datos serán tratados bajo la ley 1581 de 2012 </div>
      <br>
        <a href="/clientes" class="btn btn-outline-danger" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-outline-success" tabindex="4">Guardar</button>

  </form>

@endsection
