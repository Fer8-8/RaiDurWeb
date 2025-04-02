@extends('layouts.navbar')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<div class="container mt-5">
    <div class="row">
        <!-- Sidebar con categorías y filtros -->
        <div class="col-md-3">
            <h5 class="fw-bold text-warning">CATEGORÍA</h5>
            <ul class="list-unstyled">
                <li><input type="checkbox" class="filter-checkbox" value="Minisplit"> Minisplit</li>
                <li><input type="checkbox" class="filter-checkbox" value="biodigestores"> Biodigestores</li>
                <li><input type="checkbox" class="filter-checkbox" value="juego"> Juego de baño</li>
                <li><input type="checkbox" class="filter-checkbox" value="boiler"> Boiler de paso</li>
                <li><input type="checkbox" class="filter-checkbox" value="pintura"> Pintura Doal</li>
                <li><input type="checkbox" class="filter-checkbox" value="bombas"> Bombas para subir agua</li>
            </ul>

            <h5 class="fw-bold text-warning">PRECIO</h5>
            <ul class="list-unstyled">
                <li><input type="checkbox" disabled> Ascendente</li>
                <li><input type="checkbox" disabled> Descendente</li>
            </ul>
        </div>

        <!-- Grid de productos -->
        <div class="col-md-9">
            <div class="row" id="product-grid">
                @foreach($productos as $producto)
                    <div class="col-md-6 mb-4 product-card {{ strtolower(str_replace(' ', '', $producto->categoria)) }}">
                        <div class="card shadow-lg border-0 rounded-4 p-3">
                            <h5 class="fw-bold text-center fs-2">{{ $producto->nombre }}</h5>
                            <img src="{{ asset($producto->imagen) }}" height='300px' style="object-fit: contain" class="">
                            <h4 class="text-danger fw-bold mt-3 text-center fs-1">${{ number_format($producto->precio, 2) }}</h4>
                            <p class="text-muted text-center">{{ $producto->descripcion }}</p>
                            <button class="btn btn-warning fw-bold fs-4">AGREGAR AL CARRITO</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- JS para filtro -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const checkboxes = document.querySelectorAll('.filter-checkbox');
        const cards = document.querySelectorAll('.product-card');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const selected = Array.from(checkboxes)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value);

                cards.forEach(card => {
                    const matches = selected.some(cat => card.classList.contains(cat));
                    card.style.display = (selected.length === 0 || matches) ? 'block' : 'none';
                });
            });
        });
    });
</script>
<style> 
    body {
  animation: fadeIn 1s ease-in-out;
}
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

input {
  transition: all 0.3s ease, box-shadow 0.3s ease;
}
input:focus {
  outline: none;
  border-color: #e6b800;
  box-shadow: 0 0 8px #e6b800;
  transform: scale(1.03);
}

button {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
button:hover {
  transform: scale(1.08) rotate(-1deg);
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
}

.profile-btn {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  animation: pulse 2s infinite;
}
@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.05); box-shadow: 0 0 15px rgba(230,184,0,0.6); }
  100% { transform: scale(1); }
}

.container, .card {
  animation: slideInUp 0.8s ease;
}
@keyframes slideInUp {
  from { opacity: 0; transform: translateY(40px); }
  to { opacity: 1; transform: translateY(0); }
}

nav a {
  position: relative;
  transition: color 0.3s ease;
}
nav a::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: -4px;
  width: 100%;
  height: 2px;
  background: #e6b800;
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.4s ease;
}
nav a:hover {
  color: #e6b800;
}
nav a:hover::after {
  transform: scaleX(1);
}

.social i {
  transition: transform 0.3s ease;
}
.social i:hover {
  transform: scale(1.3);
}
</style>
@endsection