import {abrirModal,cerrarModal,abrirModalModificar,abrirModalCliente,abrirModalModificarCliente} from "./controlador_modal.js";

/**
 * Este evento esta encargado de capturar todos los clicks que se realizan en el documento
 * de esta manera se puede saber que elemento genero el evento
 */
document.addEventListener("click",(evento)=>{

     if(evento.target.matches("#agregarUsuario")){
        abrirModal("agregarUsuario");
     }

     if(evento.target.matches("#cerrarVentana")){
        cerrarModal("cerrarVentana");
     }

     if(evento.target.matches(".modificarUsuario")){
        abrirModalModificar(evento.target.id);
     }

     if(evento.target.matches("#agregarCliente")){
        abrirModalCliente("agregarCliente");
     }

     if(evento.target.matches(".actualizarCliente")){
        abrirModalModificarCliente(evento.target.id);
     }

});

/**
 * setTimeout encargado de eliminar los mensajes de error
 */
setTimeout(() => {
    const $mensaje = document.querySelector('.error-formulario-registro'),
    $elemento = $mensaje.parentNode;
    $elemento.removeChild($mensaje);

}, 4000);

/**
 * setTimeout encargado de eliminar los mensajes de exito
 */
setTimeout(() => {
    const $mensaje2 = document.querySelector('.exito-formulario-registro'),
    $elemento2 = $mensaje2.parentNode;
    $elemento2.removeChild($mensaje2);
}, 4000);
