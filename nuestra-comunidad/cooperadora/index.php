<?php

include('../../src/app/config/config.php');
// echo isset($pdo) ? 'PDO definido correctamente' : 'PDO no está definido';

?>

<?php

include '../../src/app/config/config_url.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

  <!-- # metadata -->

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Agrotecnica 717 + Cooperadora </title>

  <!-- Título de la página compartida -->
  <meta property="og:title" content="Cooperadora - Escuela 717">
  <!-- Descripción breve que aparecerá debajo del título -->
  <meta property="og:description" content="Conoce más sobre nosotros 🌾🚜">
  <!-- URL de la página compartida -->
  <meta property="og:url" content="<?php echo BASE_URL ?>/nuestra-comunidad/cooperadora/">
  <!-- URL de la imagen que aparecerá como vista previa -->
  <meta property="og:image" content="<?php echo BASE_URL ?>/public/images/logos/logo-cooperadora.jpg">
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

  <link rel="stylesheet" href="blog/cooperadora.css">

  <script src="https://kit.fontawesome.com/978e807419.js" crossorigin="anonymous" defer></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

  <link rel="icon" href="../../public/Assets/Imagenes/logo-cooperadora.jpg" type="image/jpg">

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

        <h1> Cooperadora </h1>

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

      <img src="../../public/Assets/Imagenes/logo-cooperadora.jpg" alt="Logo De La Cooperadora">

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


    

    
      <h1>La cooperadora escolar</h1>
      <p>
        Es una organización sin fines de lucro que brinda apoyo a la escuela. Realiza actividades de recaudación de fondos para solventar gastos que no estan en el presupuesto escolar, como la compra de materiales, la organización de actividades extracurriculares, y el mantenimiento de la escuela. La cooperadora escolar es una organización comprometida con el desarrollo de la escuela.</p>
      <p>
      La misma está conformada por padres, madres, docentes, y otros miembros de la comunidad.
      </p>

      <div class="div-main-2">
        <img 
        src="../../public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/Cooperadora_resultado-288x216.webp" 
        srcset="
          ../../public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/Cooperadora_resultado-288x216.webp 288w,
          ../../public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/Cooperadora_resultado-640x480.webp 640w,
          ../../public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/Cooperadora_resultado-1280x960.webp 1280w,
          ../../public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/Cooperadora_resultado-2048x1536.webp 2048w"
        sizes="(max-width: 600px) 288px, (max-width: 1000px) 640px, (max-width: 1800px) 1280px, 2048px"
        loading="lazy"
        alt="La cooperadora en la expoagro 2023">
      </div>

      <p>Realiza diversas actividades de recaudación de fondos, como rifas, ventas de comida, y eventos culturales.</p> <p>Los fondos recaudados por la cooperadora escolar se utilizan para apoyar las siguientes actividades:</p>
    

    <ul>
      <li>Compra de materiales educativos</li>
      <li>Organización de actividades extracurriculares</li>
      <li>Mantenimiento de la escuela</li>
    </ul>

    <div>
      <h1>
        Facebook de la cooperadora:
      </h1>

      <a class="a-red-social" href="https://www.facebook.com/coope717">
        <i class="bi bi-facebook"></i>Cooperadora
      </a>
    </div>

    
  </article>

  <!-- # fin main -->

  <!-- # footer -->

  <?php include_once '../../includes/footer/footer.php' ?>

  <!-- # fin footer -->

</body>

</html>