// ═══════════════════════════════════════
// VALIDACIÓN DEL FORMULARIO DE REGISTRO
// ═══════════════════════════════════════

// ① Seleccionamos el formulario y el contenedor de errores
var form = document.getElementById('miFormulario');
var erroresDiv = document.getElementById('errores');

// ② Escuchamos el evento "submit" del formulario
form.addEventListener('submit', function(event) {

  // ③ Evitamos que la página se recargue
  event.preventDefault();

  // ④ Obtenemos el valor de cada campo
  var nombre   = document.getElementById('nombre').value;
  var email    = document.getElementById('email').value;
  var edad     = document.getElementById('edad').value;
  var fecha    = document.getElementById('fecha').value;
  var genero   = document.getElementById('genero').value;
  var password = document.getElementById('password').value;

  // ⑤ Limpiamos errores anteriores
  erroresDiv.innerHTML = '';

  // Quitamos el borde rojo de todos los campos
  var campos = form.querySelectorAll('input, select, textarea');
  for (var i = 0; i < campos.length; i++) {
    campos[i].style.borderColor = '#dd8dba';
  }

  var mensajes = [];

  // ⑥ Validar nombre (obligatorio, mínimo 3 caracteres)
  if (nombre === '') {
    mensajes.push('El nombre es obligatorio');
    document.getElementById('nombre').style.borderColor = 'red';
  } else if (nombre.length < 3) {
    mensajes.push('El nombre debe tener al menos 3 caracteres');
    document.getElementById('nombre').style.borderColor = 'red';
  }

  // ⑦ Validar email (obligatorio, debe contener @)
  if (email === '') {
    mensajes.push('El email es obligatorio');
    document.getElementById('email').style.borderColor = 'red';
  } else if (email.indexOf('@') === -1) {
    mensajes.push('El email debe contener @');
    document.getElementById('email').style.borderColor = 'red';
  }

  // ⑧ Validar edad (obligatorio, entre 1 y 120)
  if (edad === '') {
    mensajes.push('La edad es obligatoria');
    document.getElementById('edad').style.borderColor = 'red';
  } else if (edad < 1 || edad > 120) {
    mensajes.push('La edad debe estar entre 1 y 120');
    document.getElementById('edad').style.borderColor = 'red';
  }

  // ⑨ Validar fecha (obligatorio)
  if (fecha === '') {
    mensajes.push('La fecha de nacimiento es obligatoria');
    document.getElementById('fecha').style.borderColor = 'red';
  }

  // ⑩ Validar género (obligatorio)
  if (genero === '') {
    mensajes.push('Debes seleccionar un género');
    document.getElementById('genero').style.borderColor = 'red';
  }

  // ⑪ Validar contraseña (obligatorio, mínimo 6 caracteres)
  if (password === '') {
    mensajes.push('La contraseña es obligatoria');
    document.getElementById('password').style.borderColor = 'red';
  } else if (password.length < 6) {
    mensajes.push('La contraseña debe tener al menos 6 caracteres');
    document.getElementById('password').style.borderColor = 'red';
  }

  // ⑫ Mostrar errores o mensaje de éxito
  if (mensajes.length > 0) {
    var html = '';
    for (var j = 0; j < mensajes.length; j++) {
      html += '<p style="color:red;">' + mensajes[j] + '</p>';
    }
    erroresDiv.innerHTML = html;
  } else {
    alert('Formulario enviado correctamente');
  }

});

// ═══════════════════════════════════════
// BOTÓN VER / OCULTAR CONTRASEÑA
// ═══════════════════════════════════════

var btnVer = document.getElementById('btnVer');
var passField = document.getElementById('password');

btnVer.addEventListener('click', function() {
  if (passField.type === 'password') {
    passField.type = 'text';
    btnVer.textContent = 'Ocultar contraseña';
  } else {
    passField.type = 'password';
    btnVer.textContent = 'Ver contraseña';
  }
});

// ═══════════════════════════════════════
// LIMPIAR ERRORES AL PRESIONAR "RESET"
// ═══════════════════════════════════════

form.addEventListener('reset', function() {
  erroresDiv.innerHTML = '';
  var campos = form.querySelectorAll('input, select, textarea');
  for (var i = 0; i < campos.length; i++) {
    campos[i].style.borderColor = '#e0e0e0';
  }
});