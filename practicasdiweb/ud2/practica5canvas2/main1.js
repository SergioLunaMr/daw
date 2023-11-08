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
    let contexto = cargaContextoCanvas("micanvas");
    if (contexto) {
        contexto.beginPath();
        contexto.arc(75,75,60,Math.PI,Math.PI*1.2, false);
        contexto.lineTo(100,100);
        contexto.closePath();
        contexto.stroke();
        contexto.beginPath();
        contexto.arc(85,95,60,Math.PI,Math.PI*1.2, false);
        contexto.lineTo(100,100);
        contexto.closePath();
        contexto.stroke();
        contexto.beginPath();
        contexto.arc(95,115,60,Math.PI,Math.PI*1.2, false);
        contexto.lineTo(100,100);
        contexto.closePath();
        contexto.stroke();
        contexto.beginPath();
        contexto.arc(105,135,60,Math.PI,Math.PI*1.2, false);
        contexto.lineTo(100,100);
        contexto.closePath();
        contexto.stroke();

        contexto.beginPath();
        contexto.arc(250,75,60,Math.PI,Math.PI*1.2, false);
        contexto.lineTo(100,100);
        contexto.closePath();
        contexto.stroke();
        contexto.beginPath();
        contexto.arc(240,95,60,Math.PI,Math.PI*1.2, false);
        contexto.lineTo(100,100);
        contexto.closePath();
        contexto.stroke();
        contexto.beginPath();
        contexto.arc(230,115,60,Math.PI,Math.PI*1.2, false);
        contexto.lineTo(100,100);
        contexto.closePath();
        contexto.stroke();
        contexto.beginPath();
        contexto.arc(220,135,60,Math.PI,Math.PI*1.2, false);
        contexto.lineTo(100,100);
        contexto.closePath();
        contexto.stroke();

        
        

        contexto.beginPath();
        contexto.fillStyle="blue";
        contexto.arc(100,100,15,Math.PI*2, false);
        contexto.fill();

        contexto.fillStyle="black";
        contexto.font="bold 1.8em sans-serif";
        contexto.fillText("Hey, listen!", 250,100); 
        contexto.textAlign="center";
    }
});