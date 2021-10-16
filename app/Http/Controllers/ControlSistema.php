<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ControlSistema extends Controller
{
    /**
     * Este constructor esta encargado de validar que este el usuario logueado y que tenga permisos para ingresar
     */
    public function __construct()
    {
        $this->middleware('ControlInicioSession');
        $this->middleware('ControlPermiso');
    }

    /**
     * Este metodo tiene la función de cargar la vista con todos los usuarios registrados en el sistema
     */
    public function cargarVista(){
        $usuarios = DB::table('usuarios')->select('nombre_completo', 'email','id')->paginate(5);
        return view('PanelControlUsuarios', compact('usuarios'));
    }

    /**
     * Esta metodo tiene la función de almacenar un usuario si pasa las validaciones
     * de los campos.
     */
    public function guardarUsuario(Request $request){

        if($request->input('contrasenia1') != $request->input('contrasenia2')){
            return redirect('/Session/PanelControl/Error')->with('status_error', "Error, las contraseñas no coinciden.");
        }

        if(DB::table('usuarios')->where('email', $request->input('correo'))->exists()){
            return redirect('/Session/PanelControl/Error')->with('status_error', "Error, el correo ingresado ya se encuentra registrado.");
        }

        DB::table('usuarios')->insert([
            'nombre_completo' => $request->input('nombreCompleto'),
            'email' => $request->input('correo'),
            'password' => bcrypt($request->input('contrasenia1'))
        ]);

        return redirect('/Session/PanelControl')->with('status_exito', "Éxito, se registro el usuario.");
    }

    /**
     * Este metodo tiene la funcion de eleminar un usuario
     */
    public function eliminarUsuario($id){
        DB::table('usuarios')->where('id', '=', $id)->delete();
        return redirect('/Session/PanelControl')->with('status_exito', "Éxito, elimino el usuario.");
    }

    /**
     * Este metodo tiene la funcion de actualizar un usuario
     */
    public function actualizarUsuario(Request $request){

        if(DB::table('usuarios')->where('email', $request->input('correo'))->exists()){
            return redirect('/Session/PanelControl/Error')->with('status_error', "Error, el correo ingresado ya se encuentra registrado.");
        }

        DB::table('usuarios')->where('id', $request->input('id'))->update(['nombre_completo' => $request->input('nombreCompleto'), 'email' => $request->input('correo')]);

        return redirect('/Session/PanelControl')->with('status_exito', "Éxito, se modifico el usuario.");
    }

}
