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
    //Circunferencia
    let contexto = cargaContextoCanvas("micanvas");
    this.setInterval(stateHandler, 100, contexto);
    //Translate
    //Pintamos un rectángulo
    // contexto.fillStyle = "#ff0000";
    // contexto.fillRect(0, 0, 20, 20);

    // //Trasladamos el "contexto"
    // //Muy importante, trasladamos toco el contexto entero. Es decir, el punto de inicio de TODO el contexto se traslada del 0,0 al 100,100
    // contexto.translate(100, 50);

    // //Pintamos otro rectángulo
    // contexto.fillStyle = "rgba(0,0,255,0.5)";
    // contexto.fillRect(0, 0, 20, 20);

    // //Pintamos otro rectángulo
    // contexto.save();

    // contexto.fillStyle = "green";
    // contexto.fillRect(10, 10, 100, 100);

    // contexto.restore();

    // contexto.fillRect(10,0,20,20);

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
    contexto.fillStyle = "#2388";
    contexto.fillRect(10,10, 20, 20, 0.5);
    contexto.rotate(10* Math.PI / 220);
    return 2;
}
    function buttonState2(contexto) {
    contexto.fillStyle = "#2388";
    contexto.fillRect(10, 10, 20, 20, 0.5);
    contexto.rotate(20* Math.PI / 220);
    return 3;
}

function buttonState3(contexto) {
    contexto.fillStyle = "#2388";
    contexto.fillRect(10, 10, 20, 20, 0.5);
    contexto.rotate(10* Math.PI / 220);
    return 4;
}

function buttonState4(contexto) {
    contexto.fillStyle = "#2388";
    contexto.fillRect(10, 10, 20, 20, 0.5);
    contexto.rotate(20* Math.PI / 220);
    return 2;
}