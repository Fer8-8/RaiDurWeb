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
    <div class="login-container text-center px-5 pb-0">
        <div class="d-flex justify-content-center box my-3">  
            <img src="Images/Logo.png" alt="RaiDur Logo" class="logo">
        </div>
        <form method="POST" action="{{route('register') }}" class="mt-5">
            @csrf
            <div class="mb-3 text-start fw-bold">
                <label class="form-label">Nombre:</label>
                <input id="name" type="text" class="form-control border @error('name') is invalid @enderror border-black" name="name" value="{{old('name')}}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 text-start fw-bold">
                <label class="form-label">Nombre de usuario:</label>
                <input id="userName" type="text" class="form-control border border-black @error('userName') is invalid @enderror" name="userName" required autocomplete="userName" autofocus>

                @error('userName')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 text-start fw-bold">
                <label for="email" class="form-label">Correo electronico:</label>
                <input id="email" type="email" class="form-control border border-black @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 text-start fw-bold">
                <label for="password" class="form-label">Contraseña:</label>
                <input id="password" type="password" class="form-control border border-black @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 text-start fw-bold">
                <label for="password" class="form-label">Confirmar contraseña:</label>
                <input id="password-confirm" type="password" class="form-control border border-black" name="password_confirmation" required autocomplete="password_confirmation">
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <input type="checkbox" id="remember">
                    <label for="remember">Recuérdame</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary px-4 fw-bold text-shadow-sm border border-black">ACCEDER</button>
        </form>
        <a class="text-start text-black mt-3 d-block" href="#">Términos y condiciones</a>
    </div>
</div>

@endsection
