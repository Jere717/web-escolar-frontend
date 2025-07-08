# Web Escolar Agrotécnica 717 - Frontend...

Este proyecto es el frontend del sitio web de la Escuela Agrotécnica 717, ubicado en Cerro Radal, Lago Puelo, Chubut, Argentina. El objetivo es ofrecer información institucional, recursos educativos y facilitar la colaboración de la comunidad escolar.

## Características

- Sitio web estático con HTML, CSS y PHP principalmente.
- Integración con backend para blogs y publicaciones dinámicas (requiere XAMPP).
- Estructura modular para facilitar la colaboración y el mantenimiento.
- Optimización para dispositivos móviles y SEO básico.
- Notificaciones push (Firebase, solo en producción).
- Encuestas para familias y estudiantes.

## Requisitos

- XAMPP (PHP + Apache)
- Navegador web moderno

## Instalación y uso

1. Clona este repositorio en la carpeta `htdocs` de XAMPP:
   ```bash
   git clone https://github.com/tu-usuario/web-escolar-frontend.git
   ```
2. Inicia XAMPP y asegúrate de que Apache esté corriendo.
3. Accede a `http://localhost/web-escolar-frontend/` en tu navegador.
4. Para colaborar, edita los archivos en la estructura correspondiente (ver carpetas como nuestra-escuela, informacion, etc.).

## Estructura del proyecto

- Assets — Recursos estáticos (CSS, JS, imágenes)
- Carpetas como nuestra-escuela, informacion, etc. — Secciones principales del sitio
- includes — Componentes reutilizables (footer)
- config — Configuración de rutas y constantes
- index.php — Página principal

## Colaboración

- Haz un fork del repositorio y crea una rama para tus cambios.
- Realiza un Pull Request con una descripción clara de tus aportes.
- Para cambios en el backend (blogs), consulta primero para coordinar la integración. O evitalo, plis

## Créditos

Desarrollado por 1 persona estudiante, ahora por toda la comunidad de la Escuela Agrotécnica 717. ¡Tu colaboración es bienvenida!