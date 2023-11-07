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
    var x = 50;  // Posición inicial del rectángulo
    var velocidad = 2; // Velocidad de desplazamiento
    
    // Función para dibujar el rectángulo
    function dibujarRectangulo() {
        contexto.clearRect(0, 0, canvas.width, canvas.height);

        contexto.fillStyle = "blue";
        contexto.fillRect(x, 50, 50, 30);

        x += velocidad;
    
        if (x + 50 > canvas.width || x < 0) {
            velocidad = -velocidad; // Cambia la dirección cuando llega a los bordes
        }
    }
    
    // Función de animación utilizando setInterval
    function animar() {
        setInterval(dibujarRectangulo, 16); // 16 ms para una animación a 60 fps
    }
    
    // Iniciar la animación
    animar();
});