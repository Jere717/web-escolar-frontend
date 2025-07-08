<?php

include '../../../src/app/config/config_url.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

  <!-- # metadata -->

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Agrotecnica 717 + Acuerdo De Convivencia </title>

  <!-- Título de la página compartida -->
  <meta property="og:title" content="Acuerdo De Convivencia - Escuela 717">
  <!-- Descripción breve que aparecerá debajo del título -->
  <meta property="og:description" content="Conoce más sobre nosotros 🌾🚜">
  <!-- URL de la página compartida -->
  <meta property="og:url" content="<?php echo BASE_URL ?>/informacion/documentacion/acuerdo-de-convivencia/">
  <!-- URL de la imagen que aparecerá como vista previa -->
  <meta property="og:image" content="<?php echo BASE_URL ?>/public/images/logos/logo.webp">
  <!-- Tipo de contenido compartido -->
  <meta property="og:type" content="website">
  <!-- Nombre del sitio -->
  <meta property="og:site_name" content="Agrotecnica 717">
  <!-- Paleta de colores o ícono para dispositivos móviles -->
  <meta name="theme-color" content="#139b36">

  <!-- # fin metadata -->

  <link rel="stylesheet" href="../../../public/Assets/CSS/estilos_comunes.css">
  <link rel="stylesheet" href="../../estilos-informacion.css">
  <link rel="stylesheet" href="../../../public/Assets/CSS/fonts.css" media="print" onload="this.media='all'">

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

          <a href="<?php echo BASE_URL ?>/informacion/documentacion/" class="btn-cont" rel="noreferrer noopener">

            <i class="bi bi-arrow-left-short"></i>

            <p>

              Atras

            </p>

          </a>

        </div>

      </div>

      <div class="box-2">

        <h1> Acuerdo De Convivencia </h1>

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

      <img src="../../../public/Assets/Imagenes/logo.webp" alt="Logo De La Escuela">

    </div>

  </header>

  <!-- # fin header -->

  <!-- # navbar -->

  <nav class="navbar navbar-color-gradiente">

    <div class="grupo-1">

      <label for="btn-menu" class="icon-menu"></label>

    </div>

    

  </nav>

  <!-- # fin navbar -->

  <!-- # main -->

  <article class="main">


    

    

    <h1>A.E.C</h1>

    <p>Puedes acceder al acuerdo de convivencia mediante el siguiente link:</p>

    <a class="a-centrado" href="https://drive.google.com/file/d/1RrYR7Er8OZufDO84n3991xOJENxcIrge/view?usp=sharing" target="_blank" rel="noreferrer noopener">
      A.E.C (En Drive)
    </a>

    <h1>
      Vista previa
    </h1>
    <div class="iframe-container">
      <iframe src="https://drive.google.com/file/d/1RrYR7Er8OZufDO84n3991xOJENxcIrge/preview"></iframe>
    </div>

    
  </article>

  <!-- # fin main -->

  <!-- # footer -->

  <?php include_once '../../../includes/footer/footer.php' ?>

  <!-- # fin footer -->

</body>

</html>