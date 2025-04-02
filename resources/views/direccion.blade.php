@extends('layouts.navbar')

@section('content')
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: 'Saira', sans-serif;
      background-color: #f5f5f5;
      animation: fadeIn 1s ease-in-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    header {
      background-color: #111;
      color: white;
      padding: 10px 20px;
    }
    header .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }
    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .logo img {
      height: 40px;
    }
    .logo span {
      font-size: 28px;
      font-weight: 700;
      background: linear-gradient(to right, #ffcc33, #996600);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .nav-right {
      display: flex;
      align-items: center;
      gap: 20px;
    }
    /* anims vrmerc hov12 */
    nav {
      display: flex;
      gap: 20px;
    }
    nav a {
      color: white;
      text-decoration: none;
      font-size: 18px;
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
    .profile-btn {
      background-color: #e6b800;
      border: none;
      border-radius: 8px;
      padding: 8px 14px;
      font-weight: bold;
      display: flex;
      align-items: center;
      gap: 5px;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); box-shadow: 0 0 15px rgba(230,184,0,0.6); }
      100% { transform: scale(1); }
    }
    .profile-btn i {
      background-color: #fff;
      border-radius: 50%;
      padding: 4px;
      color: black;
    }
    .container1 {
      max-width: 900px;
      margin: 40px auto;
      background: white;
      border-radius: 16px;
      padding: 30px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      animation: slideInUp 0.8s ease;
    }
    @keyframes slideInUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .form-header {
      font-weight: 700;
      font-size: 20px;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    form {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }
    label {
      display: block;
      font-weight: 500;
      margin-bottom: 6px;
    }
    /* inputs vrmerc */
    input {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-family: 'Saira', sans-serif;
      transition: all 0.3s ease, box-shadow 0.3s ease;
    }
    input:focus {
      outline: none;
      border-color: #e6b800;
      box-shadow: 0 0 8px #e6b800;
      transform: scale(1.03);
    }
    .form-actions {
      grid-column: 1 / -1;
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 20px;
    }
    .form-actions button {
      padding: 12px 30px;
      border-radius: 20px;
      font-weight: bold;
      font-family: 'Saira', sans-serif;
      cursor: pointer;
      border: none;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .form-actions button:hover {
      transform: scale(1.08) rotate(-1deg);
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
    }
    .guardar {
      background-color: #e6b800;
      color: #000;
    }
    .cancelar {
      background-color: #000;
      color: white;
    }
    
  </style>
 <!-- form rectangular vrmerc direcciones brujulario 5b cbtis 130 -->
  <div class="container1">
    <div class="form-header">
      <i class="fas fa-map-marker-alt"></i> Editar tu Dirección
    </div>
    <form>
      <div style="grid-column: 1 / -1;">
        <label for="calle">Calle:</label>
        <input type="text" id="calle">
      </div>
      <div>
        <label for="num_ext">Número Exterior:</label>
        <input type="text" id="num_ext">
      </div>
      <div>
        <label for="num_int">Número Interior:</label>
        <input type="text" id="num_int">
      </div>
      <div>
        <label for="colonia">Colonia:</label>
        <input type="text" id="colonia">
      </div>
      <div>
        <label for="cp">Código Postal:</label>
        <input type="text" id="cp">
      </div>
      <div>
        <label for="municipio">Municipio:</label>
        <input type="text" id="municipio">
      </div>
      <div>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono">
      </div>
      <div class="form-actions">
        <button type="submit" class="guardar">GUARDAR</button>
        <button type="button" class="cancelar">CANCELAR</button>
      </div>
    </form>
  </div>
@endsection