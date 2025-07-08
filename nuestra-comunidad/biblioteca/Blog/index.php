<?php

include('../../../src/app/config/config.php');
// echo isset($pdo) ? 'PDO definido correctamente' : 'PDO no está definido';

include '../../../src/app/config/config_url.php';

include '../../../helpers/blog_helper.php';

// Definir la tabla a utilizar (cámbiala según el blog en cuestión)
$tabla = 'tb_posts_blog_biblioteca';

$categoryFilter = isset($_GET['category']) && !empty($_GET['category']) ? $_GET['category'] : null;
$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
$limit = 5;

// Obtener la lista de posts
$posts = obtenerPosts($tabla, $categoryFilter, $limit, $offset);

?>

<!DOCTYPE html>

<html lang="es">

<head>

    <!-- # metadata -->

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Agrotecnica 717 + Blog Biblioteca </title>

    <!-- Título de la página compartida -->
    <meta property="og:title" content="Blog Biblioteca - Escuela 717">
    <!-- Descripción breve que aparecerá debajo del título -->
    <meta property="og:description" content="Conoce más sobre nosotros 🌾🚜">
    <!-- URL de la página compartida -->
    <meta property="og:url" content="<?php echo BASE_URL ?>/nuestra-comunidad/biblioteca/blog/">
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

    <!-- # header -->

    <header class="header">

    <div class="grupo-1">

        <div class="box-1">

        <div class="btn">

            <a href="<?php echo BASE_URL ?>/nuestra-comunidad/biblioteca/" class="btn-cont" rel="noreferrer noopener">

            <i class="bi bi-arrow-left-short"></i>

            <p>

                Atras

            </p>

            </a>

        </div>

        </div>

        <div class="box-2">

        <h1> Blog de la biblioteca </h1>

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

        <img src="../../../public/Assets/Imagenes/logo.webp" alt="Logo">

    </div>

    </header>

    <!-- # fin header -->

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

    <!-- # main -->

    <article class="main">
        <header id="header-publicaciones">
            <h1 id="publicaciones-recientes"><strong>Publicaciones más recientes</strong></h1>

            <!-- Sección de búsqueda por categorías -->
            <form id="formulario-buscador" method="GET" action="">
                <label>¿Cuáles categorías de publicaciones desea ver?</label>
                <div class="input-group mb-3">
                    <select class="form-select" name="category" onchange="this.form.submit()">
                        <option value="">Todas las categorías disponibles</option>
                        <?php
                        // Obtener todas las categorías únicas desde la tabla tb_posts_blog_biblioteca
                        $sql = "SELECT DISTINCT category FROM tb_posts_blog_biblioteca";
                        $stmt = $pdo->query($sql);
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo '<option value="' . htmlspecialchars($row['category']) . '"'
                                . (isset($_GET['category']) && $_GET['category'] === $row['category'] ? ' selected' : '') . '>'
                                . htmlspecialchars($row['category']) . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </form>
        </header>

        <div class="posts" id="post-container">
            <?php
                echo renderizarListaPosts($posts);
            ?>
        </div>
    </article>

    <!-- # fin main -->

    <!-- # footer -->

    <?php include_once '../../../includes/footer/footer.php' ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadMoreButton = document.getElementsByClassName('load-more')[0];

        if (loadMoreButton) {
            loadMoreButton.addEventListener('click', function() {
                const postContainer = document.getElementById('post-container');
                const offset = postContainer.getElementsByClassName('post').length;
                const category = new URLSearchParams(window.location.search).get('category') || '';

                fetch(`load_more_posts.php?offset=${offset}&category=${category}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.posts && data.posts.length > 0) {
                            // Generar HTML para las nuevas publicaciones
                            data.posts.forEach(post => {
                                const postElement = document.createElement('div');
                                postElement.classList.add('post');
                                postElement.innerHTML = `
                                    <h2>${post.title}</h2>
                                    <p><strong>Categoría: </strong>${post.category}</p>
                                    <img src="${post.image}" alt="${post.title}">
                                    <p>${post.content.substring(0, 250)}...</p>
                                    <p><small class="post-fecha">Publicado el ${post.created_at}</small></p>
                                    <!-- Botón para ver la publicación completa -->
                                    <a href="publicacion.php?id=${post.id}" class="btn btn-success">Ampliar info</a>
                                `;
                                postContainer.appendChild(postElement);
                            });

                            // Reubicar el botón "Ver más publicaciones" al final
                            postContainer.appendChild(loadMoreButton);
                        }

                        // Ocultar el botón si no hay más publicaciones
                        if (!data.hasMorePosts) {
                            loadMoreButton.style.display = 'none';
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        }
    });
    </script>

    <!-- # fin footer -->
</body>