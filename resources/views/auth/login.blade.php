@extends('layouts.app')

@section('head')
<style>
    body {
        background: url('Images/background.png') no-repeat center center fixed;
        background-size: cover;
    }
    .login-container {
        width: 80vh;
        background: rgba(255, 255, 255, 0.7);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .logo {
        position: absolute;
        display: block;
        margin: 0 auto 15px;
        width: 80px;
        top: -60px;
        transform: scale(2.5);
    }
    .box{
        position: relative;
    }
    .login-btn{
        height: 30px;
        font-size: 12px;
        flex: 1;
    }
    .f-btn{
        background-color: #1877F2 ;
    }
</style>
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="login-container text-center px-5">
        <div class="d-flex justify-content-center box my-3">  
            <img src="Images/Logo.png" alt="RaiDur Logo" class="logo">
        </div>
        <form method="POST" action="{{ route('login') }} class="mt-5">
            @csrf
            <div class="mb-3 text-start fw-bold">
                <label for="mail" class="form-label">Correo electrónico:</label>
                <input id="mail" name="email" type="email" class="form-control border border-black" required>
            </div>
            <div class="mb-3 text-start fw-bold">
                <label for="password" class="form-label">Contraseña:</label>
                <input id="password" name="password" type="password" class="form-control border border-black" required>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Recuérdame</label>
                </div>
                <a href="#">Olvidé mi contraseña</a>
            </div>
            <button type="submit" class="btn btn-primary px-4 fw-bold text-shadow-sm border border-black">ACCEDER</button>
        </form>
        <div class="d-flex flex-row mt-4 justify-content-between">
            <button class="btn p-1 btn-dark login-btn flex-growth-1">Continue with Apple</button>
            <button class="btn p-1 btn-light mx-3 login-btn flex-growth-1">Continue with Google</button>
            <button class="btn p-1 btn-primary login-btn text-white flex-growth-1 f-btn">Continue with Facebook</button>
        </div>
        <p class="mt-3">¿No tienes cuenta? <a href="#">Regístrate aquí</a></p>
    </div>
</div>

@endsection
