@extends('layouts.navbar')

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

<div class="container text-center pt-4">
    <div class="row justify-content-center m-0 p-0">
        <a href="{{ route('tinacos') }}" class="col-2 text-center">
            <img class="img-fluid" style="height: 100px; width: auto;" src="{{ asset('SVGs/cisternav2F.svg') }}" alt="tinacos">
        </a>
        <a href="{{ route('cisternas') }}" class="col-2 text-center">
            <img class="img-fluid" style="height: 100px; width: auto;" src="{{ asset('SVGs/cisternav3F.svg') }}" alt="cisterna">
        </a>
        <a href="{{ route('calentadores') }}" class="col-2 text-center">
            <img class="img-fluid" style="height: 100px; width: auto;" src="{{ asset('SVGs/calentadorT.svg') }}" alt="calentadores">
        </a>
        <a href="{{ route('otros') }}" class="col-2 text-center">
            <img class="img-fluid" style="height: 100px; width: auto;" src="{{ asset('SVGs/TuberiaT.svg') }}" alt="otros">
        </a>
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


<div class="d-flex flex-column align-items-center">
  <h2 class="text-center pt-5 m-0" style="font-family: 'Saira', sans-serif;">¿Qué opinan nuestros clientes de Raíces Duranguenses?</h2>
</div>
<div class="container my-3">
  <div class="row row justify-content-around">
    <div class="card col-1 border text-center border-4 my-2 border-primary rounded-5" style="width: 14rem;">
      <img src="Images/Person1.jpg" class="card-img-top rounded-4" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>\
      </div>
    </div>
    <div class="card col-1 border text-center border-4 my-2 border-primary rounded-5" style="width: 14rem;">
      <img src="Images/Person1.jpg" class="card-img-top rounded-4" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card col-1 border text-center border-4 my-2 border-primary rounded-5" style="width: 14rem;">
      <img src="Images/Person1.jpg" class="card-img-top rounded-4" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card col-1 border  text-center border-4 my-2 border-primary rounded-5" style="width: 14rem;">
      <img src="Images/Person1.jpg" class="card-img-top  rounded-4" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center text-lg-start bg-primary mt-5 pt-1">
  

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
          <!-- Content -->
          <h2 class="fw-bold mb-1">
            RaiDur
          </h2>
          <h4 class="mb-3">Nuestras redes</h4>
          <svg  class="mx-2"xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg>
          <svg class="mx-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
          </svg>
          <svg class="mx-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
          </svg>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
  <div class="text-center p-2" style="">
    © 2025 Raíces Duranguenses S.A. de C.V. | Todos los derechos reservados.
  </div>
</footer>
<!-- Footer -->
@endsection