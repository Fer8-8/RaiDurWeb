@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Quiénes Somos?</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: left;
        }
        .contenedor {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .quienes-somos {
            display: flex;
            align-items: center;
            gap: 40px;
            margin-bottom: 30px !important;
        }
        .quienes-somos .imagen img {
            width: 450px; /* Imagen más grande */
            border-radius: 10px;
        }
        .quienes-somos .contenido {
            flex: 1;
            font-size: 0.9rem; /* Letra más grande */
        }
        .resaltado {
            color: #f1c40f;
        }
        .mision-vision-proposito {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            text-align: center;
        }
        .caja {
            width: 30%;
            padding: 15px;
            font-size: 0.9rem;
            background: rgba(255, 255, 255, 0.7); /* Fondo transparente */
            border-radius: 5px;
            line-height: 1.6;
        }
        .caja h3 {
            font-size: 26px;
        margin-bottom: 10px;
        color: black;
        font-weight: 600 !important;
        }
        .line {
            width: 200px;
            height: 4px;
            background-color: #E5BC48; /* Línea amarilla */
            border-radius: 2px;
            margin: 0 auto 10px auto; /* Centrada y con espacio */
        }
        .valores {
            text-align: center;
            margin-top: 40px;
        }
        .valores-box {
            background: #f1c40f;
            padding: 15px;
            border-radius: 5px;
            font-size: 0.9rem;
            font-weight: bold;
            display: inline-block;
        }
    </style>
</head>
<body>

<div class="contenedor">

    <section class="quienes-somos">
        <div class="imagen">
            <img src="{{ asset('Images/nosotrosimagen.png') }}" alt="Imagen de la empresa">
        </div>
        <div class="contenido">
            <h2>¿Quiénes <span class="resaltado">somos?</span></h2>
            <p>Iniciamos como una asociación civil en 2018 con el propósito de apoyar a las familias duranguenses en temas de vivienda, enfocados en la mejora de la misma. Derivado de este compromiso, evolucionamos hasta convertirnos en una empresa acreditada a nivel estatal, especializándonos en la fabricación de tinacos y cisternas de la mejor calidad, con garantía de por vida.
            Además, ampliamos nuestra oferta con calentadores solares y otros productos, brindando soluciones eficientes y accesibles.</p>
        </div>
    </section>

    <section class="mision-vision-proposito">
        <div class="caja">
        <h3>Misión</h3>
        <div class="line"></div>
            <p>Ser una empresa capaz de reinventarse constantemente, manteniendo y reforzando los valores que la han caracterizado, con altos niveles de eficiencia, muy humana y siempre generando bienestar en la economía familiar.</p>
        </div>
        <div class="caja">
            <h3>Visión</h3>
            <div class="line"></div>
           
            <p>Para 2025, ser la empresa líder en fabricación y venta de tinacos y cisternas en México, con productos de alta calidad y tecnología avanzada, promoviendo el almacenamiento seguro y sustentable del agua.</p>
        </div>
        <div class="caja">
            <h3>Propósito</h3>
            <div class="line"></div>
            
            <p>Proveer productos de calidad, accesibles para todos, garantizando durabilidad y eficiencia, mientras ofrecemos una excelente experiencia de compra con atención y servicio confiables.</p>
        </div>
    </section>

    <section class="valores">
        <h3>Nuestros valores</h3>
        <div class="line"></div>
        <div class="valores-box">
            <p>Honestidad, respeto, compromiso y responsabilidad</p>
        </div>
    </section>

</div>

</body>
</html>

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

@section('content')