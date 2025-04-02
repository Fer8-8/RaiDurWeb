@extends('layouts.navbar')

@section('content')
<div class="container p-6">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-bold flex items-center pt-5">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>{{Auth::user()->name}}
        </h2>

        <!-- Card: Dirección de envío -->
        <div class="bg-white shadow-lg rounded-5 py-3 px-5 mt-4 border relative">
            <div class="d-flex justify-content-between align-items-center">   
                <h3 class="font-semibold d-inline text-gray-700 mt-6">Dirección de envío:</h3>
                <a href="{{route('direccion')}}" class="text-info hover:underline absolute top-2 right-2">Cambiar</a>
            </div>
            <p class="text-gray-600">Calle Amanecer #412, Jardines de Durango, Victoria de Durango, Durango, 12345, México.</p>
        </div>

        <!-- Card: Método de pago -->
        <div class="bg-white shadow-lg rounded-5 py-3 px-5 mt-4 border relative">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="font-semibold text-gray-700 mt-6">Método de pago y facturación:</h3>
                <a href="#" class="text-info hover:underline absolute top-2 right-2">Cambiar</a>
            </div>
            <p class="text-gray-600">Visa 4516</p>
        </div>

        <!-- Card: Historial de pedidos -->
        <div class="bg-white shadow-lg rounded-5 py-3 px-5 mt-4 border relative">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="font-semibold text-gray-700 mt-6">Historial de pedidos</h3>
                <a href="#" class="text-info hover:underline absolute top-2 right-2">Ver</a>
            </div>
            <p class="text-gray-600">Calle Amanecer #412, Jardines de Durango, Victoria de Durango, Durango, 12345, México.</p>
        </div>

        <!-- Card: Servicio al cliente -->
        <div class="bg-white shadow-lg rounded-5 py-3 px-5 mt-4 border relative">
            <div class="d-flex justify-content-between align-items-center">
                
                <h3 class="font-semibold text-gray-700 mt-6">Servicio al cliente</h3>
                <a href="#" class="text-info hover:underline absolute top-2 right-2">Contáctanos</a>
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
   