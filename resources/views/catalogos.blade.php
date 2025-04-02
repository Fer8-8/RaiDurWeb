@extends('layouts.app')

@section('head')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secciones Premium</title>
    <link rel="stylesheet" href="CSS/sti_dossec.css">
</head>

<style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    color: #2c3e50;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    text-align: center;
}

.container {
    display: flex;
    justify-content: space-between;
    gap: 50px;
    max-width: 90%;
    width: 1200px;
}

.card {
    background-color: white;
    border-radius: 15px;
    width: 450px;
    height: 500px;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    align-items: center;
}

.icon {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 150px; /* Espacio asignado para los íconos */
}

.icon-img {
    width: 140px;
    height: 140px;
    object-fit: contain;
    background: none;
}

.info h3 {
    font-size: 2em;
    margin-bottom: 15px;
    color: #f39c12;
}

.info p {
    font-size: 1.2em;
    margin-bottom: 25px;
    color: #34495e;
}

.btn {
    background-color: #f39c12;
    color: #2c3e50;
    padding: 15px;
    border: none;
    border-radius: 10px;
    font-size: 1.2em;
    cursor: pointer;
    transition: transform 0.2s ease, background-color 0.2s ease;
}

.btn:hover {
    transform: scale(1.1);
    background-color: #e67e22;
}
</style>
@endsection

@section('content')
<body class="light-mode">
    <div class="container">
        <div class="card">
            <div class="icon">
                <img src="imgs/glob.jpg" alt="Catálogo Global" class="icon-img">
            </div>
            <div class="info">
                <h3>Catálogo Global</h3>
                <p>Obtén una vista completa de nuestros productos.</p>
                <button class="btn" onclick="alert('Entrar')" onclick="http://raidur.test:82/articulos">Entrar</button>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <img src="imgs/idea.jpg" alt="Catálogo Inteligente" class="icon-img">
            </div>
            <div class="info">
                <h3>Catálogo Inteligente (Nuevo)</h3>
                <p>Recibe una recomendación personalizada basada en tus necesidades</p>
                <button class="btn" onclick="alert('Entrar')" onclick="http://raidur.test:82/articulos">Entrar</button>
            </div>
        </div>
    </div>
</body>
@endsection