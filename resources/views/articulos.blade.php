@extends('layouts.navbar')

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Sidebar con categorías y filtros -->
        <div class="col-md-3">
            <h5 class="fw-bold text-warning">CATEGORÍA</h5>
            <ul class="list-unstyled">
                <li><input type="checkbox"> Minisplit</li>
                <li><input type="checkbox"> Biodigestores</li>
                <li><input type="checkbox"> Juego de baño</li>
                <li><input type="checkbox"> Boiler de paso</li>
                <li><input type="checkbox"> Pintura Doal</li>
                <li><input type="checkbox"> Bombas para subir agua</li>
            </ul>

            <h5 class="fw-bold text-warning">PRECIO</h5>
            <ul class="list-unstyled">
                <li><input type="checkbox"> Ascendente</li>
                <li><input type="checkbox"> Descendente</li>
            </ul>
        </div>

        <!-- Grid de productos -->
        <div class="col-md-9">
            <div class="row">
                @foreach($productos as $producto)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-lg border-0 rounded-4 p-3">
                            <h5 class="fw-bold">{{ $producto->nombre }}</h5>
                            <img src="{{ asset('storage/' . $producto->imagen) }}" class="img-fluid rounded">
                            <h4 class="text-danger fw-bold mt-3">${{ number_format($producto->precio, 2) }}</h4>
                            <p class="text-muted">{{ $producto->descripcion }}</p>
                            <button class="btn btn-warning fw-bold">AGREGAR AL CARRITO</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
