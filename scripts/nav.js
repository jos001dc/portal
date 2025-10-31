/*=============== MOSTRAR / OCULTAR MENÚ PRINCIPAL ===============*/
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId);

  // Evita errores si los elementos no existen
  if (!toggle || !nav) return;

  // Cuando se hace clic en el ícono de menú (hamburguesa)
  toggle.addEventListener('click', (e) => {
    e.stopPropagation();

    // Alterna la clase para mostrar/ocultar el menú
    nav.classList.toggle('show-menu');

    // Alterna el ícono (hamburguesa / cerrar)
    toggle.classList.toggle('show-icon');

    // Actualiza el atributo aria-expanded para accesibilidad
    const expanded = nav.classList.contains('show-menu');
    toggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
  });
};

// Inicializa el menú
showMenu('nav-toggle', 'nav-menu');


/*=============== ACCESIBILIDAD Y DROPDOWNS ===============*/
(function() {
  const toggle = document.getElementById('nav-toggle');
  const nav = document.getElementById('nav-menu');

  // Actualiza aria-expanded según el estado del menú
  const updateAria = () => {
    if (!toggle || !nav) return;
    const expanded = nav.classList.contains('show-menu');
    toggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
  };

  // Observa cambios de clase en el menú para mantener aria-expanded actualizado
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
      if (window.innerWidth <= 1118) { // Solo en pantallas pequeñas
        ev.preventDefault();
        ev.stopPropagation();

        // Verifica si el dropdown actual está abierto
        const isOpen = item.classList.contains('show-dropdown');

        // Cierra todos los demás dropdowns abiertos
        document.querySelectorAll('.dropdown__item.show-dropdown').forEach(i => {
          i.classList.remove('show-dropdown');
        });

        // Si no estaba abierto, lo abre
        if (!isOpen) {
          item.classList.add('show-dropdown');
        }
      }
    });
  });
})();
