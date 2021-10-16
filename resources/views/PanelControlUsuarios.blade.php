<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Panel de Control</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/pagina_principal/documento.css') }}" rel="stylesheet">
        <link href="{{ asset('css/pagina_principal/formulario_registro.css') }}" rel="stylesheet">
        <link href="{{ asset('css/panel_control/opciones_panel_control.css') }}" rel="stylesheet">
        <link href="{{ asset('css/panel_control/informacion_panel_control.css') }}" rel="stylesheet">
        <link href="{{ asset('css/panel_control/agregar_usuario_panel_control.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        @if (session('status_error'))
            <div class="error-formulario-registro">
                {{ session('status_error') }}
            </div>
        @endif

        @if (session('status_exito'))
            <div class="exito-formulario-registro">
                {{ session('status_exito') }}
            </div>
        @endif
        <div id="contenedor-ventana">
        </div>
        <template id="template-modal-modificar">
            <div class="contenedor-modal">
                <div class="div-modal">
                    <div class="contenedor-formulario">
                    <form id="formulario-modificar" action="/Session/PanelControl/ActualizarUsuario" method="POST">
                        {{ csrf_field() }}
                        <br>
                        <div class="contenedor-campo-formulario">
                            <input type="text" class="campo-formulario" id="nombreCompleto" name="nombreCompleto" placeholder="Nombre Completo" required>
                        </div>
                        <div class="contenedor-campo-formulario">
                            <input type="email" class="campo-formulario" id="correo" name="correo" placeholder="Email" required>
                        </div>
                        <div class="contenedor-campo-formulario">
                            <input id="modificar" type="submit" class="boton-formulario" value="Modificar">
                        </div>
                        <div class="contenedor-campo-formulario">
                            <input id="cerrarVentana" type="submit" class="boton-formulario" value="Cerrar Ventana">
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </template>
        <template id="template-modal-registrar">
            <div class="contenedor-modal">
                <div class="div-modal">
                    <div class="contenedor-formulario">
                    <form action="/Session/PanelControl/RegistrarUsuario" method="POST">
                        {{ csrf_field() }}
                        <br>
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
                            <input id="cerrarVentana" type="submit" class="boton-formulario" value="Cerrar Ventana">
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </template>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="contenedor-panel-control">
                <div class="contenedor-opciones">
                    <div class="contenedor-campo-formulario" id="pimera-opcion">
                        <a href="{{ url('/Session/PanelControl') }}"><button id="administrarUsuarios" class="administrar-opcion" >Administrar Usuarios</button>
                    </a>
                    </div>
                    <div class="contenedor-campo-formulario">
                        <a href="{{ url('/Session/PanelControl/Clientes') }}">
                            <button id="administrarClientes" class="administrar-opcion" >Administrar Clientes</button>
                        </a>
                    </div>
                    <div class="contenedor-campo-formulario" id="cerrar-session">
                        <form action="/Session/CerrarSession" method="POST">
                            {{ csrf_field() }}
                            <div class="contenedor-campo-formulario">
                                <input id="cerrarSession" type="submit"  class="administrar-opcion" value="Salir del Sistema">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="contenedor-informacion">
                    <div class="encabezado">
                        <h2 class="titulo-tabla">Usuarios</h2>
                        <div class="contenedor-agregar">
                            <input id="agregarUsuario" type="button" class="agregar" value="➕">
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre Completo</th>
                                <th>Correo Electronico</th>
                                <th>Eliminar</th>
                                <th>Actualizar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $apuntador )
                            <tr>
                                <td>{{$apuntador->nombre_completo}}</td>
                                <td>{{$apuntador->email}}</td>
                                <td class="eliminar"><a href="{{ url('/Session/PanelControl/EliminarUsuario/'.$apuntador->id.'/') }}" >Eliminar</a></td>
                                <td class="modificar"><a id="modificarUsuario{{$apuntador->id}}" class="modificarUsuario" href="#"  value="{{$apuntador->id}}">Modificar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        <div class="contenedor-paginacion">
                            {{ $usuarios->links() }}
                        </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/manejador_eventos.js') }}" type="module"></script>
        <script src="{{ asset('js/controlador_modal.js') }}" type="module"></script>
    </body>
</html>
