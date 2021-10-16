<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrarUsuario;
use App\Http\Controllers\IngresarUsuario;
use App\Http\Controllers\ControlSistema;
use App\Http\Controllers\ControlSistemaCliente;

/**
 * Esta ruta redirecciona todo a la pagina principal
 */
Route::get('/', [ControlSistemaCliente::class, 'cargarVista']);
/**
 * Esta ruta esta encargada de abrir el formulario de registro.
 */
Route::get('/Registrar', [RegistrarUsuario::class, 'cargarVista']);
/**
 * Esta ruta esta encargada de enviar la información del usuario para ser guardada.
 */
Route::post('/RegistrarUsuario', [RegistrarUsuario::class, 'guardarUsuario']);
/**
 * Esta ruta esta encargada de enviar la información del usuario desde el panel para ser guardada.
 */
Route::post('/Session/PanelControl/RegistrarUsuario', [ControlSistema::class, 'guardarUsuario']);
/**
 * Esta ruta esta encargada de abrir el formulario de registro en caso de que las validaciones no se cumplan.
 */
Route::get('/RegistrarUsuario/Error', [RegistrarUsuario::class, 'cargarVista']);
/**
 * Esta ruta esta encargada de abrir login del usuario
 */
Route::get('/Session', [IngresarUsuario::class, 'cargarVista']);
/**
 * Esta ruta esta encargada de cerrar el login del usuario
 */
Route::post('/Session/CerrarSession', [IngresarUsuario::class, 'cerrarSession']);
/**
 * Esta ruta esta encargada de iniciar session en el aplicativo
 */
Route::post('SessionUsuario', [IngresarUsuario::class, 'iniciarSession']);
/**
 * Esta ruta esta encargada de abrir el formulario de inicio de session en caso de que las validaciones no se cumplan.
 */
Route::get('/Session/Error', [IngresarUsuario::class, 'cargarVista']);
/**
 * Esta ruta esta encargada de abrir la pagina principal del sistema una vez ingresado al sistema
 */
Route::get('/Session/PanelControl', [ControlSistema::class, 'cargarVista']);
/**
 * Esta ruta esta encargada de eliminar un usuario
 */
Route::get('/Session/PanelControl/EliminarUsuario/{id}', [ControlSistema::class, 'eliminarUsuario']);
/**
 * Esta ruta esta encargada de actualizar un usuario
 */
Route::post('/Session/PanelControl/ActualizarUsuario', [ControlSistema::class, 'actualizarUsuario']);
/**
 * Esta ruta esta encargada de abrir el panel del control en caso de que surja un error
 */
Route::get('/Session/PanelControl/Error', [ControlSistema::class, 'cargarVista']);
/**
 * Esta ruta esta encargada de abrir la pagina principal de la administración de los clientes
 */
Route::get('/Session/PanelControl/Clientes', [ControlSistemaCliente::class, 'cargarVista']);
/**
 * Esta ruta esta encargada de enviar la información del cliente para ser guardada.
 */
Route::post('/Session/PanelControl/Clientes/RegistrarCliente', [ControlSistemaCliente::class, 'guardarCliente']);
/**
 * Esta ruta esta encargada de eliminar un cliente
 */
Route::get('/Session/PanelControl/Clientes/EliminarCliente/{id}', [ControlSistemaCliente::class, 'eliminarCliente']);
/**
 * Esta ruta esta encargada de actualizar un cliente
 */
Route::post('/Session/PanelControl/Clientes/ActualizarCliente', [ControlSistemaCliente::class, 'actualizarCliente']);
/**
 * Esta ruta esta encargada de redireccionar en caso de que no se tengan permisos
 */
Route::get('/Session/PanelControl/AccesoDenegado', function () {
    return view('AccesoDenegado');
});
