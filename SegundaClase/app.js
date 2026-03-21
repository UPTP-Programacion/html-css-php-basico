const tabButtons = document.querySelectorAll('.tab-btn');
const formPanels = document.querySelectorAll('.form-panel');

// ② Escuchamos clicks en cada botón
tabButtons.forEach(function(btn) {

  btn.addEventListener('click', function() {

    // A) Leemos qué tab queremos mostrar
    const target = btn.getAttribute('data-tab');

    // B) Quitamos .active de TODOS los botones
    tabButtons.forEach(function(b) {
      b.classList.remove('active');
    });

    // C) Quitamos .active de TODOS los paneles
    formPanels.forEach(function(panel) {
      panel.classList.remove('active');
    });

    // D) Activamos el botón clickeado
    btn.classList.add('active');

    // E) Activamos el panel cuyo id = data-tab
    document.getElementById(target)
            .classList.add('active');
  });

});