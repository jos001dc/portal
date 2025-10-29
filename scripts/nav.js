/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId)

  // Evita errores si los elementos no existen
  if (!toggle || !nav) return

  // Cuando se hace clic en el ícono de menú
  toggle.addEventListener('click', (e) => {
    e.stopPropagation()

    // Alterna la clase para mostrar/ocultar el menú
    nav.classList.toggle('show-menu')

    // Alterna el ícono (hamburguesa / cerrar)
    toggle.classList.toggle('show-icon')

    // Actualiza el atributo aria-expanded para accesibilidad
    const expanded = nav.classList.contains('show-menu')
    toggle.setAttribute('aria-expanded', expanded ? 'true' : 'false')
  })
}

// Inicializa el menú
showMenu('nav-toggle', 'nav-menu')

/*=============== MEJORAS DE ACCESIBILIDAD Y DROPDOWNS ===============*/
(function() {
  const toggle = document.getElementById('nav-toggle')
  const nav = document.getElementById('nav-menu')

  // Actualiza aria-expanded según el estado del menú
  const updateAria = () => {
    if (!toggle || !nav) return
    const expanded = nav.classList.contains('show-menu')
    toggle.setAttribute('aria-expanded', expanded ? 'true' : 'false')
  }

  // Observa cambios de clase en el menú para mantener aria-expanded actualizado
  if (nav) {
    const obs = new MutationObserver(updateAria)
    obs.observe(nav, { attributes: true, attributeFilter: ['class'] })
  }
  updateAria()

  // Cierra el menú al presionar ESC
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      if (nav) nav.classList.remove('show-menu')
      if (toggle) toggle.classList.remove('show-icon')
      updateAria()
      document.querySelectorAll('.dropdown__item.show-dropdown')
        .forEach(d => d.classList.remove('show-dropdown'))
    }
  })

  // Cierra el menú al hacer clic fuera
  document.addEventListener('click', (e) => {
    const insideNav = e.target.closest('#nav-menu') || e.target.closest('#nav-toggle')
    if (!insideNav) {
      if (nav) nav.classList.remove('show-menu')
      if (toggle) toggle.classList.remove('show-icon')
      updateAria()
      document.querySelectorAll('.dropdown__item.show-dropdown')
        .forEach(d => d.classList.remove('show-dropdown'))
    }
  })

  /*=============== DROPDOWNS EN MÓVIL ===============*/
  const dropdownItems = document.querySelectorAll('.dropdown__item')

  dropdownItems.forEach(item => {
    const trigger = item.querySelector('.nav__link')
    if (!trigger) return

    // Al hacer clic en el título del dropdown
    trigger.addEventListener('click', (ev) => {
      if (window.innerWidth <= 1118) { // Solo en pantallas pequeñas
        ev.preventDefault()
        ev.stopPropagation()

        // Cierra otros dropdowns
        dropdownItems.forEach(d => { if (d !== item) d.classList.remove('show-dropdown') })

        // Alterna el dropdown actual
        item.classList.toggle('show-dropdown')
      }
    })

    // Cierra el menú y dropdown al hacer clic en un enlace interno
    item.querySelectorAll('.dropdown__link').forEach(link => {
      link.addEventListener('click', (e) => {
        e.stopPropagation()
        if (window.innerWidth <= 1118) {
          if (nav) nav.classList.remove('show-menu')
          if (toggle) toggle.classList.remove('show-icon')
          updateAria()
          item.classList.remove('show-dropdown')
        }
      })
    })
  })
})()
