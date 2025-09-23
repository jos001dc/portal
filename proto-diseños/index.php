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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=call" />
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
  <!--texto del articulo15 con el texto -->
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
      <h3 class="title"> I.<br>Marco normativo</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal2')">
      <div class="icon"><i class="bi bi-diagram-3"></i></div>
      <h3 class="title">II.<br>Estructura Orgánizada</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal3')">
      <div class="icon"><i class="bi bi-shield-check"></i></div>
      <h3 class="title">III.<br>Faculdades de cada Área</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal4')">
      <div class="icon"><i class="bi bi-flag"></i></i>
      </div>
      <h3 class="title">IV.<br>Metas y Objetivos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal5')">
      <div class="icon"><i class="bi bi-graph-up"></i>
      </div>
      <h3 class="title">V.<br>Indicadores Relacionados con Temas de Interés</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal6')">
      <div class="icon"><i class="bi bi-bar-chart-line"></i>
      </div>
      <h3 class="title">VI.<br>Indicadores de Objetivos y Resultados</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal7')">
      <div class="icon"><i class="bi bi-people"></i>
      </div>
      <h3 class="title">VII.<br>Directivos de Servidores Públicos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal8')">
      <div class="icon"><i class="bi bi-cash-stack"></i>
      </div>
      <h3 class="title">VIII.<br> Remuneración de los Servidores Públicos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>
  
    <div class="card" onclick="openModal('modal9')">
      <div class="icon"><i class="bi bi-receipt"></i>
      </div>
      <h3 class="title">IX.<br>Gastos de Representación y Viaticos</h3>
      <!-- Franja inferior que aparece en hover -->
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>
    
    <div class="card" onclick="openModal('modal10')">
      <div class="icon"><i class="bi bi-person-workspace"></i></div>
      <h3 class="title">X.<br>Plazas</h3>
      <!-- Franja inferior que aparece en hover -->
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal11')">
      <div class="icon"><i class="bi bi-briefcase"></i>
      </div>
      <h3 class="title">XI.<br>Contrataciones de Servicios Profecionales por Honorarios</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal12')">
      <div class="icon"><i class="bi bi-file-earmark-text"></i>
      </div>
      <h3 class="title">XII.<br>Declaciones Patrimoniales de los Servidores Públicos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal13')">
      <div class="icon"><i class="bi bi-house"></i>
      </div>
      <h3 class="title">XIII.<br>Domicilio</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal14')">
      <div class="icon"><i class="bi bi-megaphone"></i>
      </div>
      <h3 class="title">XIV.<br>Convocatorias Para Cargos Públicos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal15')">
      <div class="icon"><i class="bi bi-slash-circle"></i>
      </div>
      <h3 class="title">XV.<br>Programas De Subsidios (No Aplica)</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal16')">
      <div class="icon"><i class="bi bi-journal-text"></i>
      </div>
      <h3 class="title">XVI.<br>Condiciones Generales De Trabajo</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal17')">
      <div class="icon"><i class="bi bi-person-lines-fill"></i>
      </div>
      <h3 class="title">XVII.<br>Información Curricular</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal18')">
      <div class="icon"><i class="bi bi-exclamation-octagon"></i>
      </div>
      <h3 class="title">XVIII.<br>Listado de Servidores Públicos con Sanciones Administrativas</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal19')">
      <div class="icon"><i class="bi bi-tools"></i>
      </div>
      <h3 class="title">XIX.<br>Servicios</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal20')">
      <div class="icon"><i class="bi bi-folder-check"></i>
      </div>
      <h3 class="title">XX.<br>Trámites, Requisitos y Formatos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal21')">
      <div class="icon"><i class="bi bi-cash-stack"></i>
      </div>
      <h3 class="title">XXI.<br>Presupuesto Asignado</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal22')">
      <div class="icon"><i class="bi bi-slash-circle"></i>
      </div>
      <h3 class="title">XXII.<br>Deuda Pública (No APLICA)</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal23')">
      <div class="icon"><i class="bi bi-chat-dots"></i>
      </div>
      <h3 class="title">XXIII.<br>Gastos Relativos A Comunicación social y Publicidad Oficial</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>

    </div>

    <div class="card" onclick="openModal('modal24')">
      <div class="icon"><i class="bi bi-graph-up"></i>
      </div>
      <h3 class="title">XXIV.<br>Auditorias</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal25')">
      <div class="icon"><i class="bi bi-file-earmark-bar-graph"></i>
      </div>
      <h3 class="title">XXV.<br>Dictaminación de los Estados Financieros</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal26')">
      <div class="icon"><i class="bi bi-people"></i>
      </div>
      <h3 class="title">XXVI.<br>Listado de Personas Físicas y Morales con Asignacion de Recursos Públicos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal27')">
      <div class="icon"><i class="bi bi-file-earmark-medical"></i>
      </div>
      <h3 class="title">XXVII.<br>Concesiones, Contratos, Convenios, Permisos, Licencias o Autorizaciones</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal28')">
      <div class="icon"><i class="fas fa-gavel"></i>
      </div>
      <h3 class="title">XXVIII.<br>Adjudicacíones Directas, Invitación Restringida y Licitaciones</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal29')">
      <div class="icon"><i class="fa-solid fa-file-lines"></i>
      </div>
      <h3 class="title">XXIX.<br>Los Informes que por Disposición Legal Generen Los Sujetos Obligados</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal30')">
      <div class="icon"><i class="fa-solid fa-chart-line"></i>
      </div>
      <h3 class="title">XXX.<br>Estadísticas</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal31')">
      <div class="icon"><i class="fa-solid fa-chart-bar"></i>
      </div>
      <h3 class="title">XXXI.<br>Informes de Avances Programáticos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal32')">
      <div class="icon"><i class="fa-solid fa-clipboard-list"></i>
      </div>
      <h3 class="title">XXXII.<br>Padrón de Proveedores y contratistas</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal33')">
      <div class="icon"><i class="fa-solid fa-handshake"></i>
      </div>
      <h3 class="title">XXXIII.<br>Los Convenios de Coordinacion</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal34')">
      <div class="icon"><i class="fa-solid fa-boxes-stacked"></i>
      </div>
      <h3 class="title">XXXIV.<br>Inventario de Bienes muebles e inmuebles</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal35')">
      <div class="icon"><i class="fa-solid fa-globe"></i>
      </div>
      <h3 class="title">XXXV.<br>Recomendaciones de Organismos Públicos o Internacionales</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal36')">
      <div class="icon"><i class="fa-solid fa-scale-balanced"></i>
      </div>
      <h3 class="title">XXXVI.<br>Resoluciones y Laudos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal37')">
      <div class="icon"><i class="fa-solid fa-people-group"></i>
      </div>
      <h3 class="title">XXXVII.<br>Mecanismo de Participacíon Ciudadana</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal38')">
      <div class="icon"><i class="fa-solid fa-ban"></i>
      </div>
      <h3 class="title">XXXVIII.<br>Programas (NO Aplica)</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal39')">
      <div class="icon"><i class="fa-solid fa-file-signature"></i>
      </div>
      <h3 class="title">XXXIX.<br>Actas, Acuerdos y Resoluciones</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal40')">
      <div class="icon"><i class="fa-solid fa-ban"></i>
      </div>
      <h3 class="title">XL.<br>Evaluaciones y encuestas (NO APLICA)</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal41')">
      <div class="icon"><i class="fa-solid fa-book-open-reader"></i>
      </div>
      <h3 class="title">XLI.<br>Los Estudios Financiados con Recursos Públicos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal42')">
      <div class="icon"><i class="fa-solid fa-ban"></i>
      </div>
      <h3 class="title">XLII.<br>Listados de Jubilados y Pensionados (NO APLICA)</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal43')">
      <div class="icon"><i class="fa-solid fa-sack-dollar"></i>
      </div>
      <h3 class="title">XLIII.<br>Ingresos Recibidos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal44')">
      <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i>
      </div>
      <h3 class="title">XLIV.<br>Donaciones Hechas a Terceros en Dinero o en Especie</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal45')">
      <div class="icon"><i class="fa-solid fa-folder-tree"></i>
      </div>
      <h3 class="title">XLV.<br>Catálogo de Disposicion y Guía de Archivos Documental</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal46')">
      <div class="icon">
        <div class="icon"><i class="fa-solid fa-users-gear"></i>
        </div>
      </div>
      <h3 class="title">XLVI.<br>Consejos Consultivos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal47')">
      <div class="icon"><i class="fa-solid fa-ban"></i>
      </div>
      <h3 class="title">XLVII.<br>Listado de Solicitudes a Empresas Concesiones de Telecomunicaciones (NO APLICA)</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal48')">
      <div class="icon"><i class="fa-solid fa-gavel"></i>
      </div>
      <h3 class="title">XLVIII.<br>Las Enajenaciones y otros Actos Jurídicos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal49')">
      <div class="icon"><i class="fa-solid fa-book"></i>
      </div>
      <h3 class="title">XLIX.<br>Las Cuentas Publícas Estatales y Municipales</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal50')">
      <div class="icon"><i class="fa-solid fa-ban"></i>
      </div>
      <h3 class="title">L.<br>El Origen de los Fondos Auxiliares (NO APLICA)</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal51')">
      <div class="icon"><i class="fa-solid fa-user-tie"></i>
      </div>
      <h3 class="title">LI.<br>Relación de Servidores Públicas Comisionados</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal52')">
      <div class="icon"><i class="fa-solid fa-lock"></i>
      </div>
      <h3 class="title">LII.<br>Índices de Expedientes Clasificados como Reservados</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal53')">
      <div class="icon"><i class="fa-solid fa-lock-open"></i>
      </div>
      <h3 class="title">LIII.<br>Infomación Desclasificada</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal54')">
      <div class="icon"><i class="fa-solid fa-thumbtack"></i>
      </div>
      <h3 class="title">LIV.<br>Información Relevante</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal55')">
      <div class="icon"><i class="fa-solid fa-globe"></i>
      </div>
      <h3 class="title">Rubros Aplicables a la Pagina de Internet (Ultimo Párrafo)</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>
  </div> 
