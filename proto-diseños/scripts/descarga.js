
  function descargarArchivo(ruta, nombreArchivo) {
    const enlace = document.createElement('a');
    enlace.href = ruta;
    enlace.download = nombreArchivo;
    document.body.appendChild(enlace);
    enlace.click();
    document.body.removeChild(enlace);
  }

  document.addEventListener('DOMContentLoaded', () => {
    const botones = document.querySelectorAll('.btn');

    botones.forEach(boton => {
      boton.addEventListener('click', function (e) {
        e.preventDefault();

        if (boton.classList.contains('loading')) return;

        // Obtener el archivo desde el href
        const ruta = boton.getAttribute('href');
        const nombreArchivo = ruta.split('/').pop(); // ejemplo: "expe1.xlsx"

        // Animación
        boton.classList.add('loading');
        setTimeout(() => {
          boton.classList.remove('loading');
          boton.classList.add('done'); // ✅ mostrar check
        }, 2500);

        // Descargar archivo
        descargarArchivo(ruta, nombreArchivo);
      });
    });
  });

