<?php

include '../../src/app/config/config_url.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

  <!-- # metadata -->

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Agrotecnica 717 + E.S.I </title>

  <!-- Título de la página compartida -->
  <meta property="og:title" content="E.S.I - Escuela 717">
  <!-- Descripción breve que aparecerá debajo del título -->
  <meta property="og:description" content="Conoce más sobre nosotros 🌾🚜">
  <!-- URL de la página compartida -->
  <meta property="og:url" content="<?php echo BASE_URL ?>/proyecto-educativo/E.S.I/">
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

        <h1> E.S.I </h1>

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

    <!-- # menu-responsive -->

    <!--  -->

    <!-- # fin menu-responsive -->


    

    
    <h1>Fundamentación📚</h1>
    <p>
      En el año 2006, con la sanción de la Ley Nacional N° 26.150 sobre Educación Sexual Integral (ESI), se establece que niñas, niños y adolescentes (NNA) tienen el derecho de recibir educación sexual integral en los establecimientos educativos públicos, garantizando así, la universalidad de su implementación.
    </p>
    <p>
      Asimismo, en su art. 3, la ley incorpora la perspectiva de la integralidad al entender a la sexualidad como una dimensión central y constitutiva de la subjetividad NNA en torno a su bienestar general, especificando que la misma está conformada por aspectos: biológicos, anatómicos, psicológicos, afectivos, emocionales, socioculturales, éticos, jurídicos, políticos, económicos, entre otros. De esta manera, al comprender su rol central en la vida de NNA y su multidimensionalidad, el proceso de su aprendizaje no puede reducirse a modelos de enseñanza biologicistas y/o moralizantes. Por el contrario, requiere instancias de comprensión y reflexión desde una mirada interdisciplinaria, con perspectiva de género y derechos humanos. 
    <p>
      Como consecuencia de ello, todos los ámbitos de interacción humana cobran relevancia al ser espacios de construcción de la subjetividad de las infancias y adolescencias. Es así, que el mundo del deporte como hecho cultural y social, merece ser analizado y debatido. Ello, considerando que el mismo está significativamente atravesado por desigualdades de género, concepciones binaristas, exigencias, prejuicios, mandatos, discriminación, entre otros aspectos, que han sido reproducidos y naturalizados por las sociedades de manera histórica y estructural.
    </p>
    
    
    <h1>
      Actividades 📢
    </h1>
    <br>
    <p>
      En este sentido, se realizaron talleres sobre ESI con el fin de:
    </p>
    <ul>
      <li> Promover desarrollo de la conciencia corporal y el cuidado personal, y la aceptación y valoración de la diversidad.</li>
      <li>Debatir acerca de los modelos corporales presentes en los medios de comunicación, en la publicidad y en el deporte espectáculo.</li>
      <li>Implementar la perspectiva de género en el deporte, con atención a la igualdad en la realización de juegos y deportes.</li>
      <li>Impulsar actitudes de respeto, responsabilidad y solidaridad que posibiliten la resolución de conflictos cotidianos y la convivencia grupal.</li>
    </ul>



    
  </article>

  <!-- # fin main -->

  <!-- # footer -->

  <?php include_once '../../includes/footer/footer.php' ?>

  <!-- # fin footer -->

</body>

</html>