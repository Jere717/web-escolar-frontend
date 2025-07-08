<?php

include '../src/app/config/config_url.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

  <!-- # metadata -->

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Agrotecnica 717 + Nuestra Comunidad </title>

  <!-- Título de la página compartida -->
  <meta property="og:title" content="Nuestra Comunidad - Escuela 717">
  <!-- Descripción breve que aparecerá debajo del título -->
  <meta property="og:description" content="Conoce más sobre nosotros 🌾🚜">
  <!-- URL de la página compartida -->
  <meta property="og:url" content="<?php echo BASE_URL ?>/nuestra-comunidad/">
  <!-- URL de la imagen que aparecerá como vista previa -->
  <meta property="og:image" content="<?php echo BASE_URL ?>/public/images/logos/logo-cooperadora.jpg">
  <!-- Tipo de contenido compartido -->
  <meta property="og:type" content="website">
  <!-- Nombre del sitio -->
  <meta property="og:site_name" content="Agrotecnica 717">
  <!-- Paleta de colores o ícono para dispositivos móviles -->
  <meta name="theme-color" content="#139b36">

  <!-- # fin metadata -->

  <link rel="stylesheet" href="../public/Assets/CSS/estilos_comunes.css">
  <link rel="stylesheet" href="estilos-nuestra-comunidad.css">
  <link rel="stylesheet" href="../public/Assets/CSS/fonts.css" media="print" onload="this.media='all'">


  <script src="https://kit.fontawesome.com/978e807419.js" crossorigin="anonymous" defer></script>

  <link rel="icon" href="<?php echo BASE_URL ?>/public/images/logos/logo.webp" type="image/webp">

</head>

<body class="grid-container">

  <!-- # header -->

  <header class="header">

    <div class="grupo-1">

      <div class="box-1">

        

      </div>

      <div class="box-2">

        <h1> Nuestra Comunidad </h1>

      </div>

      <div class="box-3">

        <div class="btn">

          <a href="<?php echo BASE_URL ?>/" class="btn-cont">

            <i class="fa-solid fa-house"></i>

            <p>

              Home

            </p>

          </a>

        </div>

      </div>

    </div>

    <div class="grupo-2">

      <img src="../public/Assets/Imagenes/logo.webp" alt="Logo De La Escuela">

    </div>

  </header>

  <!-- # fin header -->

  <!-- # navbar -->
  
  <nav class="navbar navbar-color-verde">
    <div class="grupo-1">
            <button id="menu-toggle">
        <i id="menu-icono-animacion" class="fa-solid fa-bars"></i>
      </button>
    </div>

    <div id="menu-content" class="grupo-2">
      <div class="btn">
        <a href="docentes/" class="btn-cont">
          <i class="fa-solid fa-chalkboard-teacher"></i>
          <p>Docentes</p>
        </a>
      </div>

      <div class="btn">
        <a href="centro-de-estudiantes/" class="btn-cont">
          <i class="fa-solid fa-user-graduate"></i>
          <p>Centro De Estudiantes</p>
        </a>
      </div>

      <div class="btn">
        <a href="biblioteca/" class="btn-cont">
          <i class="fa-solid fa-book"></i>
          <p>Biblioteca</p>
        </a>
      </div>

      <div class="btn">
        <a href="cooperadora/" class="btn-cont">
          <i class="fa-solid fa-hand-holding-heart"></i>
          <p>Cooperadora</p>
        </a>
      </div>

    </div>
  </nav>
  
  <!-- # fin navbar -->

  <!-- # main -->

  <article class="main">


    

      <p>
        La escuela Agrotecnica 717 de Lago Puelo es una institución educativa pública que brinda educación secundaria en el área de producción agropecuaria y forestal.
      </p>
      <p>
        La comunidad educativa de la escuela Agrotecnica 717 es el conjunto de personas que forman parte de nuestra institución educativa. Esta comunidad está conformada por estudiantes, docentes, familias, directivos, administrativos, y otros miembros de la comunidad.
      </p>

      <div class="div-main-2">
        <img 
        src="../public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/Chicos-4_resultado-338x243.webp" 
        srcset="
          ../public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/Chicos-4_resultado-338x243.webp 338w,
          ../public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/Chicos-4_resultado-626x450.webp 626w,
          ../public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/Chicos-4_resultado-946x680.webp 946w,
          ../public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/Chicos-4_resultado-2048x1472.webp 2048w"
        sizes="(max-width: 600px) 338px, (max-width: 1000px) 626px, (max-width: 1800px) 946px, 2048px"
        loading="lazy"
        alt="Chicos en la Expoagro">
      </div>

      <p>
        La comunidad educativa tiene un papel fundamental en el proceso educativo. Todos tienen la responsabilidad de trabajar juntos para crear un entorno educativo que sea positivo y propicio para el aprendizaje.
      </p>

      <ul>
        <li>Los estudiantes son los protagonistas del proceso educativo. Ellos son los que aprenden y se desarrollan.</li>
        <li>Los docentes son los encargados de transmitir los saberes y valores a los estudiantes.</li>
        <li>Las familias son los responsables de apoyar el aprendizaje de los y las estudiantes.</li>
        <li>Los directivos son los responsables de la gestión de la institución educativa.</li>
        <li>Los administrativos son los encargados de brindar apoyo administrativo a la institución educativa.</li>
        <li>Otros miembros de la comunidad, como la cooperadora, pueden contribuir al proceso educativo de diversas maneras.</li>
      </ul>

      <p>
      La colaboración entre todos los miembros de la comunidad educativa es fundamental para el éxito de la institución educativa.</p>

    
  </article>

  <!-- # fin main -->

  <!-- # footer -->

  <?php include_once '../includes/footer/footer.php' ?>

  <!-- # fin footer -->

</body>

</html>