<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RegistrarUsuario extends Controller
{
    /**
     * Este constructor esta encargado de validar que este el usuario no este logueado
     */
    public function __construct()
    {
        $this->middleware('ControlLogin');
    }
    /**
     * Esta metodo tiene la función de almacenar un usuario si pasa las validaciones
     * de los campos.
     */
    public function guardarUsuario(Request $request){

        if($request->input('contrasenia1') != $request->input('contrasenia2')){
            return redirect('/RegistrarUsuario/Error')->with('status_error', "Error, las contraseñas no coinciden.");
        }

        if(DB::table('usuarios')->where('email', $request->input('correo'))->exists()){
            return redirect('/RegistrarUsuario/Error')->with('status_error', "Error, el correo ingresado ya se encuentra registrado.");
        }

        DB::table('usuarios')->insert([
            'nombre_completo' => $request->input('nombreCompleto'),
            'email' => $request->input('correo'),
            'password' => bcrypt($request->input('contrasenia1'))
        ]);

        return redirect('/Session');
    }

    /**
     * Este metodo tiene la función de cargar la vista de registro con el mensaje de error en la validación
     * de los campos del formulario si se encuentra un error.
     */
    public function cargarVista(){
        return view('Registrar');
    }
}
