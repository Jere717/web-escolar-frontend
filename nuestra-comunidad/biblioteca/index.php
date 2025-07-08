<?php

include '../../src/app/config/config_url.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

  <!-- # metadata -->

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Agrotecnica 717 + Biblioteca </title>

  <!-- Título de la página compartida -->
  <meta property="og:title" content="Biblioteca - Escuela 717">
  <!-- Descripción breve que aparecerá debajo del título -->
  <meta property="og:description" content="Conoce más sobre nosotros 🌾🚜">
  <!-- URL de la página compartida -->
  <meta property="og:url" content="<?php echo BASE_URL ?>/nuestra-comunidad/biblioteca/">
  <!-- URL de la imagen que aparecerá como vista previa -->
  <meta property="og:image" content="<?php echo BASE_URL ?>/public/images/logos/logo.webp">
  <!-- Tipo de contenido compartido -->
  <meta property="og:type" content="website">
  <!-- Nombre del sitio -->
  <meta property="og:site_name" content="Agrotecnica 717">
  <!-- Paleta de colores o ícono para dispositivos móviles -->
  <meta name="theme-color" content="#139b36">

  <!-- # fin metadata -->

  <link rel="stylesheet" href="../../public/Assets/CSS/estilos_comunes.css">
  <link rel="stylesheet" href="../estilos-nuestra-comunidad.css">
  <link rel="stylesheet" href="../../public/Assets/CSS/fonts.css" media="print" onload="this.media='all'">

  <script src="https://kit.fontawesome.com/978e807419.js" crossorigin="anonymous" defer></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

  <link rel="icon" href="<?php echo BASE_URL ?>/public/images/logos/logo.webp" type="image/webp">

</head>

<body class="grid-container">

  <!-- # header -->

  <header class="header">

    <div class="grupo-1">

      <div class="box-1">

        <div class="btn">

          <a href="<?php echo BASE_URL ?>/nuestra-comunidad/" class="btn-cont" rel="noreferrer noopener">

            <i class="bi bi-arrow-left-short"></i>

            <p>

              Atras

            </p>

          </a>

        </div>

      </div>

      <div class="box-2">

        <h1> Biblioteca </h1>

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

      <img src="../../public/Assets/Imagenes/logo.webp" alt="Logo De La Escuela">

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
        <a href="blog/" class="btn-cont">
          <i class="fa-solid fa-newspaper"></i>
          <p>Blog</p>
        </a>
      </div>
    </div>
  </nav>

  <!-- # fin navbar -->

  <!-- # main -->

  <article class="main">

    <!-- # fin menu-responsive -->

    <p>
      Es un espacio fundamental para la educación. La biblioteca de la escuela 717 cuenta con un amplio acervo bibliográfico que permite a los estudiantes acceder a información y conocimientos de diversas áreas.
    </p>

    <div class="div-main-2">
      <img 
      src="../../public/Assets/Imagenes/Biblioteca/Cartel_resultado-563x451.webp" 
      srcset="
        ../../public/Assets/Imagenes/Biblioteca/Cartel_resultado-563x451.webp 563w,
        ../../public/Assets/Imagenes/Biblioteca/Cartel_resultado-1277x1024.webp 1277w,
        ../../public/Assets/Imagenes/Biblioteca/Cartel_resultado-1796x1440.webp 1796w,
        ../../public/Assets/Imagenes/Biblioteca/Cartel_resultado-8650x6936.webp 8650w"
      sizes="(max-width: 600px) 563px, (max-width: 1000px) 1277px, (max-width: 1800px) 1796px, 8650px"
      loading="lazy"
      alt="Cartel del nombre de la biblioteca">
    </div>
    
    <p>
      La biblioteca también ofrece servicios de información y orientación a los estudiantes.
      Está abierta a toda la comunidad educativa, y ofrece los siguientes servicios:
    </p>

    <ul>
      <li>
        Préstamo de libros y otros materiales
      </li>
      <li>
        Computadora con acceso a internet
      </li>
      <li>
        Información bibliográfica
      </li>
      <li>
        Orientación en la búsqueda de información
      </li>
      <li>
        Organización de actividades culturales
      </li>
    </ul>
    

    <div class="div-main-2">
      <img 
      src="../../public/Assets/Imagenes/Biblioteca/Correo_resultado-288x206.webp" 
      srcset="
        ../../public/Assets/Imagenes/Biblioteca/Correo_resultado-288x206.webp 288w,
        ../../public/Assets/Imagenes/Biblioteca/Correo_resultado-640x458.webp 640w,
        ../../public/Assets/Imagenes/Biblioteca/Correo_resultado-1280x916.webp 1280w,
        ../../public/Assets/Imagenes/Biblioteca/Correo_resultado-7029x5031.webp 7029w"
      sizes="(max-width: 600px) 288px, (max-width: 1000px) 640px, (max-width: 1800px) 1280px, 7029px"
      loading="lazy"
      alt="Cartel con el correo de la escuela">
    </div>

    <!-- <h1>
      Blog de la biblioteca:
    </h1>

    <a class="a-centrado" href="<?php echo BASE_URL ?>/nuestra-comunidad/biblioteca/blog/">Blog en funcionamiento</a> <br> -->

    <p>
      Además, en los siguientes enlaces encontrarán fuentes valiosas de información y recursos externos que pueden ser de gran utilidad:
    </p>

    <ul>
      <li>
        <a href="https://www.bn.gov.ar/">Biblioteca Nacional de la República Argentina</a>
      </li>
      <li>
        <a href="https://www.argentina.gob.ar/inta">INTA - Instituto Nacional de Tecnología Agropecuaria</a>
      </li>
      <li>
        <a href="https://www.argentina.gob.ar/tags/inet">INET - Instituto Nacional de Educación Tecnológica</a>
      </li>
    </ul>

    
  </article>

  <!-- # fin main -->

  <!-- # footer -->

  <?php include_once '../../includes/footer/footer.php' ?>

  <!-- # fin footer -->

</body>

</html>