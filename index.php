<?php

include 'src/app/config/config_url.php';

?>

<!DOCTYPE html>

<html lang="es">

<head>

  <!-- # metadata -->

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Agrotecnica 717 </title>

  <!-- Meta descripción personalizada -->
  <meta name="description" content="La escuela Agrotécnica 717 es una institución educativa ubicada en Cerro Radal, Lago Puelo, Pcia. del Chubut.">

  <!-- Palabras clave personalizadas -->
  <meta name="keywords" content="proyectos educativos, agrotécnica, agro, escuela agropecuaria, educación agrícola, tecnología educativa, agro expo, expo, 717">

  <!-- Título de la página compartida -->
  <meta property="og:title" content="Escuela Agrotecnica 717">
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

  <!-- Estilos css -->
  <link rel="stylesheet" href="public/Assets/CSS/estilos_comunes.css">
  <link rel="stylesheet" href="public/Assets/CSS/fonts.css" media="print" onload="this.media='all'">

  <script src="https://kit.fontawesome.com/978e807419.js" crossorigin="anonymous" defer></script>

  <link rel="icon" href="<?php echo BASE_URL ?>/public/images/logos/logo.webp" type="image/webp">
  
  <!-- Notificaciones pusH FMC - LIMITADO EN PUBLICO -->
  <script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";
    import { getMessaging, onMessage } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-messaging.js";

    const firebaseConfig = {
      apiKey: "AIzaSyC4mc36yGSiFQ_-baK6RbyXnXpYS-auZNc",
      authDomain: "agrotecnica-717.firebaseapp.com",
      projectId: "agrotecnica-717",
      storageBucket: "agrotecnica-717.appspot.com",
      messagingSenderId: "1043447449069",
      appId: "1:1043447449069:web:3d8ede6a49d4a0ceab13e4"
    };

    const app = initializeApp(firebaseConfig);
    const messaging = getMessaging(app);

    // Solo registrar Service Worker si no está en entorno de pruebas
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('/firebase-messaging-sw.js', { scope: '/' })
        .catch(error => console.error('Error al registrar SW:', error));
    }

    // No se solicita permiso ni se envía token en esta versión pública
    // Solo escuchar mensajes si ya está autorizado
    onMessage(messaging, (payload) => {
      console.log('Mensaje en primer plano:', payload);
    });
  </script>

</head>

