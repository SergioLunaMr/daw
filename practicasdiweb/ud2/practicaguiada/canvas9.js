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
    //Circunferencia
    let contexto = cargaContextoCanvas("micanvas");

    if (contexto) {
        //Podemos realizar transformaciones sobre nuestros dibujos en canvas
        //Las más habituales, y que nos dan herramientas para realizar animaciones más completas son: translate y rotate

        //Translate
        //Pintamos un rectángulo
        contexto.fillStyle = "#ff0000";
        contexto.fillRect(0, 0, 150, 150);

        //Trasladamos el "contexto"
        //Muy importante, trasladamos toco el contexto entero. Es decir, el punto de inicio de TODO el contexto se traslada del 0,0 al 100,100
        contexto.translate(100, 50);

        //Pintamos otro rectángulo
        contexto.fillStyle = "rgba(0,0,255,0.5)";
        contexto.fillRect(0, 0, 150, 150);

        //Pintamos otro rectángulo
        contexto.save();
        
        contexto.fillStyle = "green";
        contexto.fillRect(10, 10, 100, 100);

        contexto.restore();

        contexto.fillRect(200,0,150,150);

    }
});