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
    this.setInterval(stateHandler, 1000, contexto);
});

function stateHandler(contexto) {
    if (contexto) {
        switch (state) {
            case 1: {
                state=buttonState1(contexto);
                break;
            };
            case 2: {
                state=buttonState2(contexto);
                break;
            };
            case 3: {
                state=buttonState3(contexto);
                break;
            };
            case 4: {
                state=buttonState4(contexto);
                break;
            };
        }
    }
}

function buttonState1(contexto) {
    contexto.fillStyle = "aquamarine";
    contexto.clearRect(200,200, 150, 150);
    contexto.fillRect(200,200, 150, 150, 0.2);
    contexto.translate(10,0);
    return 2;
}

function buttonState2(contexto) {
    contexto.fillStyle = "yellow";
    contexto.clearRect(200,200, 150, 150);
    contexto.fillRect(200, 200, 150, 150, 0.2);
    contexto.translate(-10,0);
    return 3;
}

function buttonState3(contexto) {
    contexto.fillStyle = "green";
    contexto.clearRect(200,200, 150, 150);
    contexto.fillRect(200,200, 150, 150, 0.5);
    contexto.translate(60,0);
    return 4;
}

function buttonState4(contexto) {
    contexto.fillStyle = "teal";
    contexto.clearRect(200,200, 150, 150, 1);
    contexto.fillRect(200,200, 150, 150, 0.5);
    contexto.translate(-60,0);
    return 1;
}