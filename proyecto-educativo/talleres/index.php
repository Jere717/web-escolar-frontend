<?php

include '../../src/app/config/config_url.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

  <!-- # metadata -->

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Agrotecnica 717 + Talleres </title>

  <!-- Título de la página compartida -->
  <meta property="og:title" content="Talleres - Escuela 717">
  <!-- Descripción breve que aparecerá debajo del título -->
  <meta property="og:description" content="Conoce más sobre nosotros 🌾🚜">
  <!-- URL de la página compartida -->
  <meta property="og:url" content="<?php echo BASE_URL ?>/proyecto-educativo/talleres/">
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
  <link rel="stylesheet" href="../estilos-proyecto-educativo.css">
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

          <a href="<?php echo BASE_URL ?>/proyecto-educativo/" class="btn-cont" rel="noreferrer noopener">

            <i class="bi bi-arrow-left-short"></i>

            <p>

              Atras

            </p>

          </a>

        </div>

      </div>

      <div class="box-2">

        <h1> Talleres </h1>

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

  <nav class="navbar navbar-color-gradiente">

    <div class="grupo-1">

      <label for="btn-menu" class="icon-menu"></label>

    </div>

    

  </nav>

  <!-- # fin navbar -->

  <!-- # main -->

  <article class="main">


    

    
    <h1>Taller de radio</h1>

    <p>En el vibrante escenario de nuestros talleres, donde la creatividad y el aprendizaje se entrelazan, nos embarcamos en una empresa fascinante: la reconstrucción histórica de nuestra escuela. En el taller de radio, un espacio dinámico donde las ondas sonoras se convierten en narradores de historias, estamos llevando a cabo un proyecto único y evocador.</p>

    <p>Este taller de radio no solo es un rincón donde se forjan voces y se transmiten ideas, sino también un lugar donde la memoria de nuestra escuela cobra vida. En colaboración con el espacio de Integración de Saberes, estamos sumergiéndonos en un viaje en el tiempo, tejiendo la historia de nuestra institución a través de fotografías, entrevistas, textos y testimonios de aquellos que han sido protagonistas desde sus comienzos.</p>

    <div class="div-main">
      <img 
      src="../../public/Assets/Imagenes/fotos%20elegidas/IMG_20160422_094840851_HDR_resultado-383x215.webp" 
      srcset="
        ../../public/Assets/Imagenes/fotos%20elegidas/IMG_20160422_094840851_HDR_resultado-383x215.webp 383w,
        ../../public/Assets/Imagenes/fotos%20elegidas/IMG_20160422_094840851_HDR_resultado-640x360.webp 640w,
        ../../public/Assets/Imagenes/fotos%20elegidas/IMG_20160422_094840851_HDR_resultado-1280x719.webp 1280w,
        ../../public/Assets/Imagenes/fotos%20elegidas/IMG_20160422_094840851_HDR_resultado-2592x1456.webp 2592w"
      sizes="(max-width: 600px) 383px, (max-width: 1000px) 640px, (max-width: 1800px) 1280px, 2592px"
      loading="lazy"
      alt="Dos estudiantes transmitiendo por radio">
    </div>

    <p>Imagina las ondas sonoras convertidas en hilos que entrelazan momentos, capturando la esencia de cada época, desde los primeros cimientos hasta los logros más recientes. Las entrevistas se convierten en cápsulas del tiempo, inmortalizando las experiencias y visiones de aquellos que han contribuido al desarrollo de nuestra escuela agrícola.</p>

    <p>Las fotografías, testigos silentes de épocas pasadas, son cuidadosamente seleccionadas y presentadas con un toque contemporáneo, dando vida a las caras y paisajes que han sido parte integral de nuestra historia. Los textos, meticulosamente redactados, actúan como puentes entre generaciones, conectando el pasado con el presente de una manera que solo el arte de la radio puede lograr.</p>

    <h1>Taller de Computacion</h1>

    <p>
      En el mismo se busca educar sobre el uso de las computadoras, en especial en el uso de programas como Office (Word, Excel, PowerPoint entre otros).
    </p>

    <p>
      Combinar el campo con la tecnologia es bastante importante en la actualidad y en este espacio se busca hacerlo.
    </p>



    
  </article>

  <!-- # fin main -->

  <!-- # footer -->

  <?php include_once '../../includes/footer/footer.php' ?>

  <!-- # fin footer -->

</body>

</html>