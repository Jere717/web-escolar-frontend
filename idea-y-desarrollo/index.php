<?php

include '../src/app/config/config_url.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

    <!-- Metadatos -->

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Idea y desarrollo de la web </title>

    <!-- Título de la página compartida -->
    <meta property="og:title" content="Idea y desarrollo de la web - Escuela 717">
    <!-- Descripción breve que aparecerá debajo del título -->
    <meta property="og:description" content="Conoce más sobre nosotros 🌾🚜">
    <!-- URL de la página compartida -->
    <meta property="og:url" content="<?php echo BASE_URL ?>/Idea y desarrollo/idea-y-desarrollo.php">
    <!-- URL de la imagen que aparecerá como vista previa -->
    <meta property="og:image" content="<?php echo BASE_URL ?>/public/images/logos/logo.webp">
    <!-- Tipo de contenido compartido -->
    <meta property="og:type" content="website">
    <!-- Nombre del sitio -->
    <meta property="og:site_name" content="Agrotecnica 717">
    <!-- Paleta de colores o ícono para dispositivos móviles -->
    <meta name="theme-color" content="#139b36">

    <!-- Metadatos fin -->

    <link rel="stylesheet" href="estilos-idea-y-desarrollo.css">

    <link rel="icon" href="../public/images/logos/logo.webp" type="image/webp">

</head>

<body class="grid-container">

    <header>
        <img src="../public/Assets/Imagenes/logo.webp" alt="Logo De La Escuela">
        <a href="https://agrotecnica717.edu.ar/">agrotecnica717.edu.ar</a>
    </header>

    <article class="main">

            <h1> Quienes hicieron posible el proyecto </h1>
                
            <div id="colaboradores">
                <!-- Desarrollador -->
                <div class="container" id="con-desarrollador">
                    <div class="div-img">
                        <img src="Images/img-pro.jpg" alt="Icono de 01001010 01000011" draggable="false" oncontextmenu="return false;">
                    </div>
                    <div class="div-texto">
                        <p><strong>Estudiante Desarrollador, Anonimo</strong></p>
                    </div>
                </div>
                
                <!-- Cooperadora -->
                <div class="container" id="con-cooperadora">
                    <div class="div-img">
                        <img src="Images/logo-cooperadora.jpg" alt="Icono de la Cooperadora" draggable="false" oncontextmenu="return false;">
                    </div>
                    <div class="div-texto">
                        <p><strong>Cooperadora:</strong></p>
                        <p>
                            Cubrió los gastos del costo del hosting para poder mantener la web en línea.
                        </p>
                    </div>
                </div>

            </div>

        <!-- Proximamente -->
        <!-- <div class="footer-grass">
            <img src="../public/images/cesped (1).webp" alt="Pasto" class="grass-image">
        </div> -->
    </article>

    <footer>

    </footer>

</body>

</html>