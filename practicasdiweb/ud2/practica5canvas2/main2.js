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
        let img = new Image();
        img.src="img/gato.jpg";
        img.addEventListener("load", function (){
            //Imagen original
            contexto.drawImage(img,0,0);
            //Imagen escalada
            contexto.drawImage(img,0,450,250,250);
            //Imagen recortada
            contexto.drawImage(img, 140,140,150,150,0,700,120,120);
            //Imagen redimensionada
            contexto.drawImage(img, 100,300,200,100,0,850,400,400);
        })
    }
});