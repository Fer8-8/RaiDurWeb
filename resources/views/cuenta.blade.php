@extends('layouts.navbar')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-bold flex items-center">
            <i class="fas fa-user-circle mr-2"></i> Eduardo
        </h2>

        <!-- Card: Dirección de envío -->
        <div class="bg-white shadow-lg rounded-x50 p-5 mt-4 border relative">
            <a href="#" class="text-blue-500 hover:underline absolute top-2 right-2">Cambiar</a>
            <h3 class="font-semibold text-gray-700 mt-6">Dirección de envío:</h3>
            <p class="text-gray-600">Calle Amanecer #412, Jardines de Durango, Victoria de Durango, Durango, 12345, México.</p>
        </div>

        <!-- Card: Método de pago -->
        <div class="bg-white shadow-lg rounded-x50  p-5 mt-4 border relative">
            <a href="#" class="text-blue-500 hover:underline absolute top-2 right-2">Cambiar</a>
            <h3 class="font-semibold text-gray-700 mt-6">Método de pago y facturación:</h3>
            <p class="text-gray-600">Visa 4516</p>
        </div>

        <!-- Card: Historial de pedidos -->
        <div class="bg-white shadow-lg rounded-x50 p-5 mt-4 border relative">
            <a href="#" class="text-blue-500 hover:underline absolute top-2 right-2">Ver</a>
            <h3 class="font-semibold text-gray-700 mt-6">Historial de pedidos</h3>
            <p class="text-gray-600">Calle Amanecer #412, Jardines de Durango, Victoria de Durango, Durango, 12345, México.</p>
        </div>

        <!-- Card: Servicio al cliente -->
        <div class="bg-white shadow-lg rounded-x50 p-5 mt-4 border relative">
            <a href="#" class="text-blue-500 hover:underline absolute top-2 right-2">Contáctanos</a>
            <h3 class="font-semibold text-gray-700 mt-6">Servicio al cliente</h3>
        </div>
    </div>
</div>


   
@endsection