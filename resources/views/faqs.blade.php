@extends('layouts.navbar')

@section('content')
<div class="max-w-3xl mx-auto px-5 py-3">
    <style>
        .custom-yellow {
            color: #E5BC48;
            font-weight: 900;
            font-size: 3.2rem;
        }
    </style>

    <div class="d-flex flex-column align-items-center mb-4">
        <h2 class="text-center pt-2 m-0 custom-yellow">FAQ’s</h2>
        <div class="bg-black rounded mx-auto mt-1" style="width: 80px; height: 4px;"></div>
    </div>

    <p class="text-center text-gray-600 mt-3 text-sm leading-relaxed">
        En Raíces Duranguenses, queremos brindarte toda la información que necesitas para que tu experiencia de compra sea fácil y segura. Aquí encontrarás respuestas a las dudas más comunes sobre nuestros productos, servicios, envíos y garantías. Si no encuentras la respuesta que buscas, no dudes en contactarnos. ¡Estamos aquí para ayudarte!
    </p>

    <div class="mt-8">
        @php
            $faqs = [
                "¿Cuánto tiempo tarda la entrega de un producto?" => "El tiempo de entrega varía según la ubicación. Generalmente, los envíos locales se realizan de 2-3 días y los foráneos de 4-6 días. Contáctanos para más detalles.",
                "¿Ofrecen servicio de instalación?" => "Sí, contamos con servicio de instalación profesional. Contáctanos para más información.",
                "¿Los tinacos y cisternas tienen garantía?" => "Sí, nuestros productos tienen garantía de fábrica. Consulta los términos y condiciones.",
                "¿Ofrecen opciones de financiamiento o pagos a plazos?" => "Sí, contamos con varias opciones de financiamiento y pagos a plazos.",
                "¿Cómo se realiza el mantenimiento de un tinaco o cisterna?" => "El mantenimiento es sencillo y debe hacerse cada 6 meses. Consulta nuestra guía.",
                "¿Los calentadores solares funcionan en días nublados?" => "Sí, los calentadores solares almacenan energía y funcionan incluso en días nublados.",
                "¿Dónde tienen cobertura de envío?" => "Realizamos envíos a nivel nacional. Para más detalles, contáctanos.",
                "¿Cómo puedo solicitar asesoría para elegir el producto adecuado?" => "Puedes comunicarte con nuestro equipo de ventas para recibir asesoría personalizada.",
            ];
        @endphp

        @foreach ($faqs as $question => $answer)
        <hr style="height: 2px; background-color: black; border: none; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);">


            @php $id = Str::slug($question, '-'); @endphp
            <div class="d-flex justify-content-between">
                <p class="d-inline fs-5 fw-bold">{{$question}}</p>
                <div class="d-flex">
                    <button class="p-0 bg-transparent border-0 me-4" type="button" 
                            data-bs-toggle="collapse" data-bs-target="#collapseExample--{{$id}}" 
                            aria-expanded="false" aria-controls="collapseExample--{{$id}}">
                        <img src="{{ asset('Images/iconofaqs.png') }}" alt="Abrir" width="30" height="30">
                    </button>
            </div>

            </div>
            <div class="collapse mt-2" id="collapseExample--{{$id}}">
                <div class="fs-6">
                    {{ $answer}}
                </div>
            </div>
        @endforeach
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




  <!-- CSRF Token <span class="text-lg text-gray-900 font-bold" style="font-weight: 600 !important;">{{ $question }}</span> -->