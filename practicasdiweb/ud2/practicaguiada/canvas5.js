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
        contexto.beginPath();
        contexto.arc(75,75,60,Math.PI,Math.PI*0.5, false);
        contexto.arc(75,75,40,Math.PI*0.5,Math.PI, false);
        //contexto.closePath();
        //contexto.stroke();
        contexto.fill();

        contexto.beginPath();
        contexto.fillStyle="orange"
        contexto.arc(75,75,15,Math.PI*2, false);
        contexto.fill();

        //Pac-man
        contexto.beginPath();
        contexto.fillStyle="yellow"
        contexto.arc(250,250,60,Math.PI*0.25, Math.PI*1.75, false);
        contexto.lineTo(250,250);
        contexto.closePath();
        contexto.fill();
        contexto.stroke();

        //Ojo de Pacman
        //contexto.fillRect(225,225,6,6);
        contexto.fillStyle="black";
        contexto.beginPath();
        contexto.arc(225,225,10,0,Math.PI*2, false);
        contexto.fill();

        //Blanco del ojo
        contexto.fillStyle="white";
        contexto.beginPath();
        contexto.arc(225,225,3,0,Math.PI*2, false);
        contexto.fill();
    }
});