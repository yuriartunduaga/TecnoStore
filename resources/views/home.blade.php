@extends('layouts.app')

@section('titulo')

@section('contenido')
@csrf

<style>
    body {
        background-color: #66ace5; /* Cambia este color según tus preferencias */
        font-family: Arial, sans-serif;
        color: white;
        margin: 0;
        height: 100vh;
    }
    .content-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        height: calc(100vh - 50px); /* Ajusta 50px si tu menú tiene otra altura */
        text-align: center;
    }
    .company-name {
        font-size: 3rem;
        font-weight: bold;
        margin: 0;
    }
    .company-description {
        font-size: 1.5rem;
        margin: 0;
    }
</style>

<div class="content-wrapper">
    <div>
        <div class="company-name">
            Tecno Store
        </div>
        <div class="company-description">
            Tienda de Tecnología
        </div>
    </div>
</div>


@endsection
