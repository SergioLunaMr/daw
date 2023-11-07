// Comprobar que encontramos un elemento y podemos extraer su contexto.

let state = 1;

function cargaContextoCanvas(idCanvas) {
    let elemento = document.getElementById(idCanvas);
    if (elemento && elemento.getContext) {
        let contexto = elemento.getContext("2d");
        if (contexto) {
            return contexto;
        }
    }
    return false;
}

window.addEventListener("DOMContentLoaded", function () {
    var canvas = document.getElementById("miCanvas");
    var ctx = canvas.getContext("2d");

    var x = 50;  // Posición inicial del rectángulo
    var velocidad = 2; // Velocidad de desplazamiento

    // Función para dibujar el rectángulo
    function dibujarRectangulo() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        ctx.fillStyle = "blue";
        ctx.fillRect(x, 50, 50, 30);

        x += velocidad;

        if (x + 50 > canvas.width || x < 0) {
            velocidad = -velocidad; // Cambia la dirección cuando llega a los bordes
        }
    }

    // Función de animación
    function animar() {
        dibujarRectangulo();
        requestAnimationFrame(animar);
    }

    // Iniciar la animación
    animar();
});