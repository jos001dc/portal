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
  <!--texto del articulo50 con el texto -->
  <div class="banner-over">
    <h1>ARTICULO 50</h1>
    <h4>Obligaciones de Transparencia comunes</h4>
  </div>
  <!-- Final de la imagen -->

  <!-- Inicio de la config de las modal -->
  <div class="contenedor">
    <div class="card" onclick="openModal('modal1')">
      <div class="icon"><i class="bi bi-journal-text"></i></div>
      <h2 class="titlee"> I.</h2>
      <h3 class="title"><br>Marco normativo</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal2')">
      <div class="icon"><i class="bi bi-diagram-3"></i></div>
      <h2 class="titlee"> II.</h2>
      <h3 class="title"><br>Estructura Orgánizada Completa</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal3')">
      <div class="icon"><i class="bi bi-shield-check"></i></div>
      <h2 class="titlee"> III.</h2>
      <h3 class="title">Faculdades de cada Área</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal4')">
      <div class="icon"><i class="bi bi-flag"></i></i>
      </div>
      <h2 class="titlee"> IV.</h2>
      <h3 class="title">Metas y Objetivos de las Áreas</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal5')">
      <div class="icon"><i class="bi bi-graph-up"></i>
      </div>
      <h2 class="titlee"> V.</h2>
      <h3 class="title">Indicadores Relacionados con Temas de Interés Público</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal6')">
      <div class="icon"><i class="bi bi-bar-chart-line"></i>
      </div>
      <h2 class="titlee"> VI.</h2>
      <h3 class="title">Directorio de todas las personas servidoras Públicas</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal7')">
      <div class="icon"><i class="bi bi-people"></i>
      </div>
      <h2 class="titlee"> VII.</h2>
      <h3 class="title">Remuneración de todas las personas servidoras Públicas de Base o Confianza</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal8')">
      <div class="icon"><i class="bi bi-cash-stack"></i>
      </div>
      <h2 class="titlee"> VIII.</h2>
      <h3 class="title"> Gastos de Representación y Viáticos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal9')">
      <div class="icon"><i class="bi bi-receipt"></i>
      </div>
      <h2 class="titlee"> IX.</h2>
      <h3 class="title">Numeros Total de las Plazas</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal10')">
      <div class="icon"><i class="bi bi-person-workspace"></i></div>
      <h2 class="titlee">X.</h2>
      <h3 class="title">Contrataciones de Servidores Profesionales por Honorarios</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal11')">
      <div class="icon"><i class="bi bi-briefcase"></i>
      </div>
      <h2 class="titlee">XI.</h2>
      <h3 class="title">Declaraciones Patrimoniales de las Personas Servidoras Públicas</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal12')">
      <div class="icon"><i class="bi bi-file-earmark-text"></i>
      </div>
      <h2 class="titlee"> XII.</h2>
      <h3 class="title">Domicilio de la Unidad de Transparencia</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal13')">
      <div class="icon"><i class="bi bi-house"></i>
      </div>
      <h2 class="titlee"> XIII.</h2>
      <h3 class="title">Convocatorias para Ocupar Cargos Públicos y sus Resultados</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <!-- <div class="card" onclick="openModal('modal14')">
      <div class="icon"><i class="bi bi-megaphone"></i>
      </div>
      <h3 class="title">XIV.<br>Convocatorias Para Cargos Públicos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div> -->

    <div class="card" onclick="openModal('modal15')">
      <div class="icon"><i class="bi bi-slash-circle"></i>
      </div>
      <h2 class="titlee"> XV.</h2>
      <h3 class="title">Condiciones Generales de Trabajo</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal16')">
      <div class="icon"><i class="bi bi-journal-text"></i>
      </div>
      <h2 class="titlee"> XVI.</h2>
      <h3 class="title">Información Curricular</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <!-- 
    <div class="card" onclick="openModal('modal17')">
      <div class="icon"><i class="bi bi-person-lines-fill"></i>
      </div>
      <h2 class="titlee"> XVII.</h2>
      <h3 class="title">Listado de personas Servidoras Públicas con Sanciones Administrativas</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>-->

    <div class="card" onclick="openModal('modal18')">
      <div class="icon"><i class="bi bi-people"></i>
      </div>
      <h2 class="titlee"> XVIII.</h2>
      <h3 class="title">Servicios y Trámites que Ofrecen</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal19')">
      <div class="icon"><i class="bi bi-tools"></i>
      </div>
      <h2 class="titlee"> XIX.</h2>
      <h3 class="title">Información Financiera Sobre el Presupuesto Asignado</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <!-- <div class="card" onclick="openModal('modal20')">
      <div class="icon"><i class="bi bi-folder-check"></i>
      </div>
      <h3 class="title">XX.<br>Trámites, Requisitos y Formatos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div> -->

    <div class="card" onclick="openModal('modal21')">
      <div class="icon"><i class="bi bi-wallet2"></i>
      </div>
      <h2 class="titlee"> XXI.</h2>
      <h3 class="title">Gastos Relativos a Comunicación Social y Públicidad Oficial</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal22')">
      <div class="icon"><i class="bi bi-clipboard-data"></i>
      </div>
      <h2 class="titlee"> XXII.</h2>
      <h3 class="title">Información de Resultados de las Auditorías al Ejercicio Presupuestal</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal23')">
      <div class="icon"><i class="bi bi-file-earmark-bar-graph"></i>
      </div>
      <h2 class="titlee"> XXIII.</h2>
      <h3 class="title">Resultado de la Dictaminación de los Estados Financieros</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>

    </div>

    <div class="card" onclick="openModal('modal24')">
      <div class="icon"><i class="bi bi-journal-text"></i>
      </div>
      <h2 class="titlee"> XXIV.</h2>
      <h3 class="title">Listado de Personas Físicas y Morales con Asignación de Recursos Públicos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal25')">
      <div class="icon"><i class="bi bi-file-earmark-bar-graph"></i>
      </div>
      <h2 class="titlee"> XXV.</h2>
      <h3 class="title">Concesiones, Contratos, Convenios, Permisos, Licencias o Autorizaciones Otorgados</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal26')">
      <div class="icon"><i class="bi bi-file-earmark-lock"></i>
      </div>
      <h2 class="titlee"> XXVI.</h2>
      <h3 class="title">Procedimientos de Adjudicación Directa, Invitación Restringida y Licitación</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal27')">
      <div class="icon"><i class="bi bi-file-earmark-text"></i>
      </div>
      <h2 class="titlee"> XXVII.</h2>
      <h3 class="title">Información que Generen de Conformidad con las Disposiciones Jurídicas</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal28')">
      <div class="icon"><i class="bi bi-clipboard-data"></i>
      </div>
      <h2 class="titlee"> XXVIII.</h2>
      <h3 class="title">Estadisticas que se Generen en Cumplimiento a las Facultades</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal29')">
      <div class="icon"><i class=" bi bi-bar-chart-steps"></i>
      </div>
      <h2 class="titlee"> XXIX.</h2>
      <h3 class="title">Informes de Avances Programáticos o Presupuestales</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal30')">
      <div class="icon"><i class="bi bi-person-badge"></i>
      </div>
      <h2 class="titlee"> XXX.</h2>
      <h3 class="title">Padrón de Proveedores y Contratistas</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal31')">
      <div class="icon"><i class="bi bi-diagram-3"></i>
      </div>
      <h2 class="titlee"> XXXI.</h2>
      <h3 class="title">Convenios de Coordinación de Concertacion con los Sectores Social y Privado</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal32')">
      <div class="icon"><i class="bi bi-box-seam"></i>
      </div>
      <h2 class="titlee"> XXXII.</h2>
      <h3 class="title">Inventario de Bienes Muebles e Inmuebles</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal33')">
      <div class="icon"><i class="bi bi-globe"></i>
      </div>
      <h2 class="titlee"> XXXIII.</h2>
      <h3 class="title">Recomendaciones Emitidas por los Órganos Públicos del Estado Mexicano u Organismos Internacionales</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal34')">
      <div class="icon"><i class="bi bi-journal-check"></i>
      </div>
      <h2 class="titlee"> XXXIV.</h2>
      <h3 class="title">Resoluciones que se Emitan en Proceso o Procedimientos Seguidos en forma de Juicio</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal35')">
      <div class="icon"><i class="bi bi-chat-dots"></i>
      </div>
      <h2 class="titlee"> XXXV.</h2>
      <h3 class="title">Mecanismo de Participación Ciudadana</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>
    <!-- 
    <div class="card" onclick="openModal('modal36')">
      <div class="icon"><i class="fa-solid fa-scale-balanced"></i>
      </div>
      <h2 class="titlee"> XXXVI.</h2>
      <h3 class="title"></h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>-->

    <div class="card" onclick="openModal('modal37')">
      <div class="icon"><i class="bi bi-people"></i>
      </div>
      <h2 class="titlee"> XXXVII.</h2>
      <h3 class="title">Actas y Resoluciones del Comité de Transparencia de los Sujetos Obligados</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal39')">
      <div class="icon"><i class="bi bi-bar-chart"></i>
      </div>
      <h2 class="titlee"> XXXIX.</h2>
      <h3 class="title">Estados Financiados con Recursos Públicos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal41')">
      <div class="icon"><i class="bi bi-cash-stack"></i>
      </div>
      <h2 class="titlee"> XLI.</h2>
      <h3 class="title">Ingresos Recibidos por Cualquier Concepto</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal42')">
      <div class="icon"><i class="bi bi-wallet2"></i>
      </div>
      <h2 class="titlee"> XLII.</h2>
      <h3 class="title">Donaciones Hechas a Terceros en Dinero o Especie</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modal43')">
      <div class="icon"><i class="bi bi-folder"></i>
      </div>
      <h2 class="titlee"> XLIII.</h2>
      <h3 class="title">Catálogo de Disposición y Guía de Archivos Documental</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <!-- Aun no se sabe si poner o quitar
    <div class="card" onclick="openModal('modal44')">
      <div class="icon"><i class="bi bi-file-earmark-text"></i>
      </div>
      <h2 class="titlee"> XLIV.</h2>
      <h3 class="title">Actas de Sesiones, Opiniones y Recomendaciones de los Consejos Consultivos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div> -->

    <div class="card" onclick="openModal('modal45')">
      <div class="icon">
        <div class="icon"><i class="bi bi-info-circle"></i>
        </div>
      </div>
      <h2 class="titlee"> XLVI.</h2>
      <h3 class="title">Información que sea de Utilidad o se Considere Relevante</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>
  </div> <!-- Final de la config de las modal -->


 <!-- Configuraciones de la ventana modal abierta -->
  <div id="modal1" class="modal">
    <span class="close" onclick="closeModal('modal1')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
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
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>I. ESTRUCTURA ORGÁNICA COMPLETA</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Estructura Orgánica Completa">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva Administraión</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Organigrama">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
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
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>III. Facultades de Cada Área</h3>
      <p>
        Las facultades de cada Área. </p>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Facultades de cada área">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
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
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>IV. Metas y Objetivos de las Áreas</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Metas y Objetivos">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnicas de Planeación</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal5" class="modal">
    <span class="close" onclick="closeModal('modal5')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>V. Indicadores Relacionados con Temas de Interés Públicos</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Indicadores de temas interés">
                  <ul>
                    <li> Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unida Técnica de Planeación</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal6" class="modal">
    <span class="close" onclick="closeModal('modal6')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>VI. DIRECTORIO DE TODAS LAS PERSONAS SERVIDORAS PÚBLICAS</h3>
      <p>
        El directivo de todos los Servidores Públicos, a partir del nivel de jefe de dapartamento o su equivalente, o de menor nivel, cuando se brinde atencíon al público;
        realicen actos de autoridad o presten servicios profesionales bajo el régimen de confianza u honorarios y personal de base. El directorio deberá incluir, al menos el nombre, cargo o nombramiento asignado, nivel del puesto en la estructura orgánica, fecha de alta en el cargo, número telefónico, domicilio para recibir correspondencia
        y Dirección de correo electrónico oficiales. </p>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Directorio del OPLE">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos de Administración</td>
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
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>VII. REMUNERACIÓN DE TODAS LAS PERSONAS SERVIDORAS PÚBLICAS DE BASE O CONFIANZA</h3>
      <p>
        La remuneración bruta y neta de todos los Servidores Públicos de base o de confianza, de todas las percepciones, incluyendo sueldos, prestaciones, gratificaciones, primas, comisiones, dietas, bonos, estímulos, ingresos y sistemas de compensación
        , señalando la periodicidad de dicha remuneración.
      <div class="fraccion">
        <div class="separador">
          <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
          <span class="texto">Publicaciones</span>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Remuneración Bruta y neta">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Tabulador de Sueldos y Salarios">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal8" class="modal">
    <span class="close" onclick="closeModal('modal8')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>VIII. GASTOS DE REPRESENTACIÓN Y VIÁTICOS</h3>
      <p>
        Los gastos de representación y viaticos, así como el objeto de informw de comisión correspondiente. </p>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Gastos de representación">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos de Administración</td>
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
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>IX. NUMEROS DE PLAZAS</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Plazas Vacantes">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Total de Plazas">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos de Administración</td>
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
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>X. CONTRATACIONES DE SERVICOS PROFECIONALES POR HONORARIOS</h3>
      <p> Las contrataciones de servicos profecionales por honoracios, señalando los nombres de los prestadores de servicios, los servicios contrataciones, el monto de los honorarios y el periodo de contratación.
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Personal Contratado por Honorarios">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal11" class="modal">
    <span class="close" onclick="closeModal('modal11')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XI. DECLARACIONES PATRIMONIALES DE LO SERVICOS PÚBLICOS</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Declaración de Situación patrimonial">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Contraloria General</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Declaraciones Fiscales">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Contraloria General</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Declaraciones Interés">
                  <ul>
                    <li>Formato C</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Contraloria General</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal12" class="modal">
    <span class="close" onclick="closeModal('modal12')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XII. DOMICILIO DE LA UNIDAD DE TRANSPARENCIA</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Domicilio Oficial">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal13" class="modal">
    <span class="close" onclick="closeModal('modal13')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XIII. CONVOCATORIA PARA CARGOS PÚBLICOS Y SUS RESULTADOS </h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Convocatorias">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
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
    <span class="close" onclick="closeModal('modal15')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XV.CONDICIONES GENERALES DEL TRABAJO</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Normatividad">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección de Asuntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Recursos públicos entregados a Sindicatos">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal16" class="modal">
    <span class="close" onclick="closeModal('modal16')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 5 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XVI. INFORMACÍON CURRICULAR</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Información Curricular">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
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
    <span class="close" onclick="closeModal('modal17')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XVIII.LISTADO DE PERSONAS SERVIDORAS PÚBLICAS CON SANCIONES ADMINISTRATIVAS </h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Sanciones administrativas">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Contraloría General</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal18" class="modal">
    <span class="close" onclick="closeModal('modal18')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XIX. SERVICIOS Y TRAMITES QUE OFRECEN</h3>
      <p>
        Los servicos que ofrece señalando los requisitos para acceder a ellos.
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
              <th scope="col">FECHA DE ACTUALIDACIÓN</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Servicios">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal19" class="modal">
    <span class="close" onclick="closeModal('modal19')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XIX. INFORMACIÓN FINANCIERA SOBRE EL PRESUPUESTOS ASIGNADOS</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Presupuesto Asignado">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Informes trimestrales">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Cuenta pública">
                  <ul>
                    <li>Formato C</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Secretaria Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal21" class="modal">
    <span class="close" onclick="closeModal('modal21')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXI. GASTOS RELATIVOS A COMUNICACIÓN SOCIAL Y PUBLICIDAD OFICIAL</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Programa Anual">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Comunicación Social</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Errogación de recursos">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Tiempo oficiales">
                  <ul>
                    <li>Formato C</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal22" class="modal">
    <span class="close" onclick="closeModal('modal22')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXII. INFORMES DE RESULTADOS DE LAS AUDITORIAS AL EJERCICIO PRESUPUESTAL</h3>
      <p>
        Los informes de resultados de las auditorias al ejercicio presupuestal de cada sujeto obligado que se realicen y, en su caso, las aclaraciones que corresponda.
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Resultados de auditorias">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Resuldatos de auditorias">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Contraloría General</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal23" class="modal">
    <span class="close" onclick="closeModal('modal23')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXIII. RESULTADOS DE LA DICTAMINACIÓN DE LOS ESTADOS FINANCIEROS</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Dictaminación de estados financieros">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Dictaminación de estados financieros">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Contraloría General</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal24" class="modal">
    <span class="close" onclick="closeModal('modal24')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXIV. LISTADOS DE PERSONAS FÍSICAS Y MORALES CON ASIGNACIÓN DE RECURSOS PÚBLICO </h3>
      <p>
        Los montos,criteriós, convocatorias, listado de personas físicas o morales a quienes, por cualquier motivo, se les asigne o permita usar recursos públicos o, e los términos de las disposiciones aplicables, realicen actos de autoridad. Asimismo, los informes que dichas personas les entreguen sobre el uso y destino de dichos recursos.
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Personas fisicas asignadas para uso de recursos públicos">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal25" class="modal">
    <span class="close" onclick="closeModal('modal25')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXV. CONCESIONES, CONTRATOS, CONVENIOS, PERMISOS, LICENCIAS O AUTORIZACIONES OTORGADAS.</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Concesiones,contratos,convenios,permisos,licencias o autorizaciones otorgados por el OPLE">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal26" class="modal">
    <span class="close" onclick="closeModal('modal26')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXVI. PROCEDIMIENTOS DE ADJUDICACIÓN DIRECTA, INVITACIÓN RESTRINGIDA Y LICITACIÓN</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Licitación Pública">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
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
    <span class="close" onclick="closeModal('modal27')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXVII. INFORMES QUE GENEREN DE CONFORMIDAD CON LAS DISPOSICIONES JURÍDICAS. </h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Informes">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Secretaría Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Informes">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Informes">
                  <ul>
                    <li>Formato C</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Contraloría General</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Informes">
                  <ul>
                    <li>Formato D</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unida Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal28" class="modal">
    <span class="close" onclick="closeModal('modal28')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXVIII. ESTADISTICAS QUE SE GENEREN EN CUMPLIMIENTO A LAS FACULTADES.</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Estadisticas">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Organización Electoral</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal29" class="modal">
    <span class="close" onclick="closeModal('modal29')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXIX. INFORMES DE AVANCES PROGRAMÁTICOS O PRESUPUESTAL.</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Estados financieros">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Estados Financieros">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal30" class="modal">
    <span class="close" onclick="closeModal('modal30')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXX. PADRÓN DE PROVEEDORES Y CONTRATISTA.</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Padrón de proveedores y contratista">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal31" class="modal">
    <span class="close" onclick="closeModal('modal31')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXXI. CONVENIOS DE COORDINACIÓN DE COORDINACIÓN CON LOS SECTORES SOCIAL Y PRIVADO.</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Convenios de coordinación, de concentración con el sector social y privado">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Convenios de coordinación, de concertación social y privado">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Secretaria Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal32" class="modal">
    <span class="close" onclick="closeModal('modal32')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXXII. INVENTARIO DE BIENES MUEBLES E INMUEBLES.</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Inventarios bienes muebles">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Inventario Alta">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="">
                  <ul>
                    <li>Formato C</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Inventario bienes inmuebles">
                  <ul>
                    <li>Formato D</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Inventario altas">
                  <ul>
                    <li>Formato E</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Inventario bajas">
                  <ul>
                    <li>Formato F</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Bienes muebles e inmuebles donados">
                  <ul>
                    <li>FormatoG</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal33" class="modal">
    <span class="close" onclick="closeModal('modal33')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXXIII. RECOMENDACIONES EMITIDAS POR LOS ÓRGANOS PÚBLICOS DEL ESTADO MEXICANO U ORGANISMOS INTERNACIONALES.</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Recomendaciones emitidas por la comisión Nacional de Derechos Humanos">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Casos especiales emitidas por la CNDH u otros organismo">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Recomendaciones emitidas por Organismos internacionales">
                  <ul>
                    <li>Formato C</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal34" class="modal">
    <span class="close" onclick="closeModal('modal34')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXXIV. RESOLUCIONES QUE SE EMITAN EN PROCESO O PROCEDIMIENTOS SEGUIDOS EN FORMAS DE JUICIO.</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Resoluciones y laudos emitidos">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos Jurídicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal35" class="modal">
    <span class="close" onclick="closeModal('modal35')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXXV. MECANISMO DE PARTICIPACIÓN CIUDADANA.</h3>
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
              <th scope="row">
                <a href="archivos/formato1.xlsx" class="btn" title="Mecanismos de Participación Ciudadana">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Capacitación Electoral y Educación Cívica</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Mecanismo de Participación Ciudadana">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Capacitación Electoral y Educación Cívica</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal37" class="modal">
    <span class="close" onclick="closeModal('modal37')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXXVII. ACTAS Y RESOLUCIONES DEL COMITÉ DE TRANSPARENCIA DE LOS SUJETOS OBLIGADOS.</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Informes de sesiones">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Informes de resoluciones">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Integrantes de Comitéc de Transparencia">
                  <ul>
                    <li>Formato C</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Calendario de Sesiones ordinarias">
                  <ul>
                    <li>Formato D</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Calendario de Sesiones ordinarias">
                  <ul>
                    <li>Formato E1</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Organización Electoral</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Calendario de Sesiones ordinarias">
                  <ul>
                    <li>Formato E2</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de de Capacitación</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Calendario de Sesiones ordinarias">
                  <ul>
                    <li>Formato E3</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Calendario de Sesiones Ordinarias">
                  <ul>
                    <li>Formato E4</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Comunicación Social</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Calendario de Sesiones Ordinarias">
                  <ul>
                    <li>Formato E5</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Secretaría Ejecutiva </td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Calendario de Sesiones Ordinarias">
                  <ul>
                    <li>Formato E6</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Asuntos Juridicos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Calendario de Sesiones Ordinarias">
                  <ul>
                    <li>Formato E7</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Igualdad de Género e Inclusión</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Calendario de Sesiones Ordinarias">
                  <ul>
                    <li>Formato E8</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica del Centro de Formación y Desarrollo</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Calendario de Sesiones Ordinarias">
                  <ul>
                    <li>Formato E9</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="">
                  <ul>
                    <li>Formato E10</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Planeación</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="">
                  <ul>
                    <li>Formato E11</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Vinculación con ODES y OSC</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="">
                  <ul>
                    <li>Formato E12</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td></td>
              <td>0</td>
              <td>0</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal39" class="modal">
    <span class="close" onclick="closeModal('modal35')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XXXIX. ESTUDIOS FINANCIADOS CON RECURSOS PÚBLICOS.</h3>
      <p>
        Los estudios finaciados con recursos Públicos.
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
              <th scope="row">
                <a href="archivos/formato1.xlsx" class="btn" title="Los estudios financiados con recursos Públicos">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Capacitación Electoral y Educación Cívica</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal41" class="modal">
    <span class="close" onclick="closeModal('modal35')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>XLI. INGRESOS RECIBIDOS POR CUALQUIER CONCEPTO.</h3>
      <p>
        Los ingresos recibidos por cualquier concepto señalado el nombre el nombre de los responsables de recibirlo, administrarlos y ejercerlos, así como su destino, indicando el destino de cada uno de ellos.
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
              <th scope="row">
                <a href="archivos/formato1.xlsx" class="btn" title="Ingresos Recibidos">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Responsable de recibir, administrar y ejercer los ingresos">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal42" class="modal">
    <span class="close" onclick="closeModal('modal35')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XLII. DONACIONES HECHAS A TERCEROS EN DINERO O EN ESPECIE.</h3>
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
              <th scope="row">
                <a href="archivos/formato1.xlsx" class="btn" title="Donaciones a terceros en dinero">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Administración</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modal43" class="modal">
    <span class="close" onclick="closeModal('modal43')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XLIII. CATÁLOGO DE DISPOSICIÓN Y GUIA DE ARCHIVOS DOCUMENTAL.</h3>
      <p>
        El catálogo de disposición y guía de archivos documental .
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
              <th scope="row">
                <a href="archivos/formato1.xlsx" class="btn" title="Informes de sesiones">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Informes de Resoluciones">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/formato2.xlsx" class="btn" title="Informes de resoluciones">
                  <ul>
                    <li>Formato C</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viembox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td></td>
              <td>02/06/25</td>
              <td>02/06/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- <div id="modal44" class="modal">
    <span class="close" onclick="closeModal('modal35')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 15</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 15 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XLIV. ACTAS DE SESIONES, OPINIONES Y RECOMENDACIONES DE LOS CONSEJOS CONSULTIVOS.</h3>
      <p>
        Las actas de sesiones ordinarias y extraordinarias, asi como las opiniones y recomendaciones que emitan, en su caso, los consejos consultivos.
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
            <th scope="row">
              <a href="archivos/formato1.xlsx" class="btn" title="Actas del Consejo Consultivo">
                <ul>
                  <li>Formato A</li>
                  <li>Downloading</li>
                  <li>Open File</li>
                </ul>
                <div>
                  <svg viewBox="0 0 24 24">
                    <polyline points="4 12 10 18 20 6"></polyline>
                  </svg>
                </div>
              </a>
            </th>
            <td>Formatos Unidad Técnica de Transparencia</td>
            <td>02/06/25</td>
            <td>09/09/25</td>
          </tr>
          <tr>
            <th scope="row">
              <a href="archivos/expe1.xlsx" class="btn" title="Opiniones y recomendaciones del Consejo Consultivo">
                <ul>
                  <li>Formato B</li>
                  <li>Downloading</li>
                  <li>Open File</li>
                </ul>
                <div>
                  <svg viewBox="0 0 24 24">
                    <polyline points="4 12 10 18 20 6"></polyline>
                  </svg>
                </div>
              </a>
            </th>
            <td>Formato Unidad Técnica del Consejo de Transparencia</td>
            <td>02/06/25</td>
            <td>09/09/25</td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div> -->

  <div id="modal45" class="modal">
    <span class="close" onclick="closeModal('modal35')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 50</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 50 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>XLVI. INFORMACIÓN QUE SEA UTILIDAD O SE CONSIDERE RELEVANTE.</h3>
      <p>
        Cualquier otra información que sea de utilidad o se considere relevante, además de la que, con base en la información estadisticas, responda a las preguntas hechas con más frecuencia por el público.
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
              <th scope="row">
                <a href="archivos/formato1.xlsx" class="btn" title="Información de interes">
                  <ul>
                    <li>Formato A1</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Capacitación Electoral y Educación Cívica</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Información de interes">
                  <ul>
                    <li>Formato A2</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica del Centro de Formación y Desarrollo</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Preguntas frecuentes">
                  <ul>
                    <li>Formato B1</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Organización Electoral</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Preguntas Frecuentes">
                  <ul>
                    <li>Formato B2</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica del Secretariado</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Preguntas Frecuentes">
                  <ul>
                    <li>Formato B3</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Preguntas Frecuentes">
                  <ul>
                    <li>Formato B4</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Perrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Transparencia Proactiva">
                  <ul>
                    <li>Formato C1</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Transparencia</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!--Articulo 55 -->
  <div class="banner-over">
    <h1>ARTICULO 55</h1>
    <h4>Obligaciones de Transparencia especificas</h4>
  </div>

  <div class="contenedor">
    <div class="card" onclick="openModal('modalA')">
      <div class="icon"><i class="bi bi-person-badge"></i></div>
      <h2 class="titlee"> A.</h2>
      <h3 class="title"><br>Listado de Partidos Políticos, Asociaciones y Agrupaciones Políticas o de Ciudadanos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalB')">
      <div class="icon"><i class="bi bi-file-earmark-text"></i></div>
      <h2 class="titlee">B.</h2>
      <h3 class="title"><br>Informes Presentados por los Partidos Políticos, Asociaciones, Agrupaciones Políticas o de Ciudadanos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalD')">
      <div class="icon"><i class="bi bi-card-checklist"></i></i>
      </div>
      <h2 class="titlee">D.</h2>
      <h3 class="title">Registro de Candidatos a Cargos de Elección Popular</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalE')">
      <div class="icon"><i class="bi bi-cash-stack"></i>
      </div>
      <h2 class="titlee">E.</h2>
      <h3 class="title">Montos de Financiamiento Público por Actividades Ordinarias, Financiamiento Privado y Topes de Campaña</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalF')">
      <div class="icon"><i class="bi bi-bar-chart-line"></i>
      </div>
      <h2 class="titlee">F.</h2>
      <h3 class="title">Metología e Informes Sobre la Publicación de Encuestas y Conteos Rápidos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalG')">
      <div class="icon"><i class="bi bi-file-earmark-bar-graph"></i>
      </div>
      <h2 class="titlee">G.</h2>
      <h3 class="title">Metología e Informes del Programa de Resultados Preliminares</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalH')">
      <div class="icon"><i class="bi bi-clipboard-data"></i>
      </div>
      <h2 class="titlee">H.</h2>
      <h3 class="title">Cómputos Totales de las Elecciones y Procesos de Participacion Ciudadana</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalI')">
      <div class="icon"><i class="bi bi-check-circle"></i>
      </div>
      <h2 class="titlee">I.</h2>
      <h3 class="title">Resultado y Declaraciones de Validez de las Elecciones</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalJ')">
      <div class="icon"><i class="bi bi-journal-check"></i></div>
      <h2 class="titlee">J.</h2>
      <h3 class="title">Dictamenes, Informes y Resoluciones sobre Pérdida de Registro y Liquidación de los Partidos Politicos</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalK')">
      <div class="icon"><i class="bi bi-broadcast"></i>
      </div>
      <h2 class="tittle">K.</h2>
      <h3 class="title">Monitoreo de Medios</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalL')">
      <div class="icon"><i class="bi bi-folder2-open"></i>
      </div>
      <h2 class="tittle">L.</h2>
      <h3 class="title">Expedientes sobre Quejas Resueltas por Violaciones al Código Electoral</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalN')">
      <div class="icon"><i class="bi bi-search"></i>
      </div>
      <h2 class="titlee">N.</h2>
      <h3 class="title">Resultados de Revisiones,Auiditorias y Verificaciones que se Practiquen en los Procedimientos de Fiscalización</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>

    <div class="card" onclick="openModal('modalñ')">
      <div class="icon"><i class="bi bi-mic"></i>
      </div>
      <h2 class="titlee">Ñ.</h2>
      <h3 class="title">Versiones Estenográficas de las Sesiones Públicas</h3>
      <div class="card-hover">
        <span>Ver más</span>
        <i class="bi bi-arrow-right"></i>
      </div>
    </div>
  </div>

  <div id="modalA" class="modal">
    <span class="close" onclick="closeModal('modalA')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Normatividad aplicable">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Asociaciones civiles y/o ciudadanos que realicen actividades de observación electoral">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Secretaria Ejecutiva</td>
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
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>B. INFORMES PRESENTADOS POR LOS PARTIDOS POLÍTICOS, ASOCIACIONES,AGRUPACIONES POLÍTICAS O DE CIUDADANOS</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Informes presentados">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Fiscalización</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Informes y Dictámenes">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Fiscalización</td>
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
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Registro de candidatos a cargos de elección popular">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="sistemas de consulta de candidatos a cargos de elección popular">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Candidatos electos a cargos de elección popular">
                  <ul>
                    <li>Formato C</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Sistema de consulta electos a cargo de elección popular">
                  <ul>
                    <li>Formato D</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y partidos Políticos</td>
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
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Montos Entregados">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Montos Autorizados">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="">
                  <ul>
                    <li>Formato C</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y partidos Políticos</td>
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
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Secretaria Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Secretaria Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="">
                  <ul>
                    <li>Formato C</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Secretaria Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="">
                  <ul>
                    <li>Formato D</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Secretaria Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="">
                  <ul>
                    <li>Formato E</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Secretaria Ejecutiva</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="">
                  <ul>
                    <li>Formato F</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Secretaria Ejecutiva</td>
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
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Metodologia del PREP">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Técnica de Servicio Informatico</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Resultados del PREP">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Unidad Tecnica de Servicio Informaticos</td>
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
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>H. CÓMPUTO TOTALES DE LAS ELECCIONES Y PROCESOS DE PARTICIPACIÓN CIUDADANA</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Resultados y Declaraciones de valídez">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td></td>
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
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Resultados y Declaraciones de valídez">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td></td>
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
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Dictámenes, Informes y Resoluciones">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
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
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Monitoreo a medios de comunicación">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Informes, convenios,contratos y datos de la empresa encargada del monitoreo de medios">
                  <ul>
                    <li>Formato B</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Dictámenes, Informes y Resoluciones">
                  <ul>
                    <li>Formato C</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="">
                  <ul>
                    <li>Formato D</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Monitoreo a medios de comunicación">
                  <ul>
                    <li>Formato E</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Informes,convenios,contratos y datos de las empresa encargada del monitoreo de medios">
                  <ul>
                    <li>Formato F</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Dictamenes,Informes y Resoluciones">
                  <ul>
                    <li>Formato G</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="">
                  <ul>
                    <li>Formato H</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td>Dirección Ejecutiva de Prerrogativas y Partidos Políticos</td>
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
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
      <h3>L. EXPEDIENTES DE QUEJAS RESUELTAS POR VIOLACIONES AL CÓDIGO ELECTORAL</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Quejas">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td></td>
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
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
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
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <h3>N. RESULTADOS DE REVISIONES, AUDITORIAS Y VERIFICACIONES QUE SE PRACTIQUEN EN EL PROCEDIMIENTO DE FISCALIZACIÓN</h3>
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Resultados">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td></td>
              <td>02/06/25</td>
              <td>09/09/25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="modalñ" class="modal">
    <span class="close" onclick="closeModal('modalO')">&times;</span>
    <div class="modal-content">
      <h2>Articulo 55</h2>
      <p>
        <strong>Información Pública de Oficio</strong><br>
        En términos del artículo 55 de la Ley 875 de Transparencia y Acceso a la Información Pública para el estado de Veracruz de Ignacio de la Llave, se deberá publicar y mantener actualizada la siguiente información:
      </p>
      <hr class="separ">
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
              <th scope="row">
                <a href="archivos/expe1.xlsx" class="btn" title="Versiones estenográficas">
                  <ul>
                    <li>Formato A</li>
                    <li>Downloading</li>
                    <li>Open File</li>
                  </ul>
                  <div>
                    <svg viewBox="0 0 24 24">
                      <polyline points="4 12 10 18 20 6"></polyline>
                    </svg>
                  </div>
                </a>
              </th>
              <td></td>
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