// ===================================================================
// VALIDACIÓN DE FORMULARIO DE REGISTRO
// ===================================================================
// Este script valida los campos del formulario antes de enviarlo.
// Usa validación del lado del cliente (Client-Side Validation).
// Ref general: https://developer.mozilla.org/es/docs/Learn/Forms/Form_validation

// ① SELECCIONAR EL FORMULARIO POR SU ID
// ----------------------------------------
// document.getElementById() busca un elemento HTML cuyo atributo id
// coincida con el string proporcionado. Retorna el elemento o null.
// Es el método más rápido de selección del DOM.
// Ref: https://developer.mozilla.org/es/docs/Web/API/Document/getElementById
const form = document.getElementById('miFormulario');

// ② ESCUCHAR EL EVENTO "submit" DEL FORMULARIO
// -----------------------------------------------
// addEventListener() registra una función que se ejecutará cada vez
// que ocurra el evento especificado en el elemento.
// El evento "submit" se dispara cuando el usuario presiona el botón
// type="submit" dentro del formulario.
// Ref addEventListener: https://developer.mozilla.org/es/docs/Web/API/EventTarget/addEventListener
// Ref evento submit: https://developer.mozilla.org/es/docs/Web/API/HTMLFormElement/submit_event
form.addEventListener('submit', function(event) {

  // ③ PREVENIR EL COMPORTAMIENTO POR DEFECTO
  // -------------------------------------------
  // Por defecto, un formulario al hacer submit recarga la página
  // (envía los datos al servidor y navega a la URL del action).
  // event.preventDefault() cancela ese comportamiento predeterminado,
  // permitiéndonos manejar el envío con JavaScript sin recargar.
  // Ref: https://developer.mozilla.org/es/docs/Web/API/Event/preventDefault
  event.preventDefault();

  // ④ OBTENER LOS VALORES DE LOS CAMPOS DEL FORMULARIO
  // -----------------------------------------------------
  // Primero seleccionamos cada input por su id con getElementById(),
  // luego accedemos a su propiedad .value que contiene el texto
  // que el usuario escribió en el campo.
  // Ref .value: https://developer.mozilla.org/es/docs/Web/API/HTMLInputElement
  // Usamos "var" en lugar de "const/let" (funciona igual, pero var
  // tiene alcance de función, no de bloque).
  // Ref var vs let vs const: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Statements/var
  var nombre = document.getElementById('nombre').value;
  var email  = document.getElementById('email').value;
  var edad   = document.getElementById('edad').value;

  // ⑤ LIMPIAR ERRORES ANTERIORES Y DEPURACIÓN
  // ---------------------------------------------
  // console.log() imprime datos en la consola del navegador (F12 > Console).
  // Aquí imprimimos un objeto con los valores capturados para depuración.
  // La sintaxis { nombre: nombre } crea un objeto JavaScript.
  // Ref console.log: https://developer.mozilla.org/es/docs/Web/API/console/log_static
  // Ref objetos: https://developer.mozilla.org/es/docs/Web/JavaScript/Guide/Working_with_objects
  console.log({
    nombre: nombre,
    email: email,
    edad: edad
  });

  // innerHTML permite leer o escribir el contenido HTML interno de un elemento.
  // Al asignar '' (string vacío), eliminamos cualquier mensaje de error previo.
  // Ref: https://developer.mozilla.org/es/docs/Web/API/Element/innerHTML
  document.getElementById('errores').innerHTML = '';

  // Creamos un array vacío donde almacenaremos los mensajes de error.
  // Array (arreglo) es una estructura de datos que almacena múltiples valores.
  // Ref: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/Array
  var mensajes = [];

  // ⑥ VALIDAR NOMBRE (no vacío, mínimo 3 caracteres)
  // ---------------------------------------------------
  // Comparamos con === (igualdad estricta: compara valor Y tipo).
  // Si está vacío, agregamos error. Si no, verificamos su longitud.
  // .length retorna la cantidad de caracteres del string.
  // .push() agrega un elemento al final del array.
  // Ref ===: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Operators/Strict_equality
  // Ref .length: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/String/length
  // Ref .push(): https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/Array/push
  if (nombre === '') {
    mensajes.push('El nombre es obligatorio');
  } else if (nombre.length < 3) {
    mensajes.push('El nombre debe tener al menos 3 caracteres');
  }

  // ⑦ VALIDAR EMAIL (debe contener @)
  // ------------------------------------
  // .indexOf() busca un substring dentro del string y retorna su posición.
  // Si NO lo encuentra, retorna -1.
  // Aquí verificamos que el email contenga el carácter "@".
  // Ref: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/String/indexOf
  if (email === '') {
    mensajes.push('El email es obligatorio');
  } else if (email.indexOf('@') === -1) {
    mensajes.push('El email debe contener @');
  }

  // ⑧ VALIDAR EDAD (debe estar entre 1 y 120)
  // ---------------------------------------------
  // Usamos los operadores de comparación < y > para verificar el rango.
  // El operador || (OR lógico) devuelve true si ALGUNA condición es verdadera.
  // Nota: "edad" viene como string del input, pero JavaScript lo convierte
  // automáticamente a número en las comparaciones (coerción de tipos).
  // Ref comparación: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Operators/Less_than
  // Ref OR lógico: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Operators/Logical_OR
  // Ref coerción: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/Number#coerci%C3%B3n_a_number
  if (edad === '') {
    mensajes.push('La edad es obligatoria');
  } else if (edad < 1 || edad > 120) {
    mensajes.push('La edad debe estar entre 1 y 120');
  }

  // ⑨ MOSTRAR ERRORES SI EXISTEN
  // --------------------------------
  // .length en un array retorna la cantidad de elementos.
  // Si hay al menos 1 error, construimos HTML con los mensajes.
  // Ref Array.length: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/Array/length
  if (mensajes.length > 0) {

    // Usamos un bucle for clásico para recorrer el array de mensajes.
    // - var i = 0: inicializamos el contador en 0 (primer índice del array)
    // - i < mensajes.length: mientras i sea menor que el total de elementos
    // - i++: incrementamos i en 1 después de cada iteración
    // Ref for: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Statements/for
    var listaHTML = '';
    for (var i = 0; i < mensajes.length; i++) {
      // Concatenamos (+) cada mensaje dentro de etiquetas <p>.
      // mensajes[i] accede al elemento en la posición i del array.
      // Ref acceso por índice: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/Array#acceder_a_elementos_de_un_array
      listaHTML += '<p>' + mensajes[i] + '</p>';
    }

    // Insertamos el HTML generado dentro del contenedor de errores.
    // innerHTML interpreta el string como HTML y lo renderiza en la página.
    // Ref: https://developer.mozilla.org/es/docs/Web/API/Element/innerHTML
    document.getElementById('errores').innerHTML = listaHTML;
  } else {

    // ⑩ FORMULARIO VÁLIDO - MOSTRAR MENSAJE DE ÉXITO
    // -------------------------------------------------
    // alert() muestra un cuadro de diálogo modal con un mensaje.
    // El usuario debe presionar "Aceptar" para continuar.
    // Ref: https://developer.mozilla.org/es/docs/Web/API/Window/alert
    alert('Formulario enviado correctamente');
  }

});
