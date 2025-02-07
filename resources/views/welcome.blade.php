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

@endsection