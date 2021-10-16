<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Auth;

class IngresarUsuario extends Controller
{
     /**
     * Este constructor esta encargado de validar que este el usuario no este logueado
     */
    public function __construct()
    {
        $this->middleware('ControlLogin', ['except' => ['cerrarSession']]);
    }

    /**
     * Este metodo tiene la función de cargar la vista de login con el mensaje de error en la validación
     * de los campos del formulario si se encuentra un error.
     */
    public function cargarVista(){
        return view('Ingresar');
    }

    /**
     * Este metodo tiene la función de iniciar sessión
     */
    public function iniciarSession(Request $request){

        $credentials = request(['email', 'password']);
        if (!$token = auth()->attempt($credentials)) {
            return redirect('/Session/Error')->with('status_error', "Error, la contraseña o correo ingresado no es correcto.");
        }

        $request->session()->put('token',$token);
        $request->session()->put('permiso',$request->input('tipoPermiso'));
        return redirect('/Session/PanelControl/Clientes');
    }

    /**
     * Este metodo tiene la función de cerrar sessión
     */
    public function cerrarSession(Request $request){
        $request->session()->put('token',null);
        return redirect('/Session');
    }

}
