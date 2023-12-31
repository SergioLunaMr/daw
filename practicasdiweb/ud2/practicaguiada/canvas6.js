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
        img.src="image.jpg";
        img.addEventListener("load", function (){
            //Imagen original
            contexto.drawImage(img,0,0);
            //Imagen escalada
            contexto.drawImage(img,0,1000,400,100);
            //Imagen recortada
            contexto.drawImage(img, 300,300,150,150,0,1100,150,150);
            //Imagen redimensionada
            contexto.drawImage(img, 300,300,150,150,0,1300,400,400);
        })
    }
});