<!-- @extends('layouts.app')

@section('content') -->
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="./style.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <title>INICIO DE SESION - MP</title>
    </head>
    <body>
<section class="side">
            <img src="Blanco.png" alt="">
        </section>

        <section class="main">
            <div class="login-container">
                <p class="title">SYSTEM ADMIN </p>
                <div class="separator"></div>
                <p class="welcome-message">INGRESA TUS CREDENCIALES POR FAVOR.</p>

                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-control">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-control">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <i class="fas fa-lock"></i>
                    </div>

                    <button class="submit">ACEPTAR</button>
                </form>
            </div>
        </section>
        
    </body>
    </html>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    color: #303433;
}

body {
    min-height: 100vh;
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr;
}

section {
    display: flex;
    justify-content: center;
    align-items: center;
}

section.side {
    background: url(./images/bk1.png) no-repeat;
    background-size: 120% 70%;
}

.side img {
    width: 60%;
    max-width: 60%;
}

.login-container {
    max-width: 450px;
    padding: 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.title {
    text-transform: uppercase;
    font-size: 3em;
    font-weight: bold;
    text-align: center;
    letter-spacing: 1px;
}

.separator {
    width: 150px;
    height: 4px;
    background-color: #3bbec7;
    margin: 24px;
}

.welcome-message {
    text-align: center;
    font-size: 1.1em;
    line-height: 28px;
    margin-bottom: 30px;
    color: #696969;
}

.login-form {
    width: 100%;
    display: flex;
    flex-direction: column;
}

.form-control {
    width: 100%;
    position: relative;
    margin-bottom: 24px;
}

input,
button {
    border: none;
    outline: none;
    border-radius: 30px;
    font-size: 1.1em;
}

input {
    width: 100%;
    background: #e6e6e6;
    color: #333;
    letter-spacing: 0.5px;
    padding: 14px 64px;
}

input ~ i {
    position: absolute;
    left: 32px;
    top: 50%;
    transform: translateY(-50%);
    color: #888;
    transition: color   0.4s;
}

input:focus ~ i {
    color: #3bbec7;
}

button.submit {
    color: #fff;
    padding: 14px 64px;
    margin: 32px auto;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: bold;
    background-image: linear-gradient(to right, #3bbec7, #032961);
    cursor: pointer;
    transition: opacity 0.4s;
}

button.submit:hover {
    opacity: 0.9;
}

/* ----  Responsiveness   ----  */
@media (max-width: 780px) {

    body {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .side {
        display: none;
    }
}
</style>
<!-- @endsection -->
