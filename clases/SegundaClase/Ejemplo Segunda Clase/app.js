// ===================================================================
// SISTEMA DE TABS (PESTAÑAS) - Navegación entre formularios
// ===================================================================

// ① SELECCIÓN DE ELEMENTOS DEL DOM
// ---------------------------------
// document.querySelectorAll() retorna un NodeList con TODOS los elementos
// que coincidan con el selector CSS proporcionado.
// A diferencia de querySelector() que solo retorna el primero.
// Ref: https://developer.mozilla.org/es/docs/Web/API/Document/querySelectorAll
const tabButtons = document.querySelectorAll('.tab-btn');

// Seleccionamos todos los paneles de formulario (las secciones de contenido)
const formPanels = document.querySelectorAll('.form-panel');

// ② ASIGNAR EVENTO CLICK A CADA BOTÓN
// -------------------------------------
// NodeList.forEach() itera sobre cada elemento del NodeList.
// Recibe una función callback que se ejecuta por cada elemento.
// Ref: https://developer.mozilla.org/es/docs/Web/API/NodeList/forEach
tabButtons.forEach(function(btn) {

  // addEventListener() registra un evento en el elemento.
  // Primer argumento: tipo de evento ('click', 'mouseover', 'keydown', etc.)
  // Segundo argumento: función callback que se ejecuta cuando ocurre el evento.
  // Ref: https://developer.mozilla.org/es/docs/Web/API/EventTarget/addEventListener
  btn.addEventListener('click', function() {

    // A) LEER EL ATRIBUTO data-tab DEL BOTÓN CLICKEADO
    // --------------------------------------------------
    // getAttribute() obtiene el valor de un atributo HTML del elemento.
    // En este caso leemos el atributo "data-tab" que contiene el id
    // del panel que queremos mostrar (ej: "login", "register").
    // Los atributos data-* son atributos personalizados de HTML5
    // que permiten almacenar datos extra en elementos HTML.
    // Ref: https://developer.mozilla.org/es/docs/Web/API/Element/getAttribute
    // Ref data-*: https://developer.mozilla.org/es/docs/Learn/HTML/Howto/Use_data_attributes
    const target = btn.getAttribute('data-tab');

    // B) QUITAR LA CLASE .active DE TODOS LOS BOTONES
    // -------------------------------------------------
    // Iteramos sobre todos los botones y les removemos la clase "active".
    // Esto "desactiva" visualmente todos los botones antes de activar
    // el que fue clickeado (patrón de exclusión mutua).
    // classList.remove() quita una clase CSS del elemento.
    // Si la clase no existe, no lanza error.
    // Ref classList: https://developer.mozilla.org/es/docs/Web/API/Element/classList
    // Ref remove(): https://developer.mozilla.org/es/docs/Web/API/DOMTokenList/remove
    tabButtons.forEach(function(b) {
      b.classList.remove('active');
    });

    // C) QUITAR LA CLASE .active DE TODOS LOS PANELES
    // -------------------------------------------------
    // Mismo patrón: ocultamos todos los paneles antes de mostrar
    // el panel correspondiente al botón clickeado.
    formPanels.forEach(function(panel) {
      panel.classList.remove('active');
    });

    // D) ACTIVAR EL BOTÓN CLICKEADO
    // -------------------------------
    // classList.add() agrega una clase CSS al elemento.
    // Si la clase ya existe, no la duplica.
    // Al agregar "active", el CSS aplicará los estilos de resaltado.
    // Ref: https://developer.mozilla.org/es/docs/Web/API/DOMTokenList/add
    btn.classList.add('active');

    // E) ACTIVAR EL PANEL CORRESPONDIENTE
    // -------------------------------------
    // document.getElementById() busca un elemento por su atributo "id".
    // Es el método más rápido para seleccionar un único elemento.
    // Usamos el valor guardado en "target" (que viene del data-tab del botón)
    // para encontrar el panel correcto y agregarle la clase "active".
    // Ref: https://developer.mozilla.org/es/docs/Web/API/Document/getElementById
    document.getElementById(target)
            .classList.add('active');
  });

});