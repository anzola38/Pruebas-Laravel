<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registrar</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/pagina_principal/documento.css') }}" rel="stylesheet">
        <link href="{{ asset('css/pagina_principal/formulario_registro.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        @if (session('status_error'))
            <div class="error-formulario-registro">
                {{ session('status_error') }}
            </div>
        @endif

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="contenedor-formulario">
                <form class="formulario" action="/RegistrarUsuario" method="POST">
                    {{ csrf_field() }}
                    <h3 class="titulo-formulario">Registrar Información</h3>
                    <div class="contenedor-campo-formulario">
                        <input type="text" class="campo-formulario" id="nombreCompleto" name="nombreCompleto" placeholder="Nombre Completo" required>
                    </div>
                    <div class="contenedor-campo-formulario">
                        <input type="email" class="campo-formulario" id="correo" name="correo" placeholder="Email" required>
                    </div>
                    <div class="contenedor-campo-formulario">
                        <input type="password" class="campo-formulario"  name="contrasenia1" id="contrasenia1" placeholder="Contraseña" required>
                    </div>
                    <div class="contenedor-campo-formulario">
                        <input type="password" class="campo-formulario" name="contrasenia2" id="contrasenia2" placeholder="Confirmar Contraseña" required>
                    </div>
                    <div class="contenedor-campo-formulario">
                        <input id="registrar" type="submit" class="boton-formulario" value="Registrar">
                    </div>
                    <div class="contenedor-campo-formulario">
                        <a href="{{ url('/Session') }}" class="ya-tengo-cuenta">Ya tengo cuenta</a>
                    </div>
                </form>
            </div>
        </div>
        <script src="{{ asset('js/manejador_eventos.js') }}" type="module"></script>
    </body>
</html>
