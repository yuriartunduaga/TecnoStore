@extends('layouts.app')

@section('titulo','Productos')

@section('contenido')
<br>
<h3 class="text-center">Productos Disponibles</h3>
<br>
<div class="row">
    @foreach ($productos as $externo)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img style="height: 180px; width:200px; margin:20px" src="{{ Storage::url($externo->imagen) }}" class="card-img-top mx-auto d-block" alt="...">

            <div class="card-body">
              <h5 class="card-title">{{$externo->nombre}}</h5>
              <p class="card-text">{{$externo->descripcion}}</p>
              <p class="card-text">{{$externo->precio}}</p>

              <div style="display: flex; justify-content: center; align-items: center;">
                <a href="/productos/{{$externo->id}}" class="btn btn-outline-success">Ver producto</a>
            </div>

            </div>
        </div>
    </div>
    @endforeach
</div> {{--cierro el div row--}}

@endsection
