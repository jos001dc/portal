<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            background: #514040ff;
        }
    </style>
    <!-- Incluye la librería Lottie -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.1/lottie.min.js"></script>

<div class="col-der">
  <a href="#" class="btn" title="Fecha de Validacion: 06/07/2024">
    <div id="check-icon" style="width:30px; height:30px;"></div>
  </a>
  <a href="#" class="btn" title="Fecha de Actualizacion: 30/07/2024">
    <div id="christmas-icon" style="width:30px; height:30px;"></div>
  </a>
</div>

<script>
  // Cargar animación de check
  lottie.loadAnimation({
    container: document.getElementById('check-icon'), // contenedor
    renderer: 'svg', // puedes usar 'canvas' o 'html'
    loop: false,
    autoplay: true,
    path: '../json/wired-outline-37-approve-checked-simple-hover-loading.json' // ruta del archivo
  });

  // (ejemplo para otro icono si tuvieras otro JSON)
  lottie.loadAnimation({
    container: document.getElementById('christmas-icon'),
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: '../json/wired-outline-2947-calendar-christmas-eve-hover-pinch.json'
  });
</script>

    
</body>
</html>