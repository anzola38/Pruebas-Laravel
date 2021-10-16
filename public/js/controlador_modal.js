/**
 * Funcion encargada de abrir el modal para registrar un usuario desde el panel de control
 * @param {*} id id del elemento html
 */
export  function abrirModal(id) {

    let $clonTemplate = document.importNode(document.getElementById('template-modal-registrar').content,true);
    const $contenedor = document.getElementById('contenedor-ventana'),
    $fragmento = document.createDocumentFragment();

    $fragmento.appendChild($clonTemplate);
    $contenedor.appendChild($fragmento);
}
/**
 * Funcion encargada de cerrar el modal desde el panel de control
 * @param {*} id id del elemento html
 */
export  function cerrarModal(id) {
    const $contenedor = document.getElementById('contenedor-ventana');
    $contenedor.innerHTML ="";
}
/**
 * Funcion encargada de abrir el modal para modificar un usuario desde el panel de control
 * @param {*} id id del elemento html
 */
export  function abrirModalModificar(id) {

    let $clonTemplate = document.importNode(document.getElementById('template-modal-modificar').content,true);
    const $contenedor = document.getElementById('contenedor-ventana'),
    $fragmento = document.createDocumentFragment();
    $fragmento.appendChild($clonTemplate);
    $contenedor.appendChild($fragmento);

    let $input = document.createElement("input");
    const $formulario = document.getElementById('formulario-modificar')
    $input.name = "id";
    $input.type = "hidden";
    $input.value = document.getElementById(id).getAttribute("value");
    $formulario.appendChild($input);
}
/**
 * Funcion encargada de abrir el modal para registrar un cliente desde el panel de control
 * @param {*} id id del elemento html
 */
export  function abrirModalCliente(id) {

    let $clonTemplate = document.importNode(document.getElementById('template-modal-cliente').content,true);
    const $contenedor = document.getElementById('contenedor-ventana'),
    $fragmento = document.createDocumentFragment();

    $fragmento.appendChild($clonTemplate);
    $contenedor.appendChild($fragmento);
}
/**
 * Funcion encargada de abrir el modal para modificar un cliente desde el panel de control
 * @param {*} id id del elemento html
 */
export  function abrirModalModificarCliente(id) {

    let $clonTemplate = document.importNode(document.getElementById('template-modal-cliente-modificar').content,true);
    const $contenedor = document.getElementById('contenedor-ventana'),
    $fragmento = document.createDocumentFragment();
    $fragmento.appendChild($clonTemplate);
    $contenedor.appendChild($fragmento);

    let $input = document.createElement("input");
    const $formulario = document.getElementById('formulario-modificar')
    $input.name = "id";
    $input.type = "hidden";
    $input.value = document.getElementById(id).getAttribute("value");
    $formulario.appendChild($input);
}
