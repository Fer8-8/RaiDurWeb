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
        <a href="{{ route('articulos') }}" class="col-2 text-center">
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