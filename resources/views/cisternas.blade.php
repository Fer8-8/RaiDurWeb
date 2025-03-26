@extends('layouts.navbar')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <h5 class="fw-bold text-warning">CAPACIDAD</h5>
            <ul class="list-unstyled">
                <li><input type="checkbox"> 1,100 lts</li>
                <li><input type="checkbox"> 2,700 lts</li>
                <li><input type="checkbox"> 5,000 lts</li>
                <li><input type="checkbox"> 10,000 lts</li>

            </ul>

            <h5 class="fw-bold text-warning">PRECIO</h5>
            <ul class="list-unstyled">
                <li><input type="checkbox"> Ascendente</li>
                <li><input type="checkbox"> Descendente</li>
            </ul>

            <h5 class="fw-bold text-warning">COLOR</h5>
            <ul class="list-unstyled">
                <li><input type="checkbox"> Azul</li>
                <li><input type="checkbox"> Negro </li>
                <li><input type="checkbox"> Beige </li>

            </ul>
        </div>

        <div class="col-md-9">
            <div class="row">
                @foreach($cisternas as $cisterna)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-lg border-0 rounded-4 p-3">
                            <h5 class="fw-bold">{{ $cisterna->nombre }}</h5>
                            <img src="{{ asset($cisterna->imagen) }}" height='300px' style="object-fit: contain" class="">
                            <h4 class="text-danger fw-bold mt-3">${{ number_format($cisterna->precio, 2) }}</h4>
                            <p class="text-muted">{{ $cisterna->descripcion }}</p>
                            <button class="btn btn-warning fw-bold fs-4">AGREGAR AL CARRITO</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
