@extends('layouts.navbar')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="container mt-5">
    <div class="row">
        <!-- Sidebar con categorías y filtros -->
        <div class="col-md-3">
            <h5 class="fw-bold text-warning">CATEGORÍA</h5>
            <ul class="list-unstyled">
                <li><input type="checkbox" class=""> 1,100 lts</li>
                <li><input type="checkbox"> 750 lts</li>
                <li><input type="checkbox"> 450 lts</li>
            </ul>

            <h5 class="fw-bold text-warning">PRECIO</h5>
            <ul class="list-unstyled">
                <li><input type="checkbox"> Ascendente</li>
                <li><input type="checkbox"> Descendente</li>
            </ul>

            <h5 class="fw-bold text-warning">CAPAS</h5>
            <ul class="list-unstyled">
                <li><input type="checkbox"> Bicapa</li>
                <li><input type="checkbox"> Tricapa</li>
            </ul>
        </div>

      <!-- Grid de tinacos -->
      <div class="col-md-9">
        <div class="row">
            @foreach($tinacos as $tinaco)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-lg border-0 rounded-4 p-3">
                        <h5 class="fw-bold">{{ $tinaco->nombre }}</h5>
                        <img src="{{ asset($tinaco->imagen) }}" height='300px' style="object-fit: contain" class="">
                        <h4 class="text-danger fw-bold mt-3">${{ number_format($tinaco->precio, 2) }}</h4>
                        <p class="text-muted">{{ $tinaco->descripcion }}</p>
                        <button class="btn btn-warning fw-bold fs-4">AGREGAR AL CARRITO</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection