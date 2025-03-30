@extends('layouts.navbar')

@section('content')
<style>
    .container {
        max-width: 1300px;
        margin: 0 auto;
        padding: 20px;
        text-align: center;
      
    }
    .description {
        font-size: 0.9rem;
        color: #333;
        margin-bottom: 40px;
    }
    .services-grid {
        display: flex;
        flex-direction: column;
        gap: 25px;
        align-items: center;
    }
    .service-card {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 95%;
        max-width: 1100px;
        background: #fff;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
        border-radius: 50px;
        overflow: hidden;
        text-align: left;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        padding: 20px;
        gap: 20px;
    }
    .service-card:hover {
        transform: scale(1.02);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }
    .service-card:nth-child(even) {
        flex-direction: row-reverse; /* Alternar imagen a la derecha */
    }
    .service-card img {
        width: 40%;
        height: 220px;
        object-fit: cover;
        border-radius: 30px;
    }
    .service-card .content {
        width: 58%;
        text-align: center;
    }
    .service-card h3 {
        font-size: 26px;
        margin-bottom: 5px;
        color: black;
        font-weight: 600 !important;
    }
    .service-card p {
        font-size: 0.9rem;
        color: #333;
        line-height: 1.6;
    }

    /* Diseño responsivo */
    @media (max-width: 768px) {
        .service-card {
            flex-direction: column;
            text-align: center;
        }
        .service-card:nth-child(even) {
            flex-direction: column; /* En pantallas pequeñas, todas iguales */
        }
        .service-card img {
            width: 100%;
            height: auto;
        }
        .service-card .content {
            width: 100%;
        }
    }
    .service-card .line {
    margin-top: 0px; /* Elimina cualquier espacio extra arriba */
    margin-bottom: 10px; /* Ajusta la separación con el <p> */
    background-color: #E5BC48 !important;
}

</style>

<div class="container">
    <p class="description">
        En nuestra empresa, no solo fabricamos tinacos, cisternas y calentadores solares de alta calidad, sino que también ofrecemos una gama de servicios especializados para garantizar el mejor rendimiento y durabilidad de nuestros productos. A continuación, nuestra gama de servicios:
    </p>

    <div class="services-grid">
        <!-- Instalación Profesional -->
        <div class="service-card">
            <img src="{{ asset('Images/servicio1.png') }}" alt="Instalación profesional">
            <div class="content">
            <h3>Instalación Profesional</h3>
<div class="line bg-black rounded mx-auto" style="width: 200px; height: 4px;"></div>
<p>
    En Raíces Duranguenses, contamos con técnicos especializados para el montaje y conexión segura de tinacos, cisternas y calentadores solares, garantizando su correcto funcionamiento desde el primer día.
</p>

            </div>
        </div>

        <!-- Mantenimiento y Limpieza -->
        <div class="service-card">
            <img src="{{ asset('Images/servicio2.png') }}" alt="Mantenimiento y limpieza">
            <div class="content">
                <h3>Mantenimiento y Limpieza</h3>
                <div class="line bg-black rounded mx-auto" style="width: 200px; height: 4px;"></div>
                <p>
                    Ofrecemos un servicio periódico de mantenimiento y limpieza, asegurando la calidad del agua almacenada y prolongando la vida útil de nuestros productos.
                </p>
            </div>
        </div>

        <!-- Asesoría Personalizada -->
        <div class="service-card">
            <img src="{{ asset('Images/servicio3.png') }}" alt="Asesoría personalizada">
            <div class="content">
                <h3>Asesoría Personalizada</h3>
                <div class="line bg-black rounded mx-auto" style="width: 200px; height: 4px;"></div>
                <p>
                    En Raíces Duranguenses, te ayudamos a elegir la mejor opción en tinacos, cisternas y calentadores solares, brindándote recomendaciones según tus necesidades y espacio disponible.
                </p>
            </div>
        </div>

        <!-- Envío y Distribución -->
        <div class="service-card">
            <img src="{{ asset('Images/servicio4.png') }}" alt="Envío y distribución">
            <div class="content">
                <h3>Envío y Distribución</h3>
                <div class="line bg-black rounded mx-auto" style="width: 200px; height: 4px;"></div>
                <p>
                    Nos aseguramos de que recibas tu tinaco, cisterna o calentador solar de manera rápida y segura. Contamos con un servicio de entrega eficiente con cobertura en distintas regiones, para que tengas acceso a nuestros productos sin complicaciones.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
