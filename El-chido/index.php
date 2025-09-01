<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPLE VERACRUZ</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <script src="../otra/script.js"></script>
    <link rel="stylesheet" href="estiles.css">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <div class="boton-inicio">
                <a href="#">OPLE</a>
            </div>
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
<!--parte de la imagen con informacion -->
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
            <P>En terminos del articulo 15 de la ley 875 de Transparencia y Acceso a la Informacion Publica para
                el estado de Veracruz de Ignacio de la LLave, se debera publicar y mantener actualizada la siguiente informacion:
            </P>
            <h4>FRACCIONES</h4>
        </div>
    <!-- inicio de las tarjetas-->
    <!-- 🗂 Contenedor de las tarjetas -->
    <div class="catalog-grid">

        <?php
        $items = [
            [
                'title' => 'MARCO NORMATIVO', //1
                'icon' => 'fa-scale-balanced',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,
                reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '../../sitiotransparencia/art70/fracciones/01/F1juridico2025.xlsx', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'ESTRUCTURA ORGANIZADA', //2
                'icon' => 'fa-sitemap',
                'tooltip' => 'Ver información sobre estructura organizada',
                'content' => '
            <div class="info-section">
                <p>Su estructura orgánica completa, en un formato que permita vincular cada parte de la estructura, 
                 las atribuciones y responsabilidades que le corresponden a cada servidor público, prestador de servicios profesionales o miembro de los sujetos obligados,
                 de conformidad con las disposiciones aplicables.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'FACULDADES DE CADA AREA', //3
                'icon' => 'fa-user-tie',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'METAS Y OBJETIVOS', //4
                'icon' => 'fa-bullseye',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'INDICADORES', //5
                'icon' => 'fa-chart-line',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'INDICADORES RELACIONADOS CON TEMAS DE INTERES', //6
                'icon' => 'fa-user-tie',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'INDICADORES DE OBJETIVOS Y RESULTADO', //7
                'icon' => 'fa-user-tie',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'DIRECTORIO DE SERVICIOS PUBLICO', //8
                'icon' => 'fa-address-book',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'REMUNERACION DE LOS SERVICIOS PUBLICOS', //9
                'icon' => 'fa-money-bill-wave',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'GASTOS DE REPRESENTACION Y VIATICOS', //10
                'icon' => 'fa-receipt',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'PLAZAS', //11
                'icon' => 'fa fa-users',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'CONTRATACIONES DE SERVICIOS PROFESIONES POR HONORACIOS', //12
                'icon' => 'fas fa-file-signature',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'DOMICILIO', //13
                'icon' => 'fas fa-home',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'CONVOCATORIA PARA CARGOS PUBLICOS', //14
                'icon' => 'fas fa-bullhorn',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'PROGRAMAS DE SUBSIDIOS (NO APLICA)', //15
                'icon' => 'fas fa-hand-holding-usd',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'CONDICIONES GENERALES DE TRABAJO', //16
                'icon' => 'fas fa-briefcase',
                'tooltip' => 'Ver información sobre las condiciones generales de trabajo',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'INFORMACION CURRICULAR', //17
                'icon' => 'fas fa-graduation-cap',
                'tooltip' => 'Ver información sobre la informacion curricular',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'LISTADO DE SERVICIOS PUBLICOS CON SANCIONES ADMINISTRATIVA', //18
                'icon' => 'fas fa-gavel',
                'tooltip' => 'Ver información sobre el marco legal',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'SERVICIOS', //19
                'icon' => 'fas fa-concierge-bell',
                'tooltip' => 'Ver información sobre servicios',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'TRAMITES, REQUISITOS Y FORMATOS', //20
                'icon' => 'fas fa-clipboard-list',
                'tooltip' => 'Ver información sobre tramites, requisitos y formatos',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'PRESUPUESTO ASIGNADOS', //21
                'icon' => 'fas fa-money-bill-wave',
                'tooltip' => 'Ver información sobre presupuesto asignados',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'DEUDAS PUBLICAS (NO APLICADAS)', //22
                'icon' => 'fas fa-file-invoice',
                'tooltip' => 'Ver información sobre deudas publicas(no aplicadas)',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'GASTOS RELATIVOS A COMUNICACION SOCIAL Y PUBLICIDAD OFICIAL', //23
                'icon' => 'fas fa-ad',
                'tooltip' => 'Ver información sobre gastos relativos a comunicacion social y publicidad oficial',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'AUDITORIAS', //24
                'icon' => 'fas fa-search-dollar',
                'tooltip' => 'Ver información sobre auditoria',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'DICTAMINACION DE LOS ESTADOS FINANCIEROS', //25
                'icon' => 'fas fa-file-alt',
                'tooltip' => 'Ver información sobre dictaminacion de los estados financieros',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'LISTADO DE PERSONAS FISICAS Y MORALES CON ASIGNACION DE RECURSOS PUBLICOS', //26
                'icon' => 'fas fa-list-ol',
                'tooltip' => 'Ver información sobre listado de personas fisicas y morales...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'CONCECIONES, CONTRATOS, CONVENIOS, PERMISOS, LICENCIAS O AUTORIZACIONES', //27
                'icon' => 'fas fa-handshake',
                'tooltip' => 'Ver información sobre conceciones, contratos, convenios, permisos...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'ADJUDICACIONES DIRECTAS, INVITACIONES RESTRINGIDAS Y LICITACIONES', //28
                'icon' => 'fas fa-gavel',
                'tooltip' => 'Ver información sobre adjudicaciones directas, invitaciones restri...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'LOS INFORMES QUE POR DISPOSICION LEGAL GENEREN LOS SUJETOS OBLIGADOS', //29
                'icon' => 'fas fa-file-contract',
                'tooltip' => 'Ver información sobre los informes que por disposicion legal...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'ESTADISTICAS', //30
                'icon' => 'fas fa-chart-bar',
                'tooltip' => 'Ver información sobre las estadisticas',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'INFORME DE AVANCES PROGRAMATICO', //31
                'icon' => 'fas fa-tasks',
                'tooltip' => 'Ver información sobre informacion de avances programatico',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'PADRON DE PROVEEDORES Y CONTRATISTAS', //32
                'icon' => 'fas fa-address-book',
                'tooltip' => 'Ver información sobre padron de proveedores y contratista',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'LOS CONVENIOS DE COORDINACION', //33
                'icon' => 'fas fa-file-signature',
                'tooltip' => 'Ver información sobre los convenios de coordinacion',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'INVENTARIO DE BIENES MUEBLES E INMUEBLES', //34
                'icon' => 'fas fa-warehouse',
                'tooltip' => 'Ver información sobre inventario de bienes...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'RECOMENDACIONES EMITIDAS POR LOS ORGANISMOS PUBLICOS U ORGANISMO INTERNACIONALES', //35
                'icon' => 'fas fa-globe-americas',
                'tooltip' => 'Ver información sobre recomendaciones emitidas por los orgamismos...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'RESOLUCIONES Y LAUDOS', //36
                'icon' => 'fas fa-file-alt',
                'tooltip' => 'Ver información sobre resoluciones y laudos',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'MECANISMO DE PARTICIPACION CIUDADANA', //37
                'icon' => 'fas fa-compass-drafting',
                'tooltip' => 'Ver información sobre mecanismo de participacion ciudadana',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'PROGRAMAS(NO APLCIA)', //38
                'icon' => 'fas fa-folder-tree',
                'tooltip' => 'Ver información sobre programas (no aplica)',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'ACTAS, ACUERDOS Y RESOLUCIONES', //39
                'icon' => 'fas fa-address-book',
                'tooltip' => 'Ver información sobre actas,acuerdos y resoluciones',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'EVALUACIONES Y ENCUESTAS (NO APLICA)', //40
                'icon' => 'fas fa-square-poll-vertical',
                'tooltip' => 'Ver información sobre evaluaciones y encuentas...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'LOS ESTUDIOS FINANCIADOS CON RECURSOS PUBLICOS', //41
                'icon' => 'fas fa-file-invoice-dollar',
                'tooltip' => 'Ver información sobre los estudios financiados con...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'LISTADO DE JUBILADOS Y PENSIONADOS(NO APLICA)', //42
                'icon' => 'fas fa-clipboard-user',
                'tooltip' => 'Ver información sobre actas,acuerdos y resoluciones',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'INGRESOS RECIBIDOS', //43
                'icon' => 'fas fa-file-invoice-dollar',
                'tooltip' => 'Ver información sobre ingresos recibidos',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'DONACIONES HECHAS A TERCEROS EN DINERO O EN ESPECIE', //44
                'icon' => 'fas fa-file-invoice',
                'tooltip' => 'Ver información sobre donaciones hechas a terceros...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'CATALOGO DE DISPOSICION Y GUIA DE ARCHIVOS DOCUMENTAL', //45
                'icon' => 'fas fa-bars-progress',
                'tooltip' => 'Ver información sobre catalogo de disposicion y guia...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'CONJESOS CONSULTIVOS', //46
                'icon' => 'fas fa-building-circle-check',
                'tooltip' => 'Ver información sobre conjesos consultivo',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'LISTADO DE SOLUCIONES A LAS EMPRESAS CONCESIONARIAS DE TELECOMUNICACIONES(NO APLICA)', //47
                'icon' => 'fas fa-check-double',
                'tooltip' => 'Ver información sobre listado de soluciones a las empresas concesionarias...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'LAS ENAJENACIONES Y OTROS ACTOS JURIDICOS', //48
                'icon' => 'fas fa-box-archive',
                'tooltip' => 'Ver información sobre ingresos recibidos',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'LAS CUENTAS PUBLICAS ESTATALES Y MUNICIPALES', //49
                'icon' => 'fas fa-cash-register',
                'tooltip' => 'Ver información sobre las cuentas publicas estatales...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'EL ORIGEN DE LOS FONDOS AUXILIARES(NO APLICA)', //50
                'icon' => 'fas fa-box-archive',
                'tooltip' => 'Ver información sobre el origen de los fondos...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'RELACION DE SERVIDORES PUBLICOS COMISIONADOS', //51
                'icon' => 'fas fa-handshake',
                'tooltip' => 'Ver información sobre relaciones de servidores publicos...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'INDICES DE EXPEDIENTES CLASIFICADOS COMO RESERVADOS', //52
                'icon' => 'fas fa-check-to-slot',
                'tooltip' => 'Ver información sobre indices de expedientes clasificados...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'INFORMACION DESCLASIFICADA', //53
                'icon' => 'fas fa-file-zipper',
                'tooltip' => 'Ver información sobre informacion desclasificada',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'INFORMACION RELEVANTE', //54
                'icon' => 'fas fa-folder-open',
                'tooltip' => 'Ver información sobre informacion relevante',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ],
            [
                'title' => 'RUBROS APLICABLES A LA PAGINA DE INTERNET(ULTIMO PARRAFO)', //48
                'icon' => 'fas fa-globe',
                'tooltip' => 'Ver información sobre rubros aplicables a la pagina de...',
                'content' => '
            <div class="info-section">
                <p>El marco normativo aplicable al sujeto obligado, en el que debe incluise leyes, codigos,reglamentos,decretos de creacion, manuales administrativo, reglas de operacion criterios, politicas,entre otros.</p>
            </div>
        ',
                'links' => [
                    ['icon' => 'fa-file-pdf', 'text' => 'PDF', 'url' => '#', 'tooltip' => 'Descargar archivo en formato PDF'],
                    ['icon' => 'fa-book', 'text' => 'Reglamento', 'url' => '#', 'tooltip' => 'Ver el reglamento institucional'],
                    ['icon' => 'fa-gavel', 'text' => 'Leyes', 'url' => '#', 'tooltip' => 'Consultar leyes aplicables'],
                    ['icon' => 'fa-download', 'text' => 'Descargas', 'url' => '#', 'tooltip' => 'Acceder a documentos descargables']
                ]
            ]





        ];

        // Generar tarjetas dinámicamente
        foreach ($items as $item) {
            echo '<div class="card" onclick="toggleCard(event, this)" title="' . $item['tooltip'] . '">
        <div class="card-header">
            <i class="fa ' . $item['icon'] . ' card-icon" title="' . $item['tooltip'] . '"></i>
            <h3 title="' . $item['tooltip'] . '">' . $item['title'] . '</h3>
        </div>

        <!--  Botones inferiores -->
        <div class="card-links">';
            foreach ($item['links'] as $link) {
                echo '<a href="' . $link['url'] . '" class="link-button" title="' . $link['tooltip'] . '" onclick="event.stopPropagation()">
            <i class="fa ' . $link['icon'] . '"></i>
            <span>' . $link['text'] . '</span>
        </a>';
            }
            echo '</div>

        <!--  Contenido oculto -->
        <div class="card-details">
            <p class="accordion-description">Descripción breve: haz clic para expandir.</p>
            ' . $item['content'] . '
        </div>
    </div>';
        }
        ?>
    </div>
   
   <script>
        function toggleCard(event, card) {
            // Evita que al hacer clic en links se expanda la tarjeta
            if (event.target.closest('.link-button')) return;
            card.classList.toggle('expanded');
        }
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