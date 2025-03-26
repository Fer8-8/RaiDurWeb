@extends('layouts.navbar')

@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 p-5">
    <h1 class="text-4xl font-extrabold text-center text-yellow-600 uppercase">FAQ’s</h1>
    <p class="text-center text-gray-600 mt-3 text-sm leading-relaxed">
        En Raíces Duranguenses, queremos brindarte toda la información que necesitas para que tu experiencia de compra sea fácil y segura. Aquí encontrarás respuestas a las dudas más comunes sobre nuestros productos, servicios, envíos y garantías. Si no encuentras la respuesta que buscas, no dudes en contactarnos. ¡Estamos aquí para ayudarte!
    </p>

    <div class="mt-8 space-y-4">
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
        <div x-data="{ open: false }" class="border-b border-gray-300 pb-3">
            <button @click="open = !open" class="w-full flex justify-between items-center py-3 text-left">
                <span class="font-bold text-lg text-gray-800">{{ $question }}</span>
                <span class="text-yellow-600 text-2xl font-extrabold transition-transform" :class="{ 'rotate-45': open }">+</span>
            </button>
            <p x-show="open" x-collapse class="text-gray-700 text-base mt-2 leading-relaxed">{{ $answer }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
