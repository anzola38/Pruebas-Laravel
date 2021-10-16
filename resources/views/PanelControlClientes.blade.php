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
        <template id="template-modal-cliente-modificar">
            <div class="contenedor-modal">
                <div class="div-modal">
                    <div class="contenedor-formulario">
                    <form id="formulario-modificar" action="/Session/PanelControl/Clientes/ActualizarCliente" method="POST">
                        {{ csrf_field() }}
                        <br>
                        <div class="contenedor-campo-formulario">
                            <input type="text" class="campo-formulario" id="nombreCompleto" name="nombreCompleto" placeh
                            older="Nombre Completo" required>
                        </div>
                        <div class="contenedor-campo-formulario">
                            <input type="number" class="campo-formulario" id="numeroDocumento" name="numeroDocumento" placeholder="# Documento" required>
                        </div>
                        <div class="contenedor-campo-formulario">
                            <input type="email" class="campo-formulario" id="correo" name="correo" placeholder="Email" required>
                        </div>
                        <div class="contenedor-campo-formulario">
                            <input type="text" class="campo-formulario" id="direccion" name="direccion" placeholder="Dirección" required>
                        </div>
                        <div class="contenedor-campo-formulario">
                            <input id="registrarCliente" type="submit" class="boton-formulario" value="Guardar">
                        </div>
                        <div class="contenedor-campo-formulario">
                            <input id="cerrarVentana" type="submit" class="boton-formulario" value="Cerrar Ventana">
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </template>
        <template id="template-modal-cliente">
            <div class="contenedor-modal">
                <div class="div-modal">
                    <div class="contenedor-formulario">
                    <form action="/Session/PanelControl/Clientes/RegistrarCliente" method="POST">
                        {{ csrf_field() }}
                        <br>
                        <div class="contenedor-campo-formulario">
                            <input type="text" class="campo-formulario" id="nombreCompleto" name="nombreCompleto" placeh
                            older="Nombre Completo" required>
                        </div>
                        <div class="contenedor-campo-formulario">
                            <input type="number" class="campo-formulario" id="numeroDocumento" name="numeroDocumento" placeholder="# Documento" required>
                        </div>
                        <div class="contenedor-campo-formulario">
                            <input type="email" class="campo-formulario" id="correo" name="correo" placeholder="Email" required>
                        </div>
                        <div class="contenedor-campo-formulario">
                            <input type="text" class="campo-formulario" id="direccion" name="direccion" placeholder="Dirección" required>
                        </div>
                        <div class="contenedor-campo-formulario">
                            <input id="registrarCliente" type="submit" class="boton-formulario" value="Guardar">
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
                        <h2 class="titulo-tabla">Clientes</h2>
                        <div class="contenedor-agregar">
                            <input id="agregarCliente" type="button" class="agregar" value="➕">
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre Completo</th>
                                <th># Documento</th>
                                <th>Correo Electronico</th>
                                <th>Dirección</th>
                                <th>Eliminar</th>
                                <th>Actualizar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $apuntador )
                            <tr>
                                <td>{{$apuntador->nombre_completo}}</td>
                                <td>{{$apuntador->documento}}</td>
                                <td>{{$apuntador->email}}</td>
                                <td>{{$apuntador->direccion}}</td>
                                <td class="eliminar"><a href="{{ url('/Session/PanelControl/Clientes/EliminarCliente/'.$apuntador->id.'/') }}" >Eliminar</a></td>
                                <td class="modificar"><a id="modificarCliente{{$apuntador->id}}" class="actualizarCliente" href="#"  value="{{$apuntador->id}}">Modificar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        <div class="contenedor-paginacion">
                            {{ $clientes->links() }}
                        </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/manejador_eventos.js') }}" type="module"></script>
        <script src="{{ asset('js/controlador_modal.js') }}" type="module"></script>
    </body>
</html>
