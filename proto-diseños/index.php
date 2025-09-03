<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal Transparencia</title>
  <link rel="stylesheet" href="../css/style.css">
  <!-- CDN correcto -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  <!--inicio del navbar -->
  <nav class="navbar">
    <div class="navbar-container">
      <button class="button-92" role="button">OPLE</button>
      <ul class="navbar-menu">
        <li class="menu-item">
          <a href="#" class="menu-link">Obligaciones por años <i class="fas fa-chevron-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">2025</a></li>
            <li><a href="#">2024</a></li>
            <li><a href="#">2023</a></li>
            <li><a href="#">2022</a></li>
            <li><a href="#">2021</a></li>
            <li><a href="#">2020</a></li>
            <li><a href="#">2018-2019</a></li>
            <li><a href="#">2015-2017</a></li>
          </ul>
        </li>
        <li class="menu-item dropdown">
          <a href="#" class="menu-link">LGTAIP <i class="fas fa-chevron-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Articulo 70</a></li>
            <li><a href="#">Articulo 70</a></li>
          </ul>
        </li>
        <li class="menu-item dropdown">
          <a href="#" class="menu-link">LEY 875 <i class="fas fa-chevron-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Articulo 15</a></li>
            <li><a href="#">Articulo 19</a></li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">LEY 848 (ABROGADA)</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--final del navbar -->

  <!-- Inicio de la imagen -->
  <section class="banner-section" data-aos="fade-in">
    <div class="banner-overlay" data-aos="zoom-in">
      <h2 class="banner-title" data-aos="fade-up">Transparencia y Acceso a la Información</h2>
      <p class="banner-subtitle" data-aos="fade-up" data-aos-delay="200">Consulta nuestras obligaciones conforme a la ley</p>
      <a href="#tabla" class="banner-button" data-aos="fade-up" data-aos-delay="400">Ver información</a>
    </div>
  </section>

  <div class="banner-over">
    <h1>ARTICULO 15</h1>
    <h4>INFORMACION PUBLICA DE OFICIO</h4>
    <P class="ajus">En terminos del articulo 15 de la ley 875 de Transparencia y Acceso a la Informacion Publica para
      el estado de Veracruz de Ignacio de la LLave, se debera publicar y mantener actualizada la siguiente informacion:
    </P>
    <h4>FRACCIONES</h4>
  </div>
  <!-- Final de la imagen -->

  <!-- Inicio de la config de las modal -->
  <div class="contenedor">
    <div class="card" onclick="openModal('modal1')">
      <div class="icon"><i class="fa-solid fa-scale-balanced"></i></div>
      <h3 class="title">Marco normativo</h3>
    </div>

    <div class="card" onclick="openModal('modal2')">
      <div class="icon"><i class="fa-solid fa-sitemap"></i></div>
      <h3 class="title">Estructura Orgánizada</h3>
    </div>

    <div class="card" onclick="openModal('modal3')">
      <div class="icon"><i class="fa-solid fa-users-rays"></i></div>
      <h3 class="title">Faculdades de cada Área</h3>
    </div>

    <div class="card" onclick="openModal('modal4')">
      <div class="icon"><i class="fas fa-bullseye"></i>
      </div>
      <h3 class="title">Metas y Objetivos</h3>
    </div>

    <div class="card" onclick="openModal('modal5')">
      <div class="icon"><i class="fas fa-chart-line"></i>
      </div>
      <h3 class="title">Indicadores Relacionados con Temas de Interés</h3>
    </div>

    <div class="card" onclick="openModal('modal6')">
      <div class="icon"><i class="fas fa-tasks"></i>
      </div>
      <h3 class="title">Indicadores de Objetivos y Resultados</h3>
    </div>

    <div class="card" onclick="openModal('modal7')">
      <div class="icon"><i class="fas fa-users"></i>
      </div>
      <h3 class="title">Directivos de Servidores Públicos</h3>
    </div>

    <div class="card" onclick="openModal('modal8')">
      <div class="icon"><i class="fas fa-money-bill-wave"></i>
      </div>
      <h3 class="title">Remuneración de los Servidores Públicos</h3>
    </div>
    <div class="card" onclick="openModal('modal9')">
      <div class="icon"><i class="fas fa-briefcase"></i>
      </div>
      <h3 class="title">Gastos de Representación y Viaticos</h3>
    </div>
    <div class="card" onclick="openModal('modal10')">
      <div class="icon"><i class="fas fa-user-tie"></i>
      </div>
      <h3 class="title">Plazas</h3>
    </div>
    <div class="card" onclick="openModal('modal11')">
      <div class="icon"><i class="fas fa-file-contract"></i>
      </div>
      <h3 class="title">Contrataciones de Servicios Profecionales por Honorarios</h3>
    </div>
    <div class="card" onclick="openModal('modal12')">
      <div class="icon"><i class="fas fa-file-signature"></i>
      </div>
      <h3 class="title">Declaciones Patrimoniales de los Servidores Públicos</h3>
    </div>
    <div class="card" onclick="openModal('modal13')">
      <div class="icon"><i class="fas fa-map-marker-alt"></i>
      </div>
      <h3 class="title">Domicilio</h3>
    </div>
    <div class="card" onclick="openModal('modal14')">
      <div class="icon"><i class="fas fa-bullhorn"></i>
      </div>
      <h3 class="title">Convocatorias Para Cargos Públicos</h3>
    </div>
    <div class="card" onclick="openModal('modal15')">
      <div class="icon"><i class="fas fa-hand-holding-usd"></i>
      </div>
      <h3 class="title">Programas De Subsidios (No Aplica)</h3>
    </div>
    <div class="card" onclick="openModal('modal16')">
      <div class="icon"><i class="fas fa-clipboard-check"></i>
      </div>
      <h3 class="title">Condiciones Generales De Trabajo</h3>
    </div>
    <div class="card" onclick="openModal('modal17')">
      <div class="icon"><i class="fas fa-id-card"></i>
      </div>
      <h3 class="title">Información Curricular</h3>
    </div>
    <div class="card" onclick="openModal('modal18')">
      <div class="icon"><i class="fas fa-user-slash"></i>
      </div>
      <h3 class="title">Listado de Servidores Públicos con Sanciones Administrativas</h3>
    </div>
    <div class="card" onclick="openModal('modal19')">
      <div class="icon"><i class="fas fa-concierge-bell"></i>
      </div>
      <h3 class="title">Servicios</h3>
    </div>
    <div class="card" onclick="openModal('modal20')">
      <div class="icon"><i class="fas fa-folder-open"></i>
      </div>
      <h3 class="title">Trámites, Requisitos y Formatos</h3>
    </div>
    <div class="card" onclick="openModal('modal21')">
      <div class="icon"><i class="fas fa-coins"></i>
      </div>
      <h3 class="title">Presupuesto Asignado</h3>
    </div>
    <div class="card" onclick="openModal('modal21')">
      <div class="icon"><i class="fas fa-file-invoice-dollar"></i>
      </div>
      <h3 class="title">Deuda Pública (No APLICA)</h3>
    </div>
    <div class="card" onclick="openModal('modal21')">
      <div class="icon"><i class="fas fa-broadcast-tower"></i>
      </div>
      <h3 class="title">Gastos Relativos A Comunicación social y Publicidad Oficial</h3>
    </div>
    <div class="card" onclick="openModal('modal21')">
      <div class="icon"><i class="fas fa-search-dollar"></i>
      </div>
      <h3 class="title">Auditorias</h3>
    </div>
    <div class="card" onclick="openModal('modal21')">
      <div class="icon"><i class="fas fa-file-alt"></i>
      </div>
      <h3 class="title">Dictaminación de los Estados Financieros</h3>
    </div>
    <div class="card" onclick="openModal('modal21')">
      <div class="icon"><i class="fas fa-users-cog"></i>
      </div>
      <h3 class="title">Listado de Personas Físicas y Morales con Asignacion de Recursos Públicos</h3>
    </div>
    <div class="card" onclick="openModal('modal21')">
      <div class="icon"><i class="fas fa-handshake"></i>
      </div>
      <h3 class="title">Concesiones, Contratos, Convenios, Permisos, Licencias o Autorizaciones</h3>
    </div>
    <div class="card" onclick="openModal('modal21')">
      <div class="icon"><i class="fas fa-gavel"></i>
      </div>
      <h3 class="title">Adjudicacíones Directas, Invitación Restringida y Licitaciones</h3>
    </div>

  </div> <!-- Final de la config de las modal -->



  <!-- Inicio de la config de las modal2 -->
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
  <!-- final de la config de las modal -->
  <script src="../scripts/movimientos.js"></script>
</body>

</html>

