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

    let lineGrad=contexto.createLinearGradient(150,81,150,268);
    lineGrad.addColorStop(0,"aquamarine");
    lineGrad.addColorStop(0.05,"teal");
    lineGrad.addColorStop(0.6,"green");

    contexto.strokeRect(50,0,50,10);
  
    contexto.strokeRect(0,10,150,200);

    contexto.beginPath();
    contexto.moveTo(20, 20);
    contexto.lineTo(130, 20);
    contexto.lineTo(130, 40);
    contexto.lineTo(20, 40);
    contexto.fillStyle=lineGrad;
    contexto.fill();

    contexto.beginPath();
    contexto.moveTo(20, 50);
    contexto.lineTo(130, 50);
    contexto.lineTo(130, 70);
    contexto.lineTo(20, 70);
    contexto.fill();

    contexto.beginPath();
    contexto.moveTo(20, 80);
    contexto.lineTo(130, 80);
    contexto.lineTo(130, 100);
    contexto.lineTo(20, 100);
    contexto.fill();

    contexto.beginPath();
    contexto.moveTo(20, 110);
    contexto.lineTo(130, 110);
    contexto.lineTo(130, 130);
    contexto.lineTo(20, 130);
    contexto.fill();

    contexto.beginPath();
    contexto.moveTo(20, 140);
    contexto.lineTo(130, 140);
    contexto.lineTo(130, 160);
    contexto.lineTo(20, 160);
    contexto.fill();

    contexto.beginPath();
    contexto.moveTo(20, 170);
    contexto.lineTo(130, 170);
    contexto.lineTo(130, 190);
    contexto.lineTo(20, 190);
    contexto.fill();

    contexto.beginPath();
    contexto.moveTo(20, 20);
    contexto.lineTo(130, 20);
    contexto.lineTo(130, 40);
    contexto.lineTo(20, 40);
    contexto.fill();

    contexto.fillStyle="black";
    contexto.font="bold 1em sans-serif";
    contexto.fillText("Batería completa", 10,240); 
    contexto.textAlign="center";
});