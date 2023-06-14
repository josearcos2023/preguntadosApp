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
    {{-- <authentication-card>
        <slot name="logo">
            <authentication-card-logo>
        </slot>
        <validation-errors class="mb-4"> --}}
<div class="d-flex justify-content-center align-items-center"><!--sección principal-->
    <div class="d-flex" style=" background-color: rgb(255, 255, 255);">
        <div class="col-lg-6  col-12 "><!--sección registro-->
            <div style="padding: 50px;">
                <div>
                    <p style="font-size: 40px;padding: 0px 0px 0px 20px;">Registro</p>
                </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="double_col box_input">
                <label for="name" value="Name">Name</label>
                <input id="name" class="registro_input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4 double_col box_input">
                <label for="lastname" value="Lastname">Lastname</label>
                <input id="lastname" class="registro_input" type="text" name="lastname" :value="old('lastname')" required autocomplete="username" />
            </div>

            <div class="mt-4 double_col box_input">
                <label for="username" value="Username">Username</label>
                <input id="username" class="registro_input" type="text" name="username" :value="old('username')" required autocomplete="username" />
            </div>

            <div class="mt-4 double_col box_input">
                <label for="email" value="Email">Email</label>
                <input id="email" class="registro_input" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
            <div class="mt-4 double_col box_input">
                <label for="password" value="Password">Password</label>
                <input id="password" class="registro_input" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4 double_col box_input">
                <label for="password_confirmation" value="Confirm password">Confirm password</label>
                <input id="password_confirmation" class="registro_input" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div>
                <div class="d-flex justify-content-center" style="padding-top: 50px;">
                    <a href="{{ route('login') }}" class="d-flex " style="display: flex;">
                    {{ __('Tienes una cuenta?') }}
                    </a>
                </div>
                <div class="d-flex justify-content-center" style="padding-top: 10px;">
                    <button class="ml-4 btn btn-outline-secondary btn-lg" style="color: rgb(0, 0, 0)">
                        {{ __('Registrar') }}
                    </button>
                </div>
            </div>
        </form>
{{-- Inicio Texto extra --}}
                <div class="col-lg-6 card box_main_img d-flex justify-content-center align-items-center box_main_form" style="background-color: aqua;"> <!--seccion imagen-->
                        <img src="/images/nave_espacial_login.jpg" alt="dibujo digital de nave espacial" width="100%" height="100%">
                        <div class="card-img-overlay d-flex align-items-start flex-column bd-highlight mb-3 ">
                            <div class="p-2  d-flex flex-column justify-content-center" style="width: 100%; height: 50%;">
                                <!--Texto superiore-->
                                <div class="d-flex align-items-center justify-content-center" style="height: 50%;">
                                    <p class="text-white " style="font-size: 35px;text-align: center;">Estás a punto de conocer SPACES QUIZ</p>
                                </div>
                            </div>
                        </div>
                </div>
{{-- Fin texto extra --}}
            </div>
        </div>
    </div>
</div>
    {{-- </authentication-card> --}}
@stop
</body>