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
                            <h5 class="fw-bold text-center fs-2">{{ $cisterna->nombre }}</h5>
                            <img src="{{ asset($cisterna->imagen) }}" height='300px' style="object-fit: contain" class="">
                            <h4 class="text-danger fw-bold mt-3 text-center fs-1">${{ number_format($cisterna->precio, 2) }}</h4>
                            <p class="text-muted text-center">{{ $cisterna->descripcion }}</p>
                            <button class="btn btn-warning fw-bold fs-4">AGREGAR AL CARRITO</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
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
