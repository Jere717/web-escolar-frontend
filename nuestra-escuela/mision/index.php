<?php

include '../../src/app/config/config_url.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

  <!-- # metadata -->

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Agrotecnica 717 + Mision </title>

  <!-- Título de la página compartida -->
  <meta property="og:title" content="Mision - Escuela 717">
  <!-- Descripción breve que aparecerá debajo del título -->
  <meta property="og:description" content="Conoce más sobre nosotros 🌾🚜">
  <!-- URL de la página compartida -->
  <meta property="og:url" content="<?php echo BASE_URL ?>">
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
  <link rel="stylesheet" href="../estilos-nuestra-escuela.css">
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

          <a href="<?php echo BASE_URL ?>/nuestra-escuela/" class="btn-cont" rel="noreferrer noopener">

            <i class="bi bi-arrow-left-short"></i>

            <p>

              Atras

            </p>

          </a>

        </div>

      </div>

      <div class="box-2">

        <h1> Mision </h1>

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

      <label for="btn-menu" class="icon-menu"></label>

    </div>

    

  </nav>

  <!-- # fin navbar -->

  <!-- # main -->

  <article class="main">


    

    <p>La escuela Agrotecnica 717 ocupa un lugar y goza de un prestigio legítimamente ganado en la comunidad educativa de la Comarca Andina desde su fundación. Esto se puede destacar a través del desempeño de sus egresados en los distintos ámbitos de la sociedad.</p>
    <p>Sabemos y creemos como parte de una comunidad educativa que debemos estar en consonancia al continuo avance de la tecnología y la globalización de la economía en el mundo, el profundo cambio del sistema educativo por las sucesivas leyes:</p>

    <div class="div-main-2">
      <img src="../../public/Assets/Imagenes/fotos elegidas/EXPO AGRO (8).jpeg" alt="Exposicion de abejas en la expoagro 2023">
    </div>
      
    <p>- Ley federal de Educación, Ley Nacional de Educación y Ley de Educación Técnica- fundamentalmente en las modalidades tecnológicas, son factores que obligan a la adecuación de la educación técnica.</p>
    <p>La escuela siempre busca acompañar a sus estudiantes en el proceso de cambio teniendo en cuenta la complejidad de variables que intervienen, pero el mismo es gradual, observando el ayer como ejemplo de la predisposición que siempre se ha tenido a la renovación y superación, el hoy como un consensuar y coordinar acciones que permitan avanzar y el mañana como generador de alternativas y/o posibilidades.</p>
    <p>Hoy enmarcados en la Ley No 26.206 Nacional de Educación y las normativas provinciales, han sido muy importantes para introducir mejoras a las escuelas técnicas en un proceso de resurgimiento, reafirmación de su esencia y posibilidades de adquisición de equipamiento a partir del financiamiento a través del INET.</p>
    <p>Es por eso que fijamos y pensamos a través del Proyecto Educativo Institucional la posibilidad de modificar enfoques, contenidos, organización del tiempo y del espacio de trabajo, para lograr como objetivo el equipamiento actualizado lo cual permite un acercamiento importante a las tecnologías que actualmente son utilizadas en el medio laboral.</p>

    
  </article>

  <!-- # fin main -->

  <!-- # footer -->

  <?php include_once '../../includes/footer/footer.php' ?>

  <!-- # fin footer -->

</body>

</html>