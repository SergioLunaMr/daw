// Comprobar que encontramos un elemento y podemos extraer su contexto.

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
    //Camino relleno sin cierre explícito
    let contexto = cargaContextoCanvas("micanvas");

    if (contexto) {
        contexto.beginPath();
        contexto.moveTo(50,15);
        contexto.lineTo(112,15);
        contexto.lineTo(143,69);
        contexto.lineTo(112,123);
        contexto.lineTo(50,123);
        contexto.lineTo(19,69);
        contexto.fill();
    }

    let contexto2 = cargaContextoCanvas("micanvas2");
    if (contexto2) {
        contexto2.beginPath();
        contexto2.moveTo(50,15);
        contexto2.lineTo(112,15);
        contexto2.lineTo(143,69);
        contexto2.lineTo(112,123);
        contexto2.lineTo(50,123);
        contexto2.lineTo(19,69);
        contexto2.fill();
    }

    let contexto3 = cargaContextoCanvas("micanvas3");
    if (contexto3) {
        contexto3.beginPath();
        contexto3.moveTo(50,15);
        contexto3.lineTo(112,15);
        contexto3.lineTo(143,69);
        contexto3.lineTo(112,123);
        contexto3.lineTo(50,123);
        contexto3.lineTo(19,69);
        contexto3.stroke();
    }

    let contexto4 = cargaContextoCanvas("micanvas4");
    if (contexto4) {
        contexto4.beginPath();
        contexto4.moveTo(50,15);
        contexto4.lineTo(112,15);
        contexto4.lineTo(143,69);
        contexto4.lineTo(112,123);
        contexto4.lineTo(50,123);
        contexto4.lineTo(19,69);
        contexto4.lineTo(50,15);
        contexto4.stroke();
    }
});