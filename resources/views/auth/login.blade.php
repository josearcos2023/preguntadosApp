@extends('layouts.guest')
@section('content')
<body class="fondo">
    <div style="display: flex;flex-direction: column;">
        <div class=" nav_homesite"><!--Sección superior de navegación y logo-->
            <div class=""> <!--Icono del logo de la aplicación-->
                <p style="color: aliceblue;">Preguntados</p>
            </div>
            <div class="nav_list"><!--Opciones de navegación de inicio-->
                <div class="box_link">
                    <a href="" class="nav_link">
                        <p class="nav_text">Mas info</p>
                    </a>
                </div>
                <div class="box_link">
                    <a href="" class="nav_link">
                        <p class="nav_text">Cómo jugar?</p>
                    </a>
                </div>
                <div class="box_link">
                    <a href="" class="nav_link">
                        <p class="nav_text">Iniciar sesión</p>
                    </a>
                </div>
                <div class="box_link">
                    <a href="" class="nav_link">
                        <p class="nav_text">Registrarse</p>
                    </a>
                </div>
            </div>
        </div>
{{-- <x-guest-layout> --}}
    <div style=" height: 100vh" class="d-flex justify-content-center align-items-center"><!--sección principal-->
        <div class="d-flex" style="height: 80%;width: 70%; background-color: aliceblue;">
            <div class="col-6 card box_main_img"><!--sección imagen-->
                <img src="images/nave_espacial_login.jpg" alt="" width="100%" height="100%">
                <div class="card-img-overlay d-flex align-items-start flex-column bd-highlight mb-3 ">
                    <div class="p-2  d-flex flex-column justify-content-center" style="width: 100%; height: 50%;">
                        <!--Texto superiore-->
                        <div class="d-flex align-items-center justify-content-center" style="height: 50%;">
                            <p class="text-white " style="font-size: 35px;text-align: center;">Estás a punto de
                                conocer SPACES QUIZ</p>
                        </div>
                        <div class="d-flex align-items-start justify-content-center" style="height: 50%;">
                            <p class="text-white " style="font-size: 30px;text-align: center;">¿Estás listo?</p>
                        </div>
                    </div>

                    <div class="p-2   d-flex justify-content-center" style="width: 100%; height: 50%;">
                        <!--Texto inferior-->
                        <p class=" text-white d-flex align-items-end " style="font-size: 20px;text-align: center;">
                            Una única e interactiva plataforms que medirá tus conocimientos, memoria y velocidad
                            sobre tu carrera profesional. </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6  col-12 d-flex justify-content-center align-items-center box_main_form"> <!--Form iniciar sesion-->
                <div style="display: flex;justify-content: center;flex-direction: column; width: 80%; height: 90%;"><!--Caja form iniciar sesion-->
                    <div class="d-flex align-items-end justify-content-center" style="height: 20%;"><!--Form iniciar sesion Texto sup-->
                            <p class="login_title">Iniciar sesión</p>
                    </div>
                    <div style="height: 60%;"><!--Form iniciar sesion inputs y boton-->
    <authentication-card>
        <slot name="logo">
            <authentication-card-logo />
        </slot>
        <validation-errors class="mb-4" />

        @if (session('status'))
            <div class="">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div style="padding: 16px 0px 16px 0px;">
                <label for="email" value="Email"></label>
                <input id="email" class="input_login form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email">
            </div>
            <div style="padding: 16px 0px 16px 0px;">
                <label for="password" value="Contraseña"></label>
                <input id="password" class="input_login form-control" type="password" name="password" required autocomplete="current-password" placeholder="Contraseña">
            </div>

            <div style="padding: 16px 0px 16px 0px;">
                <label for="remember_me" class="flex items-center">
                    <input type="checkbox" id="remember_me" name="remember">
                    {{-- <checkbox id="remember_me" name="remember"> --}}
                    <span>Recuérdame</span>
                </label>
            </div>

            <div class="">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="btn btn-outline-secondary btn-lg"  style="color: blueviolet">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </authentication-card>
{{-- </x-guest-layout> --}}

</body>
@stop