<body class="grid-container principal">

  <!-- # header -->

  <header class="header">

    <div class="grupo-1">

      <div class="box-1">

        

      </div>

      <div class="box-2">

        <h1> Agrotecnica 717 </h1>

      </div>

      <div class="box-3">

        <div class="btn">

          <a href="https://maps.app.goo.gl/R9EqeRkfgLTPjogk8" class="btn-cont" target="_blank" rel="noreferrer noopener">

            <i class="fa-solid fa-map-location-dot"></i>

            <p>

              Como Llegar

            </p>

          </a>

        </div>

      </div>

    </div>

    <div class="grupo-2">

      <img src="public/Assets/Imagenes/logo.webp" alt="Logo De La Escuela">

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
    <div class="grupo-2" id="menu-content">
      <div class="btn">
        <a href="nuestra-escuela/" class="btn-cont">
          <i class="fa-solid fa-school"></i>
          <p>Nuestra Escuela</p>
        </a>
      </div>
      <div class="btn">
        <a href="nuestra-comunidad/" class="btn-cont">
          <i class="fa-solid fa-user-group"></i>
          <p>Nuestra Comunidad</p>
        </a>
      </div>
      <div class="btn">
        <a href="proyecto-educativo/" class="btn-cont">
          <i class="fa-solid fa-diagram-project"></i>
          <p>Proyecto Educativo</p>
        </a>
      </div>
      <div class="btn">
        <a href="informacion/" class="btn-cont">
          <i class="fa-solid fa-info"></i>
          <p>Informacion</p>
        </a>
      </div>
    </div>
  </nav>

  <!-- # fin navbar -->
  
  <!-- # main -->

  <article class="main">


    <h1>Bienvenidos y bienvenidas</h1>

    <div class="div-main">
      <link href="public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/bandera-nacional2-480x216.webp" as="image">
      <img 
        src="public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/bandera-nacional2-480x216.webp" 
        srcset="
          public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/bandera-nacional2-480x216.webp 480w,
          public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/bandera-nacional2-800x360.webp 800w,
          public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/bandera-nacional2-1200x576.webp 1200w,
          public/Assets/Imagenes/FOTOS%20EXPOAGRO%20Y%20VARIAS/bandera-nacional2.webp 1946w"
        sizes="(max-width: 600px) 480px, (max-width: 1200px) 800px, (max-width: 1800px) 1200px, 1946px" 
        alt="Bandera nacional">
    </div>

    <p>
      La Escuela Agrotecnica 717 es una institución educativa ubicada en Cerro Radal, Lago Puelo, Pcia. del Chubut.
    </p> 
    <p>Nuestro compromiso es la formación académica con una mirada ecológica a la sostenibilidad. Nuestros/as estudiantes obtienen, tras cursar 7 años, el título de Técnico/a en Producción Agropecuario/a.
    </p>
    <p>
      El predio cuenta con 17 hectáreas donde se encuentra el edificio académico, los talleres, las instalaciones agropecuarias, viveros, sector recreativo y el sector destinado al campo para siembra y animales 
    </p>
    <p>
      Desde nuestra visión generamos el compromiso con la sostenibilidad, promoviendo prácticas agrícolas respetuosas con el medio ambiente y el bienestar animal.
    </p>

    <div class="footer-grass">
      <img src="public/images/cesped (1).webp" alt="Pasto" class="grass-image">
    </div>
  </article>

  <!-- # fin main -->

  <?php include 'includes/footer/footer_index.php'; ?>

  <!-- Popup Encuesta Mejorado -->
  <div id="popup-encuesta" class="popup-encuesta-container">
    <div class="popup-encuesta">
      <div class="popup-header">
        <img src="public/images/logo.webp" alt="Logo pequeño">
        <h2>Encuesta Escolar</h2>
        <button id="cerrar-popup" class="popup-cerrar-btn">&times;</button>
      </div>
      <div class="popup-content">
        <p>¡Tu opinión es importante para nosotros! Por favor selecciona tu perfil:</p>
        
        <div class="encuesta-division">
          <!-- Sección familias -->
          <div class="encuesta-bloque familias">
            <h3>Para Familias</h3>
            <p>Escanea el código QR o haz clic en el botón para responder la encuesta.</p>
            <div class="qr-container">
              <img src="public/images/QRcodes/qrcode-generado (1).png" alt="Código QR para familias" class="qr-image">
            </div>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdyw3JUy0AxbrtrVa-7HfP1leZb9E4vOEaxH8FIWmsjGDtp3A/viewform?usp=sharing" target="_blank" rel="noopener noreferrer" class="encuesta-btn familias">
              <span class="emoji-icon">👨‍👩‍👧‍👦</span> Completar encuesta
            </a>
          </div>

          <!-- Sección estudiantes -->
          <div class="encuesta-bloque estudiantes">
            <h3>Para Estudiantes</h3>
            <p>Escanea el código QR o haz clic en el botón para responder la encuesta.</p>
            <div class="qr-container">
              <img src="public/images/QRcodes/qrcode-generado-estudiantes.png" alt="Código QR para estudiantes" class="qr-image">
            </div>
            <a href="https://forms.gle/iUAaZUqJUmNSoSk9A" target="_blank" rel="noopener noreferrer" class="encuesta-btn estudiantes">
              <span class="emoji-icon">🎓</span> Completar encuesta
            </a>
          </div>
        </div>
        
        <p class="alternativa-texto">También puedes compartir estos enlaces con quien corresponda</p>
      </div>
    </div>
  </div>

  <script>
  // Mostrar popup al cargar la página
  document.addEventListener('DOMContentLoaded', function() {
    const popup = document.querySelector('.popup-encuesta-container');
    const cerrarBtn = document.getElementById('cerrar-popup');
    
    // Mostrar popup después de 3 segundos (puedes ajustar)
    setTimeout(() => {
      popup.style.display = 'flex';
      document.body.style.overflow = 'hidden'; // Evitar scroll
    }, 3000);
    
    // Cerrar popup al hacer clic en la X
    cerrarBtn.addEventListener('click', function() {
      popup.style.display = 'none';
      document.body.style.overflow = 'auto'; // Restaurar scroll
    });
    
    // Cerrar popup al hacer clic fuera del contenido
    popup.addEventListener('click', function(e) {
      if(e.target === popup) {
        popup.style.display = 'none';
        document.body.style.overflow = 'auto';
      }
    });
    
    // Opcional: Guardar en localStorage si ya se mostró
    if(!localStorage.getItem('encuestaMostrada')) {
      setTimeout(() => {
        popup.style.display = 'flex';
        document.body.style.overflow = 'hidden';
        localStorage.setItem('encuestaMostrada', 'true');
      }, 3000);
    }
  });
  </script>

</body>

</html>
