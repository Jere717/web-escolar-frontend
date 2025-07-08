var colores = JSON.parse(localStorage.getItem('colores')) || ["#084612", "#008000", "#FFFF00", "#008000", "#084612"];

// Combinaciones de colores para diferentes países
var paises = {
    "Argentina": ["#80ffff", "#80ffff", "#ffff80", "#80ffff", "#80ffff"],
    "Argentina completa": ["#80ffff", "#ffffff", "#ffff80", "#ffffff", "#80ffff"],
    // Agrega más países aquí...
};

function actualizarFondo() {
    document.getElementById('footer-color').style.background = "linear-gradient(45deg, " + colores.join(", ") + ")";
    localStorage.setItem('colores', JSON.stringify(colores));

    // Verificar si los colores coinciden con los de algún país
    var mensaje = document.getElementById('mensaje-pais');
    var paisEncontrado = Object.keys(paises).find(pais => JSON.stringify(colores) === JSON.stringify(paises[pais]));

    if (paisEncontrado) {
        if (!mensaje) {
            mensaje = document.createElement('p'); // Crea un nuevo elemento p
            mensaje.id = 'mensaje-pais';
            mensaje.textContent = "¡Has seleccionado los colores de la bandera " + paisEncontrado + "!"; // Establece el contenido del texto
            document.getElementById('cde-header').appendChild(mensaje); // Añade el nuevo elemento al contenedor actual
        } else {
            mensaje.textContent = "¡Has seleccionado los colores de la bandera " + paisEncontrado + "!"; // Actualiza el contenido del texto
        }
    } else if (mensaje) {
        mensaje.remove(); // Elimina el mensaje si los colores ya no coinciden
    }
}

function cambiarColor(id, index) {
    document.getElementById(id).addEventListener('change', function() {
        colores[index] = this.value;
        actualizarFondo();
        document.getElementById('footer-color').style.animation = 'none';
        setTimeout(function() {
            document.getElementById('footer-color').style.animation = '';
        }, 10);
    });
}

window.onload = function() {
    actualizarFondo();
    for (var i = 1; i <= 5; i++) {
        document.getElementById("color" + i).value = colores[i - 1];
        cambiarColor("color" + i, i - 1);
    }
}
