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
        let img = new Image();
        img.src="https://pixnio.com/free-images/2017/09/26/2017-09-26-09-41-34.jpg";
        img.addEventListener("load", function (){
            contexto.drawImage(img,0,0);
        })
    }
});