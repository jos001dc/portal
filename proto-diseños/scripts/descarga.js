
  function descargarArchivo(ruta, nombreArchivo) {
    const enlace = document.createElement('a');
    enlace.href = ruta;
    enlace.download = nombreArchivo;
    document.body.appendChild(enlace);
    enlace.click();
    document.body.removeChild(enlace);
  }

  // Detectar todos los botones con clase "btn"
  const botones = document.querySelectorAll('.btn');

  botones.forEach(boton => {
    boton.addEventListener('click', function (e) {
      e.preventDefault();

      // Extraer ID del botón, por ejemplo: "btn-formato1" -> "formato1"
      const id = boton.id; // ej. "btn-formato1"
      if (!id.startsWith('btn-')) return; // Ignora botones que no tengan el formato esperado

      const nombreArchivo = id.replace('btn-', '') + '.xlsx'; // "formato1.xlsx"
      const ruta = 'archivos/' + nombreArchivo;

      descargarArchivo(ruta, nombreArchivo);
    });
  });

