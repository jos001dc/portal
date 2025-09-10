<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal Transparencia</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>


</head>

<body>
  <!--inicio del navbar -->
  <nav class="navbar">
    <div class="navbar-container">
      <button class="btn-elegante"><img src="../json/wired-outline-63-home-hover-3d-roll.gif" alt="" width="30" height="30">
        <span>OPLE</span>
      </button>
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
      <div class="icon"><i class="bi bi-journal-text"></i></div>
      <h3 class="title">Marco normativo</h3>
    </div>

    <div class="card" onclick="openModal('modal2')">
      <div class="icon"><i class="bi bi-diagram-3"></i></div>
      <h3 class="title">Estructura Orgánizada</h3>
    </div>

    <div class="card" onclick="openModal('modal3')">
      <div class="icon"><i class="bi bi-shield-check"></i></div>
      <h3 class="title">Faculdades de cada Área</h3>
    </div>

    <div class="card" onclick="openModal('modal4')">
      <div class="icon"><i class="bi bi-flag"></i></i>
      </div>
      <h3 class="title">Metas y Objetivos</h3>
    </div>

    <div class="card" onclick="openModal('modal5')">
      <div class="icon"><i class="bi bi-graph-up"></i>
      </div>
      <h3 class="title">Indicadores Relacionados con Temas de Interés</h3>
    </div>

    <div class="card" onclick="openModal('modal6')">
      <div class="icon"><i class="bi bi-bar-chart-line"></i>
      </div>
      <h3 class="title">Indicadores de Objetivos y Resultados</h3>
    </div>

    <div class="card" onclick="openModal('modal7')">
      <div class="icon"><i class="bi bi-people"></i>
      </div>
      <h3 class="title">Directivos de Servidores Públicos</h3>
    </div>

    <div class="card" onclick="openModal('modal8')">
      <div class="icon"><i class="bi bi-cash-stack"></i>
      </div>
      <h3 class="title">Remuneración de los Servidores Públicos</h3>
    </div>
    <!-- modificado -->
    <div class="card" onclick="openModal('modal9')">
      <div class="icon"><i class="bi bi-receipt"></i>
      </div>
      <h3 class="title">Gastos de Representación y Viaticos</h3>
      <!-- Franja inferior que aparece en hover -->
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>
      <!-- modificado -->
    <div class="card" onclick="openModal('modal10')">
      <div class="icon"><i class="bi bi-person-workspace"></i></div>
      <h3 class="title">Plazas</h3>
      <!-- Franja inferior que aparece en hover -->
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal11')">
      <div class="icon"><i class="bi bi-briefcase"></i>
      </div>
      <h3 class="title">Contrataciones de Servicios Profecionales por Honorarios</h3>
    </div>
    <div class="card" onclick="openModal('modal12')">
      <div class="icon"><i class="bi bi-file-earmark-text"></i>
      </div>
      <h3 class="title">Declaciones Patrimoniales de los Servidores Públicos</h3>
    </div>
    <div class="card" onclick="openModal('modal13')">
      <div class="icon"><i class="bi bi-house"></i>
      </div>
      <h3 class="title">Domicilio</h3>
    </div>
    <div class="card" onclick="openModal('modal14')">
      <div class="icon"><i class="bi bi-megaphone"></i>
      </div>
      <h3 class="title">Convocatorias Para Cargos Públicos</h3>
    </div>
    <div class="card" onclick="openModal('modal15')">
      <div class="icon"><i class="bi bi-slash-circle"></i>
      </div>
      <h3 class="title">Programas De Subsidios (No Aplica)</h3>
    </div>
    <div class="card" onclick="openModal('modal16')">
      <div class="icon"><i class="bi bi-journal-text"></i>
      </div>
      <h3 class="title">Condiciones Generales De Trabajo</h3>
    </div>
    <div class="card" onclick="openModal('modal17')">
      <div class="icon"><i class="bi bi-person-lines-fill"></i>
      </div>
      <h3 class="title">Información Curricular</h3>
    </div>
    <div class="card" onclick="openModal('modal18')">
      <div class="icon"><i class="bi bi-exclamation-octagon"></i>
      </div>
      <h3 class="title">Listado de Servidores Públicos con Sanciones Administrativas</h3>
    </div>
    <div class="card" onclick="openModal('modal19')">
      <div class="icon"><i class="bi bi-tools"></i>
      </div>
      <h3 class="title">Servicios</h3>
    </div>
    <div class="card" onclick="openModal('modal20')">
      <div class="icon"><i class="bi bi-folder-check"></i>
      </div>
      <h3 class="title">Trámites, Requisitos y Formatos</h3>
    </div>
    <div class="card" onclick="openModal('modal21')">
      <div class="icon"><i class="bi bi-cash-stack"></i>
      </div>
      <h3 class="title">Presupuesto Asignado</h3>
    </div>
    <div class="card" onclick="openModal('modal22')">
      <div class="icon"><i class="bi bi-slash-circle"></i>
      </div>
      <h3 class="title">Deuda Pública (No APLICA)</h3>
    </div>
    <div class="card" onclick="openModal('modal23')">
      <div class="icon"><i class="bi bi-chat-dots"></i>
      </div>
      <h3 class="title">Gastos Relativos A Comunicación social y Publicidad Oficial</h3>
    </div>
    <div class="card" onclick="openModal('modal24')">
      <div class="icon"><i class="bi bi-graph-up"></i>
      </div>
      <h3 class="title">Auditorias</h3>
    </div>
    <div class="card" onclick="openModal('modal25')">
      <div class="icon"><i class="bi bi-file-earmark-bar-graph"></i>
      </div>
      <h3 class="title">Dictaminación de los Estados Financieros</h3>
    </div>
    <div class="card" onclick="openModal('modal26')">
      <div class="icon"><i class="bi bi-people"></i>
      </div>
      <h3 class="title">Listado de Personas Físicas y Morales con Asignacion de Recursos Públicos</h3>
    </div>
    <div class="card" onclick="openModal('modal27')">
      <div class="icon"><i class="bi bi-file-earmark-medical"></i>
      </div>
      <h3 class="title">Concesiones, Contratos, Convenios, Permisos, Licencias o Autorizaciones</h3>
    </div>
    <div class="card" onclick="openModal('modal28')">
      <div class="icon"><i class="fas fa-gavel"></i>
      </div>
      <h3 class="title">Adjudicacíones Directas, Invitación Restringida y Licitaciones</h3>
    </div>
    <div class="card" onclick="openModal('modal29')">
      <div class="icon"><i class="fa-solid fa-file-lines"></i>
      </div>
      <h3 class="title">Los Informes que por Disposición Legal Generen Los Sujetos Obligados</h3>
    </div>
    <div class="card" onclick="openModal('modal30')">
      <div class="icon"><i class="fa-solid fa-chart-line"></i>
      </div>
      <h3 class="title">Estadísticas</h3>
    </div>
    <div class="card" onclick="openModal('modal31')">
      <div class="icon"><i class="fa-solid fa-chart-bar"></i>
      </div>
      <h3 class="title">Informes de Avances Programáticos</h3>
    </div>
    <div class="card" onclick="openModal('modal32')">
      <div class="icon"><i class="fa-solid fa-clipboard-list"></i>
      </div>
      <h3 class="title">Padrón de Proveedores y contratistas</h3>
    </div>
    <div class="card" onclick="openModal('modal33')">
      <div class="icon"><i class="fa-solid fa-handshake"></i>
      </div>
      <h3 class="title">Los Convenios de Coordinacion</h3>
    </div>
    <div class="card" onclick="openModal('modal34')">
      <div class="icon"><i class="fa-solid fa-boxes-stacked"></i>
      </div>
      <h3 class="title">Inventario de Bienes muebles e inmuebles</h3>
    </div>
    <div class="card" onclick="openModal('modal35')">
      <div class="icon"><i class="fa-solid fa-globe"></i>
      </div>
      <h3 class="title">Recomendaciones de Organismos Públicos o Internacionales</h3>
    </div>
    <div class="card" onclick="openModal('modal36')">
      <div class="icon"><i class="fa-solid fa-scale-balanced"></i>
      </div>
      <h3 class="title">Resoluciones y Laudos</h3>
    </div>
    <div class="card" onclick="openModal('modal37')">
      <div class="icon"><i class="fa-solid fa-people-group"></i>
      </div>
      <h3 class="title">Mecanismo de Participacíon Ciudadana</h3>
    </div>
    <div class="card" onclick="openModal('modal38')">
      <div class="icon"><i class="fa-solid fa-ban"></i>
      </div>
      <h3 class="title">Programas (NO Aplica)</h3>
    </div>
    <div class="card" onclick="openModal('modal39')">
      <div class="icon"><i class="fa-solid fa-file-signature"></i>
      </div>
      <h3 class="title">Actas, Acuerdos y Resoluciones</h3>
    </div>
    <div class="card" onclick="openModal('modal40')">
      <div class="icon"><i class="fa-solid fa-ban"></i>
      </div>
      <h3 class="title">Evaluaciones y encuestas (NO APLICA)</h3>
    </div>
    <div class="card" onclick="openModal('modal41')">
      <div class="icon"><i class="fa-solid fa-book-open-reader"></i>
      </div>
      <h3 class="title">Los Estudios Financiados con Recursos Públicos</h3>
    </div>
    <div class="card" onclick="openModal('modal42')">
      <div class="icon"><i class="fa-solid fa-ban"></i>
      </div>
      <h3 class="title">Listados de Jubilados y Pensionados (NO APLICA)</h3>
    </div>
    <div class="card" onclick="openModal('modal43')">
      <div class="icon"><i class="fa-solid fa-sack-dollar"></i>
      </div>
      <h3 class="title">Ingresos Recibidos</h3>
    </div>
    <div class="card" onclick="openModal('modal44')">
      <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i>
      </div>
      <h3 class="title">Donaciones Hechas a Terceros en Dinero o en Especie</h3>
    </div>
    <div class="card" onclick="openModal('modal45')">
      <div class="icon"><i class="fa-solid fa-folder-tree"></i>
      </div>
      <h3 class="title">Catálogo de Disposicion y Guía de Archivos Documental</h3>
    </div>
    <div class="card" onclick="openModal('modal46')">
      <div class="icon">
        <div class="icon"><i class="fa-solid fa-users-gear"></i>
        </div>
      </div>
      <h3 class="title">Consejos Consultivos</h3>
    </div>
    <div class="card" onclick="openModal('modal47')">
      <div class="icon"><i class="fa-solid fa-ban"></i>
      </div>
      <h3 class="title">Listado de Solicitudes a Empresas Concesiones de Telecomunicaciones (NO APLICA)</h3>
    </div>
    <div class="card" onclick="openModal('modal48')">
      <div class="icon"><i class="fa-solid fa-gavel"></i>
      </div>
      <h3 class="title">Las Enajenaciones y otros Actos Jurídicos</h3>
    </div>
    <div class="card" onclick="openModal('modal49')">
      <div class="icon"><i class="fa-solid fa-book"></i>
      </div>
      <h3 class="title">Las Cuentas Publícas Estatales y Municipales</h3>
    </div>
    <div class="card" onclick="openModal('modal50')">
      <div class="icon"><i class="fa-solid fa-ban"></i>
      </div>
      <h3 class="title">El Origen de los Fondos Auxiliares (NO APLICA)</h3>
    </div>
    <div class="card" onclick="openModal('modal51')">
      <div class="icon"><i class="fa-solid fa-user-tie"></i>
      </div>
      <h3 class="title">Relación de Servidores Públicas Comisionados</h3>
    </div>
    <div class="card" onclick="openModal('modal52')">
      <div class="icon"><i class="fa-solid fa-lock"></i>
      </div>
      <h3 class="title">Índices de Expedientes Clasificados como Reservados</h3>
    </div>
    <div class="card" onclick="openModal('modal53')">
      <div class="icon"><i class="fa-solid fa-lock-open"></i>
      </div>
      <h3 class="title">Infomación Desclasificada</h3>
    </div>
    <div class="card" onclick="openModal('modal54')">
      <div class="icon"><i class="fa-solid fa-thumbtack"></i>
      </div>
      <h3 class="title">Información Relevante</h3>
    </div>
    <div class="card" onclick="openModal('modal55')">
      <div class="icon"><i class="fa-solid fa-globe"></i>
      </div>
      <h3 class="title">Rubros Aplicables a la Pagina de Internet (Ultimo Párrafo)</h3>
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
            <a href="#" class="btn" id="btn-descargas" title="Opciones de Descargas">
              <i class="fa-solid fa-download"></i>
            </a>
            <a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Expe1">
              <i class="bi bi-filetype-exe"></i> Formato 1
            </a>
            <a href="archivos/expe2.xlsx" class="btn" id="btn-expe2" title="Expe2">
              <i class="bi bi-filetype-exe"></i> Formato 2
            </a>
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

  <!-- Inicio de la config de las modal2 -->
  <div id="modal2" class="modal">
    <span class="close" onclick="closeModal('modal2')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>I. ESTRUCTURA ORGÁNICA</h3>
      <p>
        Su estructura orgánica completa, en un formato que permita vincular cada parte de la estructura, las atribuciones y responsabilidades que le corresponden a cada servidor público, prestador de servicios profesionales o miembro de los sujetos obligados, de conformidad con las disposiciones aplicables. </p>
      <div class="fraccion">
        <h2>Publicaciones:</h2>
        <!-- Descargas -->
        <div class="acciones">
          <div class="col-izq">
            <a href="#" class="btn" id="btn-descargas" title="Opciones de Descargas">
              <i class="fa-solid fa-download"></i>
            </a>
            <a href="archivos/formato1.xlsx" class="btn" id="btn-formato1" title="Formato 1">
              <i class="fa-solid fa-file-excel"></i> Formato 1
            </a>
            <a href="archivos/formato2.xlsx" class="btn" id="btn-formato2" title="Formato 2">
              <i class="fa-solid fa-file-excel"></i> Formato 2
            </a>
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
  <!-- Modal -->
  <div id="modal3" class="modal">
    <span class="close" onclick="closeModal('modal3')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>III. Facultades de Cada Área</h3>
      <p>
        Las facultades de cada Área. </p>
      <div class="fraccion"><!-- cambiar que se vea como una ventana y los iconos , titulo
                Publicaciones
                cuatro apartados (iconos etc.) -->
        <h2>Publicaciones:</h2>
        <!-- Descargas -->
        <div class="acciones">
          <div class="col-izq">
            <a href="#" class="btn" id="btn-descargas" title="Opciones de Descargas">
              <i class="fa-solid fa-download"></i>
            </a>
            <a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Expe1">
              <i class="bi bi-filetype-exe"></i> Formato 1
            </a>
            <a href="archivos/expe2.xlsx" class="btn" id="btn-expe2" title="Expe2">
              <i class="bi bi-filetype-exe"></i> Formato 2
            </a>
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
  <!-- Modal -->
  <div id="modal4" class="modal">
    <span class="close" onclick="closeModal('modal4')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>IV. Metas y Objetivos</h3>
      <p>
        Las metas y objetivos de las Áreas de conformidad con sus programas operativos.
      </p>
      <div class="fraccion"><!-- cambiar que se vea como una ventana y los iconos , titulo
                Publicaciones
                cuatro apartados (iconos etc.) -->
        <h2>Publicaciones:</h2>
        <!-- Descargas -->
        <div class="acciones">
          <div class="col-izq">
            <a href="#" class="btn" id="btn-descargas" title="Opciones de Descargas">
              <i class="fa-solid fa-download"></i>
            </a>
            <a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Expe1">
              <i class="bi bi-filetype-exe"></i> Formato 1
            </a>
            <a href="archivos/expe2.xlsx" class="btn" id="btn-expe2" title="Expe2">
              <i class="bi bi-filetype-exe"></i> Formato 2
            </a>
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
  <!-- Modal -->
  <div id="modal5" class="modal">
    <span class="close" onclick="closeModal('modal5')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>V. Indicadores Relacionados con Temas de Interés</h3>
      <p>
        Los indicadores relacionados con temas de interés público o trascendencia social que conforme a sus funciones, deban establecer</p>
      <div class="fraccion"><!-- cambiar que se vea como una ventana y los iconos , titulo
                Publicaciones
                cuatro apartados (iconos etc.) -->
        <h2>Publicaciones:</h2>
        <!-- Descargas -->
        <div class="acciones">
          <div class="col-izq">
            <a href="#" class="btn" id="btn-descargas" title="Opciones de Descargas">
              <i class="fa-solid fa-download"></i>
            </a>
            <a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Expe1">
              <i class="bi bi-filetype-exe"></i> Formato 1
            </a>
            <a href="archivos/expe2.xlsx" class="btn" id="btn-expe2" title="Expe2">
              <i class="bi bi-filetype-exe"></i> Formato 2
            </a>
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
  <div id="modal6" class="modal">
    <span class="close" onclick="closeModal('modal6')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>VI. Indicadores de Objetos y Resultados</h3>
      <p>
        Los indicadores que perimten rendir cuenta de sus objetos y resultados. </p>
      <div class="fraccion"><!-- cambiar que se vea como una ventana y los iconos , titulo
                Publicaciones
                cuatro apartados (iconos etc.) -->
        <h2>Publicaciones:</h2>
        <!-- Descargas -->
        <div class="acciones">
          <div class="col-izq">
            <a href="#" class="btn" id="btn-descargas" title="Opciones de Descargas">
              <i class="fa-solid fa-download"></i>
            </a>
            <a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Expe1">
              <i class="bi bi-filetype-exe"></i> Formato 1
            </a>
            <a href="archivos/expe2.xlsx" class="btn" id="btn-expe2" title="Expe2">
              <i class="bi bi-filetype-exe"></i> Formato 2
            </a>
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
  <div id="modal7" class="modal">
    <span class="close" onclick="closeModal('modal7')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>VII. Directorio de Servidores Públicos</h3>
      <p>
        El directorio de todos los Servidores Públicos, a partir del nivel de jefe de departamento o su equivalente, o de menor nivel, cuando se brinde atención al público; manejen o apliquen recursos públicos; realicen actos de autoridad o presten servicios profesionales bajo el régimen de confianza u honorarios y personal de base. El directorio deberá incluir, al menos el nombre, cargo o nombramiento asignado, nivel del puesto en la estructura orgánica, fecha de alta en el cargo, número telefónico, domicilio para recibir correspondencia y Dirección de correo electrónico oficiales. </p>
      <div class="fraccion"><!-- cambiar que se vea como una ventana y los iconos , titulo
                Publicaciones
                cuatro apartados (iconos etc.) -->
        <h2>Publicaciones:</h2>
        <!-- Descargas -->
        <div class="acciones">
          <div class="col-izq">
            <a href="#" class="btn" id="btn-descargas" title="Opciones de Descargas">
              <i class="fa-solid fa-download"></i>
            </a>
            <a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Expe1">
              <i class="bi bi-filetype-exe"></i> Formato 1
            </a>
            <a href="archivos/expe2.xlsx" class="btn" id="btn-expe2" title="Expe2">
              <i class="bi bi-filetype-exe"></i> Formato 2
            </a>
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
  <div id="modal8" class="modal">
    <span class="close" onclick="closeModal('modal8')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>VIII. Remuneración de los Servidores Públicos</h3>
      <p>
        La remuneración bruta y neta de todos los Servidores Públicos de base o de confianza, de todas las percepciones, incluyendo sueldos, prestaciones, gratificaciones, primas, comisiones, dietas, bonos, estímulos, ingresos y sistemas de compensación, señalando la periodicidad de dicha remuneración. </p>
      <div class="fraccion"><!-- cambiar que se vea como una ventana y los iconos , titulo
                Publicaciones
                cuatro apartados (iconos etc.) -->
        <h2>Publicaciones:</h2>
        <!-- Descargas -->
        <div class="acciones">
          <div class="col-izq">
            <a href="#" class="btn" id="btn-descargas" title="Opciones de Descargas">
              <i class="fa-solid fa-download"></i>
            </a>
            <a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Expe1">
              <i class="bi bi-filetype-exe"></i> Formato 1
            </a>
            <a href="archivos/expe2.xlsx" class="btn" id="btn-expe2" title="Expe2">
              <i class="bi bi-filetype-exe"></i> Formato 2
            </a>
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
  <div id="modal9" class="modal">
    <span class="close" onclick="closeModal('modal9')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>IX. Gastos de Representación y Viáticos</h3>
      <p>
        Los gastos de representación y viaticos, así como el objeto e informe de comisión correspondiente. </p>
      <div class="fraccion">
        <h2>Publicaciones:</h2>
        <!-- tablas -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">Fecha de validacion</th>
              <th scope="col">Fecha de Actualizacion</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Expe1">Formato 1</a></th>
              <td>Mark</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Expe1">Formato 2</a></th>
              <td>Mark</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Expe1">Formato 3</a></th>
              <td>Mark</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div> <!--se cierra el div de fraccion -->
    </div>
  </div> <!--termina card 1 -->
  <div id="modal10" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>X. Plazas</h3>
      <p>
        El número total de las plazas y del personal de base y confianza, especificando el total de las vacantes, por nivel de puesto, para cada unidad administrativa.
      </p>
      <!-- 🔽 Aquí empieza la fracción -->
      <div class="fraccion">
        <!-- 🔽 Separador agregado -->
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <!-- tablas -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">Fecha de validacion</th>
              <th scope="col">Fecha de Actualizacion</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Expe1">Formato 1</a></th>
              <td>Mark</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Expe1">Formato 2</a></th>
              <td>Mark</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Expe1">Formato 3</a></th>
              <td>Mark</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div> <!--se cierra el div del separador -->
  </div><!--cierre de primer estilo de tabla plaza -->
  </div> <!--termina card 1 -->

  <!-- final de la config de las modal -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./scripts/movimientos.js"></script>
  <script src="./scripts/descarga.js"></script>
  </script>
  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000, // duración de la animación (milisegundos)
      once: true // solo se anima una vez
    });
  </script>
</body>

</html>