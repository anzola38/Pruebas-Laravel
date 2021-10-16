<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iniciar Sesión</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/pagina_principal/documento.css') }}" rel="stylesheet">
        <link href="{{ asset('css/pagina_principal/formulario_registro.css') }}" rel="stylesheet">
        <link href="{{ asset('css/pagina_principal/formulario_login.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        @if (session('status_error'))
            <div class="error-formulario-registro">
                {{ session('status_error') }}
            </div>
        @endif
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="contenedor-formulario">
                <form class="formulario-login" action="/SessionUsuario" method="POST">
                    {{ csrf_field() }}
                    <h3 class="titulo-formulario">Ingresar al Sistema</h3>
                    <div class="contenedor-campo-formulario">
                        <input type="email" class="campo-formulario" id="correo" name="email" placeholder="Email" required>
                    </div>
                    <div class="contenedor-campo-formulario">
                        <select id="tipo-permiso" class="campo-formulario" name="tipoPermiso" required>
                            <option value="A">Administrador</option>
                            <option value="V">Vendedor</option>
                        </select>
                    </div>
                    <div class="contenedor-campo-formulario">
                        <input type="password" class="campo-formulario" id="contrasenia" name="password" placeholder="Contraseña" required>
                    </div>
                    <div class="contenedor-campo-formulario">
                        <input id="ingresar" type="submit" class="boton-formulario" value="Ingresar">
                    </div>
                    <div class="contenedor-campo-formulario">
                        <a href="{{ url('/Registrar') }}" class="crear-cuenta">No Tengo Cuenta</a>
                    </div>
                </form>
            </div>
        </div>
        <script src="{{ asset('js/manejador_eventos.js') }}" type="module"></script>
    </body>
</html>
