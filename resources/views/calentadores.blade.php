@extends('layouts.navbar')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <h5 class="fw-bold text-warning">CATEGORÍA</h5>
            <ul class="list-unstyled">
                <li><input type="checkbox"> Paneles Solares</li>
                <li><input type="checkbox"> Baterías</li>
                <li><input type="checkbox"> Inversores</li>
            </ul>

            <h5 class="fw-bold text-warning">PRECIO</h5>
            <ul class="list-unstyled">
                <li><input type="checkbox"> Ascendente</li>
                <li><input type="checkbox"> Descendente</li>
            </ul>
        </div>

        <div class="col-md-9">
            <div class="row">
                @foreach($calentadores as $calentador)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-lg border-0 rounded-4 p-3">
                            <h5 class="fw-bold">{{ $calentador->nombre }}</h5>
                            <img src="{{ asset($calentador->imagen) }}" height='300px' style="object-fit: contain" class="">
                            <h4 class="text-danger fw-bold mt-3">${{ number_format($calentador->precio, 2) }}</h4>
                            <p class="text-muted">{{ $calentador->descripcion }}</p>
                            <button class="btn btn-warning fw-bold fs-4">AGREGAR AL CARRITO</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
