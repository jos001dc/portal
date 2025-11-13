/*=============== MOSTRAR / OCULTAR MENÚ PRINCIPAL ===============*/
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId);

  if (!toggle || !nav) return;

  // Mostrar / ocultar al pulsar el ícono
  toggle.addEventListener('click', (e) => {
    e.stopPropagation();

    if (window.innerWidth <= 1118) {
      nav.classList.toggle('show-menu');
      toggle.classList.toggle('show-icon');

      const expanded = nav.classList.contains('show-menu');
      toggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
    }
  });

  // Cierra el menú si se hace clic fuera (solo en móvil)
  document.addEventListener('click', (e) => {
    if (window.innerWidth <= 1118) {
      if (!nav.contains(e.target) && !toggle.contains(e.target)) {
        nav.classList.remove('show-menu');
        toggle.classList.remove('show-icon');
        toggle.setAttribute('aria-expanded', 'false');
      }
    }
  });

  // Si se cambia el tamaño a escritorio, resetea todo
  window.addEventListener('resize', () => {
    if (window.innerWidth > 1118) {
      nav.classList.remove('show-menu');
      toggle.classList.remove('show-icon');
      toggle.setAttribute('aria-expanded', 'false');
    }
  });
};

// Inicializa el menú
showMenu('nav-toggle', 'nav-menu');


/*=============== ACCESIBILIDAD Y DROPDOWNS ===============*/
(function() {
  const toggle = document.getElementById('nav-toggle');
  const nav = document.getElementById('nav-menu');

  const updateAria = () => {
    if (!toggle || !nav) return;
    const expanded = nav.classList.contains('show-menu');
    toggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
  };

  if (nav) {
    const obs = new MutationObserver(updateAria);
    obs.observe(nav, { attributes: true, attributeFilter: ['class'] });
  }
  updateAria();

  /*=============== DROPDOWNS EN MÓVIL ===============*/
  const dropdownItems = document.querySelectorAll('.dropdown__item');

  dropdownItems.forEach(item => {
    const trigger = item.querySelector('.nav__link');
    if (!trigger) return;

    trigger.addEventListener('click', (ev) => {
      if (window.innerWidth <= 1118) {
        ev.preventDefault();
        ev.stopPropagation();

        const isOpen = item.classList.contains('show-dropdown');

        // Cierra los demás dropdowns
        document.querySelectorAll('.dropdown__item.show-dropdown').forEach(i => {
          i.classList.remove('show-dropdown');
        });

        // Abre el actual
        if (!isOpen) item.classList.add('show-dropdown');
      }
    });
  });
})();
