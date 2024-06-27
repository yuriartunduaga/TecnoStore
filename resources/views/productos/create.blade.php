@extends('layouts.app')

@section('titulo','Producto')

@section('contenido')
<br>
<h2>Registrar nuevo producto</h2>
<br>
<form action="/productos" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre Producto</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
      </div>
    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción Producto</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Valor con Iva</label>
        <input type="number" class="form-control" id="precio" name="precio">
      </div>
      <br>
      <div class="form-group">
        <br>
        <input name="imagen" id="imagen" type="file">
        <br>
    </div>

      <button type="submit" class="btn btn-outline-success">Guardar</button>

  </form>

@endsection
