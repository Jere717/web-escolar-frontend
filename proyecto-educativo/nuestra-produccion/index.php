<?php

include '../../src/app/config/config_url.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

  <!-- # metadata -->

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Agrotecnica 717 + Nuestra Produccion </title>

  <!-- Título de la página compartida -->
  <meta property="og:title" content="Nuestra Produccion - Escuela 717">
  <!-- Descripción breve que aparecerá debajo del título -->
  <meta property="og:description" content="Conoce más sobre nosotros 🌾🚜">
  <!-- URL de la página compartida -->
  <meta property="og:url" content="<?php echo BASE_URL ?>/proyecto-educativo/nuestra-produccion/">
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

        <h1> Nuestra Produccion </h1>

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


    

    <p>
      En nuestra escuela agrícola, "Nuestra Producción" representa el compromiso que tenemos con la tierra y los animales que forman parte de nuestra comunidad. En cada planta que cultivamos y en cada animal que cuidamos, buscamos promover la sostenibilidad y el respeto por la naturaleza.
    </p>

    <div class="div-main-2">
      <img 
      src="../../public/Assets/Imagenes/Afuera/Invernadero/invernadero-7_resultado-614x415.webp" 
      srcset="
        ../../public/Assets/Imagenes/Afuera/Invernadero/invernadero-7_resultado-614x415.webp 614w,
        ../../public/Assets/Imagenes/Afuera/Invernadero/invernadero-7_resultado-1258x850.webp 1258w,
        ../../public/Assets/Imagenes/Afuera/Invernadero/invernadero-7_resultado-2020x1365.webp 2020w,
        ../../public/Assets/Imagenes/Afuera/Invernadero/invernadero-7_resultado-2925x1977.webp 2925w"
      sizes="(max-width: 600px) 614px, (max-width: 1000px) 1258px, (max-width: 1800px) 2020px, 2925px"
      loading="lazy"
      alt="Cultivo lechuga dentro de un invernadero">
    </div>

    <p>
      Desde las primeras horas de la mañana hasta el atardecer, nuestras actividades incluyen el cultivo de vegetales en invernaderos y el cuidado de nuestros animales. Las cabras, las ovejas y las gallinas, junto a plantas aromáticas como la lavanda y el tomillo, dan vida a un entorno productivo y respetuoso con el medio ambiente.
    </p>

    <div class="div-main-2">
      <img 
      src="../../public/Assets/Imagenes/fotos%20elegidas/20170412_093131_resultado-383x287.webp" 
      srcset="
      ../../public/Assets/Imagenes/fotos%20elegidas/20170412_093131_resultado-383x287.webp 383w,
      ../../public/Assets/Imagenes/fotos%20elegidas/20170412_093131_resultado-640x480.webp 640w,
        ../../public/Assets/Imagenes/fotos%20elegidas/20170412_093131_resultado-1280x960.webp 1280w,
        ../../public/Assets/Imagenes/fotos%20elegidas/20170412_093131_resultado-4128x3096.webp 4128w"
      sizes="(max-width: 600px) 383px, (max-width: 1000px) 640px, (max-width: 1800px) 1280px, 4128px"
      loading="lazy"
      alt="Productos en frascos de la escuela, como miel, salsa de tomate, tomate triturado entre otros">
    </div>

    <p>
      "Nuestra Producción" va más allá de los productos que obtenemos. Desde los huevos frescos de nuestras gallinas hasta la miel y las salsas caseras, cada elemento refleja nuestra dedicación. Este esfuerzo colectivo nos permite aprender y crecer en armonía con la naturaleza, formando una comunidad comprometida con el desarrollo agrícola.
    </p>
    



    
  </article>

  <!-- # fin main -->

  <!-- # footer -->

  <?php include_once '../../includes/footer/footer.php' ?>

  <!-- # fin footer -->

</body>

</html>