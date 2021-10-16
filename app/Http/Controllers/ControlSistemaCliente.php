<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ControlSistemaCliente extends Controller
{
    /**
     * Este constructor esta encargado de validar que este el usuario logueado
     */
    public function __construct()
    {
        $this->middleware('ControlInicioSession');
    }

    /**
     * Este metodo tiene la función de cargar la vista con todos los clientes registrados en el sistema
     */
    public function cargarVista(){
        $clientes = DB::table('clientes')->select('nombre_completo', 'documento','email','direccion','id')->paginate(4);
        return view('PanelControlClientes',compact('clientes'));
    }

    /**
     * Esta metodo tiene la función de almacenar un cliente si pasa las validaciones
     * de los campos.
     */
    public function guardarCliente(Request $request){

        if(DB::table('clientes')->where('documento', $request->input('numeroDocumento'))->exists()){
            return redirect('/Session/PanelControl/Clientes')->with('status_error', "Error, el numero de documento ingresado ya se encuentra registrado.");
        }

        DB::table('clientes')->insert([
            'nombre_completo' => $request->input('nombreCompleto'),
            'documento' => $request->input('numeroDocumento'),
            'email' => $request->input('correo'),
            'direccion' => $request->input('direccion')
        ]);

        return redirect('/Session/PanelControl/Clientes')->with('status_exito', "Éxito, se registro el cliente.");
    }

    /**
     * Este metodo tiene la funcion de eleminar un cliente
     */
    public function eliminarCliente($id){
        DB::table('clientes')->where('id', '=', $id)->delete();
        return redirect('/Session/PanelControl/Clientes')->with('status_exito', "Éxito, elimino el cliente.");
    }

    /**
     * Este metodo tiene la funcion de actualizar un cliente
     */
    public function actualizarCliente(Request $request){

        if(DB::table('clientes')->where('documento', $request->input('numeroDocumento'))->exists()){
            return redirect('/Session/PanelControl/Clientes')->with('status_error', "Error, el numero de documento ingresado ya se encuentra registrado.");
        }

        $oo = DB::table('clientes')->where('id', $request->input('id'))->update(['nombre_completo' => $request->input('nombreCompleto'), 'documento' => $request->input('numeroDocumento'), 'email' => $request->input('correo'), 'direccion' => $request->input('direccion')]);

        return redirect('/Session/PanelControl/Clientes')->with('status_exito', "Éxito, se modifico el cliente.");
    }

}
