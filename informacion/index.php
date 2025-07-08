<?php

include '../src/app/config/config_url.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

  <!-- # metadata -->

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Agrotecnica 717 + Informacion </title>

  <!-- Título de la página compartida -->
  <meta property="og:title" content="Informacion - Escuela 717">
  <!-- Descripción breve que aparecerá debajo del título -->
  <meta property="og:description" content="Conoce más sobre nosotros 🌾🚜">
  <!-- URL de la página compartida -->
  <meta property="og:url" content="<?php echo BASE_URL ?>/informacion/">
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
  <link rel="stylesheet" href="estilos-informacion.css">
  <link rel="stylesheet" href="../public/Assets/CSS/fonts.css" media="print" onload="this.media='all'">

  <script src="https://kit.fontawesome.com/978e807419.js" crossorigin="anonymous" defer></script>

  <link rel="icon" href="../public/Assets/Imagenes/logo.webp" type="image/webp">

</head>

<body class="grid-container">

  <!-- # header -->

  <header class="header">

    <div class="grupo-1">

      <div class="box-1">

        

      </div>

      <div class="box-2">

        <h1> Informacion </h1>

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
        <a href="documentacion/" class="btn-cont">
          <i class="fa-solid fa-users"></i>
          <p>Documentacion</p>
        </a>
      </div>

      <div class="btn">
        <a href="redes-sociales/" class="btn-cont">
          <i class="fa-solid fa-share-alt"></i>
          <p>Redes Sociales</p>
        </a>
      </div>

      <div class="btn">
        <a href="contacto/" class="btn-cont">
          <i class="fa-solid fa-envelope"></i>
          <p>Contacto</p>
        </a>
      </div>

      <div class="btn">
        <a href="novedades/blog/" class="btn-cont">
          <i class="fa-solid fa-newspaper"></i>
          <p>Blog</p>
        </a>
      </div>
    </div>
  </nav>

  <!-- # fin navbar -->

  <!-- # main -->

  <article class="main">

    
  </article>

  <!-- # fin main -->

  <!-- # footer -->

  <?php include_once '../includes/footer/footer.php' ?>

  <!-- # fin footer -->

</body>

</html>