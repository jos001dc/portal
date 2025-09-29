<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tabla con Botón de Descarga</title>
  <style>
    :root {
      --background: #275efe;
      --rectangle: #184fee;
      --success: #4c6ef5;
      --text: #fff;
      --arrow: #fff;
      --checkmark: #fff;
      --shadow: rgba(10, 22, 50, .24);
    }

    body {
      margin: 0;
      padding: 2rem;
      font-family: 'Roboto', sans-serif;
      background: #E4ECFA;
    }

    /* 🎯 TABLA */
    .table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 1rem;
      font-size: 14px;
      background: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .table th,
    .table td {
      padding: 0.75rem;
      vertical-align: middle;
      border: 1px solid #dee2e6;
      text-align: center;
    }

    .table td {
      text-align: justify;
    }

    .table thead th {
      background: #f8f9fa;
      color: #000;
      font-weight: 600;
      border-bottom: 2px solid #dee2e6;
    }

    .table tbody tr:nth-child(even) {
      background: #f1f1f1;
    }

    /* 🎯 BOTÓN */
    .btn {
      display: flex;
      overflow: hidden;
      text-decoration: none;
      background: var(--background);
      border-radius: 8px;
      box-shadow: 0 2px 8px -1px var(--shadow);
      transition: transform .2s ease, box-shadow .2s ease;
      width: 160px; /* 🔹 tamaño más compacto */
    }

    .btn:active {
      transform: scale(.95);
      box-shadow: 0 1px 4px -1px var(--shadow);
    }

    .btn ul {
      margin: 0;
      padding: 12px 30px; /* 🔹 un poco más pequeño */
      list-style: none;
      text-align: center;
      position: relative;
      font-size: 14px;
      font-weight: 500;
      line-height: 22px;
      color: var(--text);
    }

    .btn ul li:not(:first-child) {
      top: 12px;
      left: 0;
      right: 0;
      position: absolute;
    }

    .btn ul li:nth-child(2) { top: 60px; }
    .btn ul li:nth-child(3) { top: 110px; }

    .btn > div {
      position: relative;
      width: 45px;
      height: 45px;
      background: var(--rectangle);
    }

    .btn > div:before {
      content: '';
      position: absolute;
      width: 2px;
      height: 14px;
      top: 50%;
      left: 50%;
      margin: -7px 0 0 -1px;
      background: var(--arrow);
    }

    .btn > div:after {
      content: '';
      position: absolute;
      width: 45px;
      height: 45px;
      top: 0;
      left: 0;
      transform-origin: 50% 0;
      border-radius: 0 0 80% 80%;
      background: var(--success);
      transform: scaleY(0);
    }

    .btn svg {
      position: absolute;
      width: 18px;
      height: 18px;
      left: 50%;
      top: 50%;
      margin: -9px 0 0 -9px;
    }

    .btn svg polyline {
      fill: none;
      stroke-width: 2px;
      stroke: var(--checkmark);
      stroke-linecap: round;
      stroke-linejoin: round;
      stroke-dasharray: 26px;
      stroke-dashoffset: 26px;
      opacity: 0;
      transition: stroke-dashoffset 0.5s ease, opacity 0.3s ease;
    }

    /* Animaciones */
    .btn.loading ul {
      animation: text 2s linear forwards 0.13s;
    }

    .btn.loading > div:before {
      animation: line 2s linear forwards 0.13s;
    }

    .btn.loading > div:after {
      animation: background 2s linear forwards 0.13s;
    }

    .btn.done svg polyline {
      stroke-dashoffset: 0;
      opacity: 1;
    }

    .btn.done > div:before {
      display: none;
    }

    @keyframes text {
      10%, 85% { transform: translateY(-100%); }
      95%, 100% { transform: translateY(-200%); }
    }

    @keyframes line {
      5%, 10% { transform: translateY(-25px); }
      40% { transform: translateY(-15px); }
      65% { transform: translateY(0); }
      75%, 100% { transform: translateY(25px); }
    }

    @keyframes background {
      10% { transform: scaleY(0); }
      40% { transform: scaleY(.15); }
      65% { transform: scaleY(.5); border-radius: 0 0 50% 50%; }
      75%, 100% { transform: scaleY(1); border-radius: 0; }
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.btn').forEach(button => {
        button.addEventListener('click', (e) => {
          e.preventDefault();

          if (button.classList.contains('loading')) return;

          button.classList.add('loading');

          setTimeout(() => {
            button.classList.remove('loading');
            button.classList.add('done');
          }, 2500);
        });
      });
    });
  </script>
</head>
<body>
  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Descarga</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Archivo 1</td>
        <td>Documento en PDF con información importante.</td>
        <td>
          <a href="#" class="btn">
            <ul>
              <li>Download</li>
              <li>Downloading</li>
              <li>Open File</li>
            </ul>
            <div>
              <svg viewBox="0 0 24 24">
                <polyline points="4 12 10 18 20 6"></polyline>
              </svg>
            </div>
          </a>
        </td>
      </tr>
      <tr>
        <td>Archivo 2</td>
        <td>Reporte en Excel para descargar.</td>
        <td>
          <a href="#" class="btn">
            <ul>
              <li>Download</li>
              <li>Downloading</li>
              <li>Open File</li>
            </ul>
            <div>
              <svg viewBox="0 0 24 24">
                <polyline points="4 12 10 18 20 6"></polyline>
              </svg>
            </div>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>
