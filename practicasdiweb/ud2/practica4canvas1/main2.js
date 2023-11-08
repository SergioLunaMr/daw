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
    let contexto = cargaContextoCanvas("micanvas");
    contexto.beginPath();
    contexto.moveTo(0, 0);
    contexto.lineTo(20, 0);
    contexto.lineTo(30, 30);
    contexto.lineTo(40, 10);
    contexto.lineTo(60, 10);
    contexto.lineTo(70, 30);
    contexto.lineTo(80, 0);
    contexto.lineTo(100, 0);
    contexto.lineTo(100, 60);
    contexto.lineTo(80, 80);
    contexto.lineTo(100, 90);
    contexto.lineTo(100, 140);
    contexto.lineTo(70, 140);
    contexto.lineTo(50, 90);
    contexto.lineTo(30, 140);
    contexto.lineTo(0, 140);
    contexto.lineTo(0,90);
    contexto.lineTo(20,80);
    contexto.lineTo(0,60);
    contexto.fill();
});