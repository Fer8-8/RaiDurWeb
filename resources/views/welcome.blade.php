@extends('layouts.app')

@section('content')

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/carimage1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/carimage3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/carimage2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/carimage4.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<div class="d-flex flex-column align-items-center">
  <h2 class="text-center pt-5 m-0">Productos</h2>
  <div class="bg-primary rounded" style="width:80px; height:5px"></div>
</div>

<div class="fluid-container text-center p-2" >
  <div class="row justify-content-center">
    <img class="col-2" src="SVGs/cisternav2F.svg" alt="calentador">
    <img class="col-2" src="SVGs/cisternav3F.svg" alt="cisterna">
    <img class="col-2" src="SVGs/calentadorT.svg" alt="cisterna">
    <img class="col-2" src="SVGs/TuberiaT.svg" alt="tuberia">
  </div>
</div>

<div class="d-flex flex-column align-items-center">
  <h2 class="text-center pt-5 m-0">Servicios</h2>
  <div class="bg-primary rounded" style="width:80px; height:5px"></div>
</div>

<div class="d-flex flex-column align-items-center">
  <h2 class="text-center pt-5 m-0">Sobre nosotros</h2>
  <div class="bg-primary rounded" style="width:80px; height:5px"></div>
</div>
<div class="video-container text-center mt-4">
        <video width="80%" controls>
            <source src="images/videoindex.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
</div>

<div class="d-flex flex-column align-items-center">
  <h2 class="text-center pt-5 m-0">Contáctanos</h2>
  <div class="bg-primary rounded" style="width:80px; height:5px"></div>
</div>
<div class="container d-flex justify-content-center align-items-center mt-4">
    <div class="bg-warning p-4 rounded" style="width: 400px;">
        <form action="{{ route('contacto.enviar') }}" method="POST">
            @csrf
            <label for="celular" class="form-label">Número de celular 📞</label>
            <input type="text" id="celular" name="celular" class="form-control mb-3" required>

            <label for="email" class="form-label">Correo electrónico 📧</label>
            <input type="email" id="email" name="email" class="form-control mb-3" required>

            <button type="submit" class="btn btn-dark w-100">Quiero recibir más información</button>
        </form>
    </div>

    <!-- MAPA -->
    <div class="ms-4">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10000..."
            width="400" height="300" style="border:0;" allowfullscreen>
        </iframe>
    </div>
</div>


@endsection