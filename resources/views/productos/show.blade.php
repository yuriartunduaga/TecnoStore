@extends('layouts.app')

@section('titulo','Detalle Producto')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($productos->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$productos->descripcion}}</p>
    </div>
    <br>
    <a href="/productos/{{$productos->id}}/edit" class="btn btn-outline-secondary">Editar Producto</a>

</div>

@endsection
