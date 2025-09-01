<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Transparencia</title>
    <link rel="stylesheet" href="./style.css">
    <!-- CDN correcto -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <div class="contenedor">
        <div class="card" onclick="openModal('modal1')">
            <div class="icon"><i class="fa-solid fa-scale-balanced"></i></div>
            <h3>Marco normativo</h3>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal1" class="modal">
        <span class="close" onclick="closeModal('modal1')">&times;</span>
        <div class="modal-content">
            <h2>Articulo 15</h2>
            <p>
                <strong>Información Pública de Oficio</strong><br>
                En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
            </p>
            <h3>I. Marco Normativo</h3>
            <p>
                El marco normativo aplicable al sujeto obligado, en el que deberá incluirse leyes, códigos, reglamentos, decretos de creación, manuales administrativos, reglas de operación, criterios, políticas, entre otros.
            </p>
            <div class="fraccion"><!-- cambiar que se vea como una ventana y los iconos , titulo
                Publicaciones
                cuatro apartados (iconos etc.) -->
                <h2>Publicaciones:</h2>
              <!-- Descargas -->
            <div class="acciones">
                <div class="col-izq">
                    <a href="#" class="btn" title="Opciones de Descargas"><i class="fa-solid fa-download"></i></a>
                    <a href="#" class="btn" title="Formato 1"><i class="fa-solid fa-file-excel"></i> Formato 1</a>
                    <a href="#" class="btn" title="Formato 2"><i class="fa-solid fa-file-excel"></i> Formato 2</a>
                </div>
                <div class="col-der">
                    <a href="#" class="btn" title="Fecha de Validacion: 06/07/2024"><i class="fa-solid fa-check-double"></i></a>
                    <a href="#" class="btn" title="Fecha de Actualizacion: 30/07/2024"><i class="fa-regular fa-calendar-days"></i></a>
                    <a href="#" class="btn" title="Periodo de Actualizacion: Trimestral"><i class="fa-solid fa-calendar-plus"></i></a>
                </div>
            </div>
            </div> <!--se cierra el div de fraccion -->
        </div>
    </div> <!--termina card 1 -->
    <script>
        function openModal(id) {
            document.getElementById(id).style.display = 'flex';
        }

        function closeModal(id) {
            document.getElementById(id).style.display = 'none';
        }

        //cierra el modal si se hace clic fuera del contenido
        window.onclick = function(event) {
            document.querySelectorAll('.modal').forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        }
    </script>
</body>

</html>