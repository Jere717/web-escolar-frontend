<?php

include '../src/app/config/config_url.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

  <!-- # metadata -->

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Agrotecnica 717 + Nuestra Escuela </title>

  <!-- Título de la página compartida -->
  <meta property="og:title" content="Nuestra Escuela - Escuela 717">
  <!-- Descripción breve que aparecerá debajo del título -->
  <meta property="og:description" content="Conoce más sobre nosotros 🌾🚜">
  <!-- URL de la página compartida -->
  <meta property="og:url" content="<?php echo BASE_URL ?>/nuestra-escuela/">
  <!-- URL de la imagen que aparecerá como vista previa -->
  <meta property="og:image" content="<?php echo BASE_URL ?>/public/images/logos/logo.webp">
  <!-- Tipo de contenido compartido -->
  <meta property="og:type" content="website">
  <!-- Nombre del sitio -->
  <meta property="og:site_name" content="Agrotecnica 717">
  <!-- Paleta de colores o ícono para dispositivos móviles -->
  <meta name="theme-color" content="#139b36">

  <!-- # fin metadata -->

  <link rel="stylesheet" href="../public/Assets/CSS/estilos_comunes.css">
  <link rel="stylesheet" href="estilos-nuestra-escuela.css">
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

        <h1> Nuestra Escuela </h1>

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
        <a href="acerca-de-nuestra-escuela/" class="btn-cont">
          <i class="fa-solid fa-info-circle"></i>
          <p>Acerca de nuestra Escuela</p>
        </a>
      </div>

      <div class="btn"> <!-- Esta clase ya está incluida -->
        <a href="historia/" class="btn-cont">
          <i class="fa-solid fa-history"></i>
          <p>Historia</p>
        </a>
      </div>

      <div class="btn">
        <a href="organigrama/" class="btn-cont">
          <i class="fa-solid fa-sitemap"></i>
          <p>Organigrama</p>
        </a>
      </div>

    </div>
  </nav>

  <!-- # fin navbar -->

  <!-- # main -->

  <article class="main">
    
    <p>
      Durante los años que están en la escuela, van a ir cursando los distintos espacios curriculares que corresponden al <a class="a-referencia" href="<?php echo BASE_URL ?>/proyecto-educativo/#:~:text=ESTRUCTURA%20CURRICULAR">Diseño Curricular</a> de Escuela Agrotecnica de la Pcia. del Chubut.
    </p>

    <div class="div-main-2">
      <img 
        src="../public/Assets/Imagenes/en_exteriores/imagen%20en%20la%20escuela%20(22).webp" 
        srcset="
          ../public/Assets/Imagenes/en_exteriores/imagen%20en%20la%20escuela%20(22)-478x320.webp 478w,
          ../public/Assets/Imagenes/en_exteriores/imagen%20en%20la%20escuela%20(22)-797x533.webp 797w,
          ../public/Assets/Imagenes/en_exteriores/imagen%20en%20la%20escuela%20(22).webp 1200w"
        sizes="(max-width: 600px) 478px, (max-width: 1200px) 797px, 1200px"
        alt="Una foto de la escuela desde afuera">
    </div>

    <p>
      En el último año, los estudiantes realizan prácticas profesionalizantes en chacras y establecimientos productivos afines a la especialidad, donde ponen de manifiesto su aprendizaje, habilidades y experiencia adquiridos durante su cursada.
    </p>

    <div class="div-main-2">
      <img 
        src="../public/Assets/Imagenes/en_exteriores/imagen%20en%20la%20escuela%20(23).webp" 
        srcset="
          ../public/Assets/Imagenes/en_exteriores/imagen%20en%20la%20escuela%20(23)-448x320.webp 448w,
          ../public/Assets/Imagenes/en_exteriores/imagen%20en%20la%20escuela%20(23)-746x533.webp 746w,
          ../public/Assets/Imagenes/en_exteriores/imagen%20en%20la%20escuela%20(23).webp 1200w"
        sizes="(max-width: 600px) 448px, (max-width: 1200px) 746px, 1200px"
        alt="Cultivos">
    </div>
  </article>

  <!-- # fin main -->

  <!-- # footer -->

  <?php include_once '../includes/footer/footer.php' ?>

  <!-- # fin footer -->

</body>

</html>