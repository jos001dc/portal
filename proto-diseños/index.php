<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Transparencia</title>
    <link rel="stylesheet" href="styles.css">
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
            <h2>Marco Normativo</h2>
            <h3>Artículo 15</h3>
            <p>
                <strong>Información Pública de Oficio</strong><br>   
                En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información: 
            </p>
            <div class="fraccion">
                <h3>I. Marco Normativo</h3>
                <p>
                    El marco normativo aplicable al sujeto obligado, en el que deberá incluirse leyes, códigos, reglamentos, decretos de creación, manuales administrativos, reglas de operación, criterios, políticas, entre otros.             
                </p>
            </div>
            <!-- Descargas -->
            <div class="acciones">
                <div class="col-izq">
                    <a href="#" class="btn"><<i class="fa-solid fa-download"></i>></i></a>
                    <a href="#" class="btn"><<i class="fa-solid fa-file-excel"></i>></i>Formato 1</a>
                    <a href="#" class="btn"><<i class="fa-solid fa-file-excel"></i>></i>Formato 2</a>
                </div>
                <div class="col-der">
                    <a href="#" class="btn"><<i class="fa-solid fa-check-double"></i>></i></a>
                    <a href="#" class="btn"><<i class="fa-regular fa-calendar-days"></i>></i></a>
                    <a href="#" class="btn"><<i class="fa-solid fa-calendar-plus"></i>></i></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openModel(id){
            document.getElementById(id).style.display ='flex';
        }
        function closeModal(id) {
            document.getElementById(id).style.display='none';
        }

        //cierra el modal si se hace clic fuera del contenido
        window.onclick = function(event) {
            document.querySelectorAll('.modal'). forEach(modal =>{
                if(event.target === modal) {
                    modal.style.display ='none';
                }
            });
        }
        </script>
</body>
</html>