<!-- Final de la config de las modal -->

  <!-- Configuraciones de la ventana modal abierta -->
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
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Marco Normativo Aplicable al OPLE">FORMATO</a></th>
              <td>Dirección Ejecutiva de Asusntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div> 
  </div>

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
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Estructura Orgánica">Formato A</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Organigrama">Formato B</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

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
      <div class="fraccion">
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
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Facultades de cada área">Formato</a></th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

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
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Metas y Objetivos">Formato</a></th>
              <td>Unidad de Técnica de Planeación</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div> <!--se cierra el div de fraccion -->
    </div>
  </div>

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
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHAS DE VALIDACIÓN</th>
              <th scope="col">FECHAS DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Indicadores de temas de Interés">Formato</a></th>
              <td>Unidad Técnica de Planeación</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div> <!--se cierra el div de fraccion -->
    </div>
  </div>

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
      <div class="fraccion">
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
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Indicadores de objetos y resultados">Formato</a></th>
              <td>Unidad Técnica de Planeación</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

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
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Dirección del OPLE">Formato</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div> <!--se cierra el div de fraccion -->
    </div>
  </div>

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
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Remuneración Bruta y neta">Formato A</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Tabulador de Sueldos y Salarios">Formato B</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

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
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Gastos de representación">Formato</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

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
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Plazas Vacantes">Formato A</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Total de plaza">Formato B</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div> 
    </div> 
  </div>

  <div id="modal11" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XI. CONTRATACIONES DE SERVICOS PROFECIONALES POR HONORARIOS</h3>
      <p> Las contrataciones de servicos profecionales por honoracios, señalando los nombres de los prestadores de servicios, los servicios contrataciones, el monto de los honorarios y el periodo de contratación.
      </p>
      <div class="fraccion">
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
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Personal Contratado por honorarios">Formato</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div> 
    </div> 
  </div>

  <div id="modal12" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XII. DECLARACIONES PATRIMONIALES DE LO SERVICOS PÚBLICOS</h3>
      <p>
        La información, en versión pública, de las declaraciones patrimoniales, fisical y de intereses de los servidores públicos que asi lo determinan, en los sistemas habilitados para ello, de acuerdo a la normatividad aplicable.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Declaración de situación patrimonial">Formato A</a></th>
              <td>Contraloria General</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Declaraciones fiscales">Formato B</a></th>
              <td>Contraloria General</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Declaraciones de Interés">Formato C</a></th>
              <td>Contraloria General</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal13" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XIII. DOMICILIO</h3>
      <p>
        El domicilio de la Unidad de Transparencia, además de la Direccion electronica donde podrán recibirse las solicitudes para obtener la información.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Dominio Oficial">Formato</a></th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal14" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XIV. CONVOCATORIA PARA CARGOS PÚBLICOS </h3>
      <p>
        Las convocatorias a concursos para ocupar cargos públicos y los resultados de los mismos.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Convocatorias">Formato</a></th>
              <td>Dirección Ejecutiva de Organización Electoral</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal15" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XV. PROGRAMAS DE SUBSIDIOS (NO APLICA)</h3>
      <p>
        La información de los programas sociales, subsidios, estímulos y apoyos, en que deberán informar respecto de los programas de de transferencia, de servicios, de infraestructura social y de subsidio, que contendrá lo siguiente: a) Área; b) DenominaciÓn del programa; c) Periodo de vigencia; d) Diseño, objetivos y alcances; e) Metas físicas; f) PoblaciÓn beneficiada estimada; g) Monto aprobado, modificado y ejercido, así como los calendarios de su programaciÓn presupuestal; h) Requisitos y procedimientos de acceso; i) Procedimiento de queja o inconformidad ciudadana; j) Mecanismos de exigibilidad; k) Mecanismos de evaluaciÓn, informes de evaluaciÓn y seguimiento de recomendaciones; l) Indicadores con nombre, definiciÓn, método de cálculo, unidad de medida, dimensión, frecuencia de medición y nombre de las bases de datos utilizadas para su cálculo; m) Formas de participación social; n) Articulación con otros programas sociales; o) Vínculo a las reglas de operación o documento equivalente; p) Informes periódicos sobre la ejecución y los resultados de las evaluaciones realizadas; y q) Padrón de beneficiarios, mismo que deberá contener los siguientes datos: nombre de la persona física o denominaciÓn social de las personas morales beneficiarias, el monto, recurso, beneficio o apoyo otorgado para cada una de ellas, unidad territorial y, en su caso, edad y sexo.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">No Aplica</a></th>
              <td>Unidad Técnica de Transparencia</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal16" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XVI.CONDICIONES GENERALES</h3>
      <p>
        Las condiciones generales de trabajo, contratos o convenios que regulan las relaciones laborales del personal de base o de confianza, así como los recursos públicos economicos, en especie o donativos, que sean entregados a los sindicatos y ejerzan como recursos públicos.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Normatividad laboral">Formato A</a></th>
              <td>Dirección de Asuntos Juridicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Recursos públicos entregados a Sindicatos">Formato B</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div> 
    </div> 
  </div>

  <div id="modal17" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XVII. INFORMACÍON CURRICULAR</h3>
      <p>
        La información curricular, desde el nivel de jefe de departamiento o equivalente, hasta el titular del sujeto obligado, así como, en su caso, las sanciones administrativas de que haya sido objeto.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Información curricular">Formato</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div> 
    </div>
  </div>

  <div id="modal18" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XVIII.LISTADO DE SERVIDORES PÚBLICOS CON SANCIONES ADMINISTRATIVAS </h3>
      <p>
        El listado de Servidores Públicos con sanciones administrativas definitivas, especificando la causa de sanciones y la disposicíon. </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Sanciones administrativa">Formato</a></th>
              <td>Contraloría General</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal19" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XIX. SERVICIOS</h3>
      <p>
        Los servicos que ofrece señalando los requisitos para acceder a ellos. </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIDACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Servicios">Formato</a></th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal20" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XX. TRÁMITES, REQUISITOS Y FORMATOS</h3>
      <p>
        Los trámites, requisitos y formatos que ofrecen.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Tramites">Formato</a></th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal21" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXI. PRESUPUESTOS ASIGNADOS</h3>
      <p>
        La informacíon financiera sobre el presupuesto asignado, así como los informes del ejercicio trimestral del gasto, en término de la Ley General de Contabilidad Gubernamental y demás normatividad aplicable.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Presupuesto asignado">Formato A</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informes trimestrales">Formato B</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Cuenta Pública">Formato C</a></th>
              <td>Secretaria Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal22" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXII. DEUDA PÚBLICA</h3>
      <p>
        La información relativa a la deuda pública, en términos de la normatividad aplicable.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="NO APLICA">NO APLICA</a></th>
            </tr>
            <tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal23" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXIII. GASTOS RELATIVOS A COMUNICACIÓN SOCIAL Y PUBLICIDAD OFICIAL</h3>
      <p>
        Los montos destinados a gastos relativos a comunicación social y publicidad oficial desglosada por tipo de medio, proveedores, números de contrato o compaña.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Programa Anual">Formato A</a></th>
              <td>Unidad Técnica de Comunicación Social</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Erogación de recursos">Formato B</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Tiempos oficiales">Formato C</a></th>
              <td>Dirección Ejecutiva de Prerrogrativa y partidos políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal24" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXIV. AUDITORIAS</h3>
      <p>
        Los informes de resultados de las auditorías al ejercicio presupuestal de cada sujeto obligado que se realicen y, en su caso, las aclaraciones que correspondan.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Resultados de auditorias">Formato A</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Resultados de auditorias">Formato B</a></th>
              <td>Contraloría General</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal25" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXV. DICTAMINACIÓN DE LOS ESTADOS FINANCIEROS</h3>
      <p>
        El resultado de la dictaminación de los estados financieros.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Dictaminación de estados financieros">Formato A</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Contraloría General">Formato B</a></th>
              <td>Dictaminación de estados financieros</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal26" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXVI. LISTADOS DE PERSONAS FÍSICAS Y MORALES CON ASIGNACIÓN DE RECURSOS PÚBLICO </h3>
      <p>
        Los montos,criteriós, convocatorias, listado de personas físicas o morales a quienes, por cualquier motivo, se les asigne o permita usar recursos públicos o, e los términos de las disposiciones aplicables, realicen actos de autoridad. Asimismo, los informes que dichas personas les entreguen sobre el uso y destino de dichos recursos.
      </p>
      <div class="fraccion">
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
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Personas fisicas asignadas para uso de recursos públicos">Formato</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal27" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXVII. CONCESIONES, CONTRATOS, CONVENIOS, PERMISOS, LICENCIAS O AUTORIZACIONES OTORGADAS. </h3>
      <p>
        Las concesiones, contratos, convenios, permisos, licencias o autorizaciones otorgados, especificando los titurales de aquéllos, debido publicarse su objeto, nombre o razón social del titular, vigencia, tipo, términos, condiciones, monto y modificaciones, así como si el procedimiento involucra el aprovechamiento de bienes, servicios y/o recursos públicos.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Concesiones, contratos, convenios, permisos, licencias o autorizaciones otorgados por el OPLE">Formato</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal28" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXVIII. ADJUDICACIÓN DIRECTA, INVITACIÓN RESTRINGIDA Y LICITACIÓN</h3>
      <p>
        La información sobre los resultados sobre procedimiento de adjudicación directa, invitación restringida y licitación de cualquier naturaleza, incluyendo la Versión Pública del Expediente respectivo y de los contratos celebrados, que deberá contener, por lo menos, lo siguiente:<br>
        A) De licitaciones públicas o procedimientos de invitación restringida: 1. La convocatoria o invitación emitida, así como los fundamentos legales aplicados para llevarla a cabo; 2. Los nombres de los participantes o invitados; 3. El nombre del ganador y las razones que lo justifican; 4. El Área solicitante y la responsable de su ejecución; 5. Las convocatorias e invitaciones emitidas; 6. Los dictámenes y fallo de adjudicación; 7. El contrato y, en su caso, sus anexos; 8. Los mecanismos de vigilancia y supervisión, incluyendo, en su caso, los estudios de impacto urbano y ambiental, según corresponda; 9. La partida presupuestal, de conformidad con el clasificador por objeto del gasto, en el caso de ser aplicable; 10. Origen de los recursos especificando si son federales, estatales o municipales, así como el tipo de fondo de participación o aportación respectiva; 11. Los convenios modificatorios que, en su caso, sean firmados, precisando el objeto y la fecha de celebración; 12. Los informes de avance físico y financiero sobre las obras o servicios contratados; 13. El convenio de terminación, y 14. El finiquito;<br>
        B) De las adjudicaciones directas: 1. La propuesta enviada por el participante; 2. Los motivos y fundamentos legales aplicados para llevarla a cabo; 3. La autorización del ejercicio de la opción; 4. En su caso, las cotizaciones consideradas, especificando los nombres de los Proveedores y los montos; 5. El nombre de la persona física o moral adjudicada; 6. La unidad administrativa solicitante y la responsable de su ejecución; 7. El número, fecha, el monto del contrato y el plazo de entrega o de ejecución de los servicios u obra; 8. Los mecanismos de vigilancia y supervisión, incluyendo, en su caso, los estudios de impacto urbano y ambiental, según corresponda; 9. Los informes de avance sobre las obras o servicios contratados; 10. El convenio de terminación, y 11. El finiquito. </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Licitación pública">Formato</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal29" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXIX. LOS INFORMES QUE POR DISPOSICIÓN LEGAL GENEREN LOS SUJETOS OBLIGADOS. </h3>
      <p>
        Los informes que por disposición legal generen los sujetos obligados.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACION</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informes">Formato A</a></th>
              <td>Secretaría Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informe">Formato B</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informes">Formato C</a></th>
              <td>Contraloría General</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informes">Formato D</a></th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal30" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXX. ESTADISTICAS.</h3>
      <p>
        Las estadísticas que generen en cumplimiento de sus facultades, competencias o funciones con la mayor desagregación posible.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Estadisticas">Formato</a></th>
              <td>Dirección Ejecutiva de Organización Electoral</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div> 

  <div id="modal31" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXXI. INFORMES DE AVANCES PROGRAMÁTICOS.</h3>
      <p>
        Informes de avances programáticos o presupuestales, balances generales y su estado financiero.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Estados financieros">Formato A</a></th>
              <td>Dirección Ejecutivos de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Estados financieros">Formato B</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div> 

  <div id="modal32" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXXII. PADRÓN DE PROVEEDORES Y CONTRATISTA.</h3>
      <p>
        Padrón de proveedores y contratista.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Padrón de proveedores y contratistas">Formato 1</a></th>
              <td>Dirección Ejecutiva de Administrativa</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal33" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXXIII. LOS CONVENIOS DE COORDINACIÓN.</h3>
      <p>
        Los convenios de coordinación de concertación con los sectores social y privado.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Convenios de coordinación, de concertación con el sector social o privado">Formato A</a></th>
              <td>Dirección Ejecutiva de Asuntos Juridicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Convenios de coordinación, de concertación con el sector social o privado">Formato B</a></th>
              <td>Secretaria Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div> 

  <div id="modal34" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXXIV. INVENTARIO DE BIENES MUEBLES E INMUEBLES.</h3>
      <p>
        El inventario de bienes muebles e inmuebles en posición y propiedad.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHAS DE VALIDACIÓN</th>
              <th scope="col">FECHAS DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Inventario bienes muebles">Formato A</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Inventario altas">Formato B</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato C</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Inventario bienes inmuebles">Formato D</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Inventario altas">Formato E</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Inventario Bajas">Formato F</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Bienes muebles e inmuebles donados">Formato G</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal35" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXXV. RECOMENDACIONES EMITIDAS POR LOS ÓRGANOS PÚBLICOS U ORGANISMOS INTERNACIONALES.</h3>
      <p>
        Las recomendaciones emitidas por los órganos públicos del Estado mexicano u organismo internacionales garantes de los derechos humanos, así como las acciones que han llevado a cabo para su atención.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Recomendaciónes emitidas por la Comisión Nacial de Derecho Humanos">Formato A</a></th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Caos especiales emitidos por la CNDH u otros Organismos">Formato B</a></th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Recomendaciónes emitidas por Organismos Internacionales">Formato C</a></th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal36" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXXVI. RESOLUCIONES Y LAUDOS.</h3>
      <p>
        Las resoluciones y laudos que se emitan en procesos o procedimentos seguidos en forma de juicio.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Resoluciónes y laudos emitidos">Formato</a></th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal37" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXXVII. MECANISMO DE PARTICIPACIÓN CIUDADANA.</h3>
      <p>
        Los mecanismo de participación ciudadana.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Mecanismo de Participación ciudadana">Formato A</a></th>
              <td>Dirección Ejecutiva de Cpacitación Electorales y Educación Cívica</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Mecanismo de Participación Ciudadana">Formato B</a></th>
              <td>Dirección Ejecutiva de Cpacitación Electorales y Educación Cívica</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal38" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXXVIII. PROGRAMAS (NO APLICA).</h3>
      <p>
        Los programas que ofrecen, incluyendo información sobre la población objetivo y destino, asi como los trámites tiempo de respuesta, requisitos y formatos para acceder a los mismos.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="NO APLICA">Formato</a></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal39" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XXXIX. ACTAS, ACUERDOS Y RESOLUCIONES.</h3>
      <p>
        Las actas y resoluciones del Comité de Transparencia de los sujetos obligados.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informe de sesiones">Formato A</a></th>
              <td>Unidad Técnica de Transparencia, Dirección Ejecutiva de Organización Electoral, Dirección Ejecutiva de Capacitación Electoral y Educación Cívica, Dirección Ejecutiva de Prerrogativas y Partidos Políticos, Unidad Técnico de Comunicación Social, Secretaria Ejecutiva, Dirección Ejecutiva de Asusntos Jurídicos, Unidad Técnica de Igualdad de Género e Inclusión, Unidad Técnica del Cnetro de Formato y Desarrollo, Dirección Ejecutiva de Administración.</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informe de resoluciones">Formato B</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Integrantes del Comité de Transparencia">Formato C</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Calendario de Sesiones ordinarias">Formato D</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Calendario de Sesiones ordinarias">Formato E1</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Calendario de Sesiones ordinarias">Formato E2</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Calendario de Sesiones ordinarias">Formato E3</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Calendario de Sesiones ordinarias">Formato E4</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Calendario de Sesiones ordinarias">Formato E5</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Calendario de Sesiones ordinarias">Formato E6</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Calendario de Sesiones ordinarias">Formato E7</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Calendario de Sesiones ordinarias">Formato E8</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Calendario de Sesiones ordinarias">Formato E9</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato E10</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato E11</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato E12</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal40" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XL. EVALUACIONES Y ENCUESTAS (NO APLICA).</h3>
      <p>
        Evaluaciones y Encuestas.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="NO APLICA">Formato</a></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal41" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XLI. LOS ESTUDIOS FINANCIADOS CON RECURSOS PÚBLICOS.</h3>
      <p>
        Los Estudios financiados con recursos publicos.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Los estudios financiados con recursos públicos">Formato</a></th>
              <td>Dirección Ejecutiva de Capacitación Electoral y Educación Cívica</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal42" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XLII. LISTADO DE JUBILADOS Y PENSIONADOS (NO APLICA).</h3>
      <p>
        Lista de jubilados y pensionados y el monton que reciben.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="NO APLICA">Formato</a></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal43" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XLIII. INGRESOS RECIBIDOS.</h3>
      <p>
        Los ingresos recibidos por cualquier concepto señalado el nombre de los responsables de recibirlos, administrarlos y ejercerlos, así como su destino, indicando el destino de cada uno de ellos.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Ingresos recibidos">Formato A</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Responsable de recibir, administrar y ejecer los ingresos.">Formato A</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal44" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XLIV. DONACIONES HECHAS A TERCEROS EN DINERO O EN ESPECIE.</h3>
      <p>
        Donaciones hechas a terceros en dinero o en especie.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Donaciones a terceros en dinero">Formato A</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal45" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XLV. CATÁLOGO DE DISPOSICIÓN Y GUÍA DE ARCHIVOS DOCUMENTAL.</h3>
      <p>
        El catálogo de disposicón y guía de archivos documental.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informes de sesiones">Formato A</a></th>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informes de resoluciones">Formato B</a></th>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informe de resoluciones">Formato C</a></th>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal46" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XLVI. CONSEJO CONSULTIVOS.</h3>
      <p>
        Las actas de sesiones ordinarias y extraordinarias, así como las opiniones y recomendaciones que emitan, en su caso, los consejos consultivos.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Actas del Consejo Consultivos">Formato A</a></th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Opiniones y recomendaciones del Consejo Consultivos">Formato B</a></th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal47" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XLVII. LISTADO DE SOLICITUDES A LAS EMPRESAS CONCESIONARIAS DE TELECOMUNICACIONES (NO APLICA).</h3>
      <p>
        El catálogo de disposicón y guía de archivos documental.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="NO APLICA">Formato</a></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal48" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XLVIII. LAS ENAJENACIONES Y OTROS ACTOS JURÍDICOS.</h3>
      <p>
        Las enajenaciones y otros actos jurídicos relacionados con bienes públicos, indicando los motivos, beneficiarios o adquisiciones, así como los montos de las operaciones.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal49" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XLIX. LAS CUENTAS PÚBLICAS ESTATALES Y MUNICIPALES.</h3>
      <p>
        Las cuentas públicas estatales y municipales, así como los documentos relativos, incluyendo el informe de resultados de su revisión y su dictamen.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato</a></th>
              <td>Secretaría Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal50" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>L. EL ORIGEN DE LOS FONDOS AUXILIARES (NO APLICA).</h3>
      <p>
        El origen de fondos auxiliares especiales y la aplicación que se haya hecho de los ingresos correlativos .
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="NO APLICA">Formato</a></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal51" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>L1. RELACIÓN DE SERVIDORES PÚBLICOS COMISIONADOS.</h3>
      <p>
        Una relación de los servidores públicos comisionados por cualquier causa, incluso de carácter sindical.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="El origen de los fondos auxiliares">Formato</a></th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal52" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>LII. INDICES DE EXPEDIENTES CLASIFICADOS COMO RESERVADOS.</h3>
      <p>
        Los indices de expedientes clasificados como reservados, elaborando semestralmente y por rubros temáticos.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHAS DE VALIDACIÓN</th>
              <th scope="col">FECHAS DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato</a></th>
              <td>Unidad Técnica de Tranparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal53" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>LIII. INFORMACIÓN DESCLASIFICADO.</h3>
      <p>
        La información desclasificada, la cual deberá de permanecer dos años posteriores a partir de que perdió su clasificación.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHAS DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato</a></th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal54" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>LIV. INFORMACIÓN RELEVANTE.</h3>
      <p>
        Cualquier otra información que sea de utilidad o se considere relevante, además de la que, con base en la información estadística, responda a las preguntas hechas con más frecuencia por el público.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHAS DE VALIDACIÓN</th>
              <th scope="col">FECHAS DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Información de interés">Formato A1</a></th>
              <td>Dirección Ejecutiva de Capacitación Electorales y Educación Cívica</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Información de Interés">Formato A2</a></th>
              <td>Unidad Técnica del Centro de Formación y Desarrollo</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Preguntas frecuentes">Formato B1</a></th>
              <td>Dirección Ejecutiva de Organización Electoral</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Preguntas frecuentes">Formato B2</a></th>
              <td>Unidad Técnica del secretariado</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Preguntas frecuentes">Formato B3</a></th>
              <td>Unidad Técnica de transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Preguntas frecuentes">Formato B4</a></th>
              <td>Dirección Ejecutiva de Perrogativa</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Transparencia Proactiva">Formato C1</a></th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal55" class="modal">
    <span class="close" onclick="closeModal('modal10')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>RUBROS APLICABLES A LA PÁGINA DE INTERNET (ÚLTIMO PÁRRAFO).</h3>
      <p>
        Los sujetos obligados deberán informar a los Órganismos garantes y verificar que se publiquen en la plataforma Nacional, cúales son los rubros que son aplicables a sus páginas de internet, con los objeto de que éstos verifiquen y aprueben, de forma fundada y motivada, la relación de fracciones aplicables a cada sujeto obligado.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHAS DE VALIDACIÓN</th>
              <th scope="col">FECHAS DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato</a></th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!--Articulo 19 -->
  <div class="banner-over">
    <h1>ARTICULO 19</h1>
    <h4>INFORMACION PUBLICA DE OFICIO</h4>
    <P class="ajus">En terminos del articulo 19 de la ley 875 de Transparencia y Acceso a la Informacion Publica para
      el estado de Veracruz de Ignacio de la LLave, se deberá publicar y mantener actualizada la siguiente informacion:
    </P>
    <h4>FRACCIONES</h4>
  </div>
  <div class="contenedor">
    <div class="card" onclick="openModal('modalA')">
      <div class="icon"><i class="bi bi-person-badge"></i></div>
      <h3 class="title">A)<br>Partidos Políticos, Asociaciones y Agrupaciones Políticas y Ciudadanos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalB')">
      <div class="icon"><i class="bi bi-file-earmark-text"></i></div>
      <h3 class="title">B)<br>Informes</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalC')">
      <div class="icon"><i class="bi bi-map"></i></div>
      <h3 class="title">C)<br>Geografía y Cartografía Electoral</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalD')">
      <div class="icon"><i class="bi bi-card-checklist"></i></i>
      </div>
      <h3 class="title">D)<br>Registro de Candidatos a Cargos de Elección Popular</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalE')">
      <div class="icon"><i class="bi bi-cash-stack"></i>
      </div>
      <h3 class="title">E)<br>Montos de Financiamiento</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalF')">
      <div class="icon"><i class="bi bi-bar-chart-line"></i>
      </div>
      <h3 class="title">F)<br>Metología e Informes de Encuentas y Programas de Conteo Rápido</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalG')">
      <div class="icon"><i class="bi bi-file-earmark-bar-graph"></i>
      </div>
      <h3 class="title">G)<br>Metología e Informes del Programa de Resultados Preliminares Electorales</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalH')">
      <div class="icon"><i class="bi bi-clipboard-data"></i>
      </div>
      <h3 class="title">H)<br>Cómputos Totales de las Elecciones</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalI')">
      <div class="icon"><i class="bi bi-check-circle"></i>
      </div>
      <h3 class="title">I)<br>Resultado y Declaraciones de Validez de las Elecciones</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalJ')">
      <div class="icon"><i class="bi bi-journal-check"></i></div>
      <h3 class="title">J)<br>Dictamenes, Informes y Resoluciones sobre la Pérdida de Registro</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalK')">
      <div class="icon"><i class="bi bi-broadcast"></i>
      </div>
      <h3 class="title">K)<br>Monitoreo de Medios</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalL')">
      <div class="icon"><i class="bi bi-folder2-open"></i>
      </div>
      <h3 class="title">L)<br>Expedientes de Quejas</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalM')">
      <div class="icon"><i class="bi bi-list-check"></i>
      </div>
      <h3 class="title">M)<br>Lista de Acuerdos, Sentencias, Resoluciones y Criterios Relevantes</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalN')">
      <div class="icon"><i class="bi bi-search"></i>
      </div>
      <h3 class="title">N)<br>Resultados de los Procedimientos de Fiscalización</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalO')">
      <div class="icon"><i class="bi bi-mic"></i>
      </div>
      <h3 class="title">O)<br>Versiones Estenográficas de las Sesiones Públicas</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalP')">
      <div class="icon"><i class="bi bi-pie-chart"></i>
      </div>
      <h3 class="title">P)<br>Estadísticas de los Medios de Impugnación</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>
  </div>

  <div id="modalA" class="modal">
    <span class="close" onclick="closeModal('modalA')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>A). PARTIDOS POLITICOS, ASOCIAONES Y AGRUPACIONES POLÍTICAS Y CIUDADANOS </h3>
      <p>
        Los listados de partidos políticos, asociaciones y agrupaciones políticas o de ciudadanos regístrados ante la autoridad electoral.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Normatividad Aplicable">Formato A</a></th>
              <td>Dirección Ejecutiva de Prerrogativa y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Asociaciones Civiles y/o ciudadanos que realicen actividades de observación Electoral">Formato B</a></th>
              <td>Secretaria Ejecutiva.</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalB" class="modal">
    <span class="close" onclick="closeModal('modalB')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>B. INFORMES</h3>
      <p>
        Los informes que presenten los partidos políticos, asociaciones y agrupaciones políticas o de ciudadanos. </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHAS DE VALIDACIÓN</th>
              <th scope="col">FECHAS DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informes Presentados">Formato A</a></th>
              <td>Dirección Ejecutiva de Fiscalización</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informes y Dictámenes">Formato B</a></th>
              <td>Dirección Ejecutiva de Fiscalización</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalC" class="modal">
    <span class="close" onclick="closeModal('modalC')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>C. GEOGRAFÍA Y CARTOGRAFÍA ELECTORAL</h3>
      <p>
        La geografía y cartografía electoral. </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Normatividad">Formato A</a></th>
              <td>Dirección Ejecutivo de Organización</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Geografía y Cartografía Electoral">Formato B</a></th>
              <td>Direccíon Ejecutiva de Organizacíon</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Estudios en matería de Geografía y Cartografía Electoral">Formato C</a></th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalD" class="modal">
    <span class="close" onclick="closeModal('modalD')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>D. REGISTRO DE CANDIDATOS A CARGOS DE ELECCIÓN POPOULAR</h3>
      <p>
        El registro de candidatos a cargos de elección popular.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Registro de candidatos a cargos de elección popular">Formato A</a></th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Sistemas de consultas de candidatos a cargos de elección popular">Formato B</a></th>
              <td>Dirección Ejecutivo de Prerrogativas y Partídos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Candidatos electorales a cargos de elección popular">Formato C</a></th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Sistemas de consulta de candidatos electos a cargos de elección popular">Formato D</a></th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div> 
    </div>
  </div>

  <div id="modalE" class="modal">
    <span class="close" onclick="closeModal('modalE')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>E. MONTOS DE FINANCIAMIENTO</h3>
      <p>
        Los montos de financiamiento público por actividades ordinarias, de campañas y específicas otorgadas a los partidos políticos,asociaciones y agrupaciones politicas o de ciudadanos, así como los montos autorizados de financiamiento privado y los topes de los gastos de compaña.</p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Montos Entregados">Formato A</a></th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Montos Autorizados">Formato B</a></th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato C</a></th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalF" class="modal">
    <span class="close" onclick="closeModal('modalF')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>F. METODOLOGÍA E INFORME DE ENCUESTAS Y PROGRAMA DE CONTEO RÁPIDO</h3>
      <p>
        La metodología e informe sobre la publicación de encuestas por muestreo, encuestas de salida y conteos rápidos financiados por las autoridades electorales competentes.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHAS DE VALIDACIÓN</th>
              <th scope="col">FECHAS DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato A</a></th>
              <td>Secretaría Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato B</a></th>
              <td>Secretaría Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato C</a></th>
              <td>Secretaría Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato D</a></th>
              <td>Secretaría Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato E</a></th>
              <td>Secretaría Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato F</a></th>
              <td>Secretaría Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalG" class="modal">
    <span class="close" onclick="closeModal('modalG')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>G. METODOLOGIA E INFORME DEL PROGRAMA DE RESULTADOS PRELIMINARES ELECTORALES</h3>
      <p>
        La metodología e informe del programa de Resultados Preliminares Electorales.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Metodología del PREP">Formato A</a></th>
              <td>Unidad Técnica de Servicios Información</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Resultados del PREP">Formato B</a></th>
              <td>Unidad Técnica de Servicios Informaticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalH" class="modal">
    <span class="close" onclick="closeModal('modalH')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>H. CÓMPUTO TOTALES DE LAS ELECCIONES</h3>
      <p>
        Los cómputos totales de las elecciones y procesos de participación ciudadana. </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Resuldatos y Declaraciones de válidez">Formato</a></th>
              <td>Dirección Ejecutivo de Organización Electoral</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalI" class="modal">
    <span class="close" onclick="closeModal('modalI')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>I. RESULTADOS Y DECLARACIONES DE VALIDEZ DE LAS ELECCIONES.</h3>
      <p>
        Los resultados y declaraciones de validez de las elecciones.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHAS DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Resuldatos y Declaración de válidez">Formato</a></th>
              <td>Dirección Ejecutiva de Organización Electoral</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalJ" class="modal">
    <span class="close" onclick="closeModal('modalJ')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>J. DICTAMENES, INFORMES Y RESOLUCIONES SOBRE PÉRDIDA DE REGISTRO Y LIQUIDACIÓN DEL PATRIMONIO DE LOS PARTIDOS POLÍTICOS</h3>
      <p>
        Los dictámenes, informes y resoluciones sobre pérdidas de registro y liquidación del patrimonio de los partidos políticos.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Dictámenes, Informes y Resoluciones">Formato</a></th>
              <td>Dirección Ejecutiva de Fiscalización</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalK" class="modal">
    <span class="close" onclick="closeModal('modalK')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>K. MONITOREO DE MEDIOS</h3>
      <p>
        El monitoreo de los medios.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHAS DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Monitoreo a medios de comunicación">Formato A</a></th>
              <td>Dirección Ejecutiva de Prerrogrativa y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informes, convenios, contratos y datos de la empresa encargada del monitoreo de medios">Formato B</a></th>
              <td>Dirección Ejecutiva de Prerrogrativa y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Dictámenes, Informes y Resoluciones">Formato C</a></th>
              <td>Dirección Ejecutiva de Prerrogrativa y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato D</a></th>
              <td>Dirección Ejecutiva de Prerrogrativa y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Monitoreo a medios de comunicación">Formato E</a></th>
              <td>Dirección Ejecutiva de Prerrogrativa y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Informes, convenios, contratos y datos de la empresa encargada del monitoreo de medios">Formato F</a></th>
              <td>Dirección Ejecutiva de Prerrogrativa y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Dictámenes, Informes y Resoluciones">Formato G</a></th>
              <td>Dirección Ejecutiva de Prerrogrativa y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="">Formato H</a></th>
              <td>Dirección Ejecutiva de Prerrogrativa y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalL" class="modal">
    <span class="close" onclick="closeModal('modalL')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>L. EXPEDIENTES DE QUEJAS</h3>
      <p>
        Los expedientes sobre quejas resueltas por violaciones al Código Electoral para el Estado.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
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
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Quejas">Formato</a></th>
              <td>Dirección Ejecutiva de Asusntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalM" class="modal">
    <span class="close" onclick="closeModal('modalM')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XIV. LISTA DE ACUERDOS, SENTENCIAS, RESOLUCIONES Y CRITERIOS RELEVANTES</h3>
      <p>
        La lista de acuerdos, las sentencias, resoluciones y criterios relevantes, con los respectivos votos particulares o concurrentes, si los hubiere.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHAS DE VALIDACIÓN</th>
              <th scope="col">FECHAS DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Acuerdos, Sentencias, Resoluciones y Criterios Relevantes">Formato</a></th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalN" class="modal">
    <span class="close" onclick="closeModal('modalN')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>N. RESULTADOS DE LOS PRECEDIMIENTOS DE FISCALIZACIÓN</h3>
      <p>
        El resultado de las revisiones, auditorias y verificaciones que se practiquen en los procedimientos de fiscalización.
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Resultados">Formato</a></th>
              <td>Dirección Ejecutiva de la Unidad de Fiscalización</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalO" class="modal">
    <span class="close" onclick="closeModal('modalO')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>O.VERSIONES ESTENOGRÁFICAS DE LAS SESIONES PÚBLICAS</h3>
      <p>
        Las versiones estenográficas de las sesiones públicas.
       </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Versiones estenográficas">Formato</a></th>
              <td>Unidad Técnica del Secretariado</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div> 
    </div> 
  </div>

  <div id="modalP" class="modal">
    <span class="close" onclick="closeModal('modalP')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 19</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 19 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>P.ESTADÍSTICAS DE LOS MEDIOS DE IMPUGNACIÓN</h3>
      <p>
        Estadisticas de los medios de impugnacion promovidos en contra de las resoluciones emitidas por la autoridad. 
      </p>
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><i class="fa-solid fa-download"></i></th>
              <th scope="col">RESPONSABLE</th>
              <th scope="col">FECHA DE VALIDACIÓN</th>
              <th scope="col">FECHA DE ACTUALIZACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row"><a href="archivos/expe1.xlsx" class="btn" id="btn-expe1" title="Estadisticas">Formato</a></th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div> 
    </div> 
  </div>
























  <!-- Inicio de footer -->
  <footer>
    <div class="footer-section">
      <h3>Portal de Transparencia OPLE Veracruz</h3>
      <p>© 2017 Unidad Técnica de Servicios Informáticos</p>
    </div>

    <div class="footer-section">
      <h3>Contáctanos</h3>
      <ul>
        <li><span class="material-symbols-outlined">call</span> <a href="#">TEL: 2281410700</a></li>
        <li><span class="material-symbols-outlined">call</span> <a href="#">TEL: 2281410330</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h3>Sitios de Interés</h3>
      <ul>
        <li><a href="#">INE</a></li>
        <li><a href="#">FISCALÍA GENERAL DEL ESTADO DE VERACRUZ</a></li>
        <li><a href="#">Fiscalía Especializada en Delitos Electorales</a></li>
        <li><a href="#">Poder Judicial del Estado de Veracruz</a></li>
        <li><a href="#">SCJN</a></li>
        <li><a href="#">Tribunal Electoral de Veracruz</a></li>
        <li><a href="#">Tribunal Electoral del Poder Judicial de la Federación</a></li>
        <li><a href="#">Página Oficial del OPLE</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h3>Síguenos</h3>
      <ul class="social-icons">
        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
        <li><a href="#"><i class="bi bi-twitter-x"></i></a></li>
        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
      </ul>
    </div>
  </footer>

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