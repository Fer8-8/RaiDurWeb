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
                <a href="http://127.0.0.1:8000/direccion" class="text-info hover:underline absolute top-2 right-2">Cambiar</a>
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
@endsection
   