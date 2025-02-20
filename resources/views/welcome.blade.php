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

<div class="fluid-container text-center pt-4" style="height:100px">
  <div class="row justify-content-center m-0 p-0">
    <img class="col-2 d-block w-10" height="80px" src="SVGs/cisternav2F.svg" alt="calentador">
    <img class="col-2 d-block w-10" height="80px" src="SVGs/cisternav3F.svg" alt="cisterna">
    <img class="col-2 d-block w-10" height="80px" src="SVGs/calentadorT.svg" alt="cisterna">
    <img class="col-2 d-block w-10" height="80px" src="SVGs/TuberiaT.svg" alt="tuberia">
  </div>
</div>

<div class="d-flex flex-column align-items-center mb-4">
  <h2 class="text-center pt-5 m-0">Servicios</h2>
  <div class="bg-primary rounded" style="width:80px; height:5px"></div>
</div>
<div class="row justify-content-center align-items-center m-0 p-0" style="height: 70vh;">
    <img class="img-fluid" src="images/durangoo.jpg" alt="calentador" style="max-width: 80%; max-height: 70vh;">
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
  <h2 class="text-center pt-5 m-0" style="font-family: 'Saira', sans-serif;">Contáctanos</h2>
  <div class="bg-primary rounded" style="width:80px; height:5px"></div>
</div>
<div class="container mt-5">
    <div class="row row justify-content-center">
        <!-- Formulario -->
        <div class="col-4">
            <div class="custom-form p-4 bg-warning rounded shadow-lg">
                <form action="{{ route('contacto.enviar') }}" method="POST">
                    @csrf
                    <label for="celular" class="form-label">Número de celular 📞</label>
                    <input type="text" id="celular" name="celular" class="form-control mb-4" required>

                    <label for="email" class="form-label">Correo electrónico 📧</label>
                    <input type="email" id="email" name="email" class="form-control mb-4" required>

                    <button type="submit" class="btn btn-dark w-100 mt-4">Quiero recibir más información</button>
                </form>
            </div>
        </div>

        <!-- Mapa -->
        <div class="col-4 ">
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.5697751293164!2d-104.64705722482799!3d24.010964878493567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb7971131e4af%3A0x6a7261472c6bc91!2sRa%C3%ADces%20Duranguenses%2C%20A.%20C.!5e0!3m2!1ses-419!2smx!4v1739209323184!5m2!1ses-419!2smx"
                    width="400" height="320" style="border:0; border-radius: 15px; box-shadow: 5px 5px 10px rgba(0,0,0,0.2);" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>




@endsection