<?php
include('../../../src/app/config/config.php');
include '../../../src/app/config/config_url.php'; 

include('../../../helpers/blog_helper.php'); // Incluir el helper

// Obtener el post
$post = isset($_GET['id']) ? obtenerPost($_GET['id'], 'tb_posts_blog_biblioteca') : null;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrotecnica 717 + Publicación del blog</title>

    <?php if ($post): ?>
        <meta property="og:title" content='Publicación de la biblioteca: "<?php echo htmlspecialchars($post["title"]); ?>" - Escuela 717'>
        <meta property="og:description" content="Conoce más sobre nosotros 🌾🚜">
        <meta property="og:url" content="<?php echo BASE_URL ?>/nuestra-comunidad/biblioteca/blog/publicacion.php?id=<?php echo $_GET['id']; ?>">
        <meta property="og:image" content="<?php echo BASE_URL ?>/public/Assets/Imagenes/logo.webp">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Agrotecnica 717">
        <meta name="theme-color" content="#139b36">
    <?php endif; ?>

    <link rel="stylesheet" href="../../../public/Assets/CSS/estilos_comunes.css">
    <link rel="stylesheet" href="../../estilos-nuestra-comunidad.css">
    <link rel="stylesheet" href="../../../public/Assets/CSS/fonts.css" media="print" onload="this.media='all'">

    <!-- FontAwesome para iconos -->
    <script src="https://kit.fontawesome.com/978e807419.js" crossorigin="anonymous" defer></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo BASE_URL ?>/public/images/logos/logo.webp" type="image/webp">
    
    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="biblioteca.css">
</head>
<body class="grid-container">
    <header class="header">
        <div class="grupo-1">
            <div class="box-1">
                <div class="btn">
                    <a href="<?php echo BASE_URL ?>/nuestra-comunidad/biblioteca/blog/" class="btn-cont" rel="noreferrer noopener">
                        <i class="bi bi-arrow-left-short"></i>
                        <p>Atras</p>
                    </a>
                </div>
            </div>
            <div class="box-2">
                <h1>Publicación ampliada</h1>
            </div>
            <div class="box-3">
                <div class="btn">
                    <a href="<?php echo BASE_URL ?>/" class="btn-cont">
                        <i class="fa-solid fa-house"></i>
                        <p>Home</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <img src="../../../public/Assets/Imagenes/logo.webp" alt="Logo">
        </div>
    </header>

    <!-- # navbar -->

    <nav class="navbar navbar-color-gradiente">

        <div class="grupo-1">



        </div>

        <div class="grupo-2">

            <!-- <div class="btn">

                <a href="blog/" class="btn-cont">

                <i class="fa-solid fa-info"></i>

                <p>

                    Blog

                </p>

                </a>

            </div> -->

        </div>



    </nav>

    <article class="main" id="post-completa">
        <?php if ($post): ?>
            <div>
                <?php echo renderizarPublicacion($post); ?>
            </div>
        <?php else: ?>
            <p>No hay publicaciones disponibles.</p>
        <?php endif; ?>
    </article>

    <?php include_once '../../../includes/footer/footer.php' ?>

</body>
</html>