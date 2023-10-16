// Comprobar que encontramos un elemento y podemos extraer su contexto.

function cargaContextoCanvas(idCanvas) {
    let elemento = document.getElementById(idCanvas);
    if(elemento && elemento.getContext) {
        let contexto = elemento.getContext("2d");
        if(contexto){
            return contexto;
        }
    }
    return false;
}

window.addEventListener("DOMContentLoaded", function () {
    let contexto = cargaContextoCanvas("micanvas");
    if(contexto){
        setInterval(cuadradosAleatorios,100,contexto);
        // contexto.fillStyle = '#6634A2';
        // contexto.fillRect(100,100,50,50);
        // contexto.fillStyle= 'rgba(200,100,50,0.5)';
        // contexto.fillRect(10,10,120,130);
        // contexto.fillStyle= "rgba(255,0,0,0.5)";
        // for(i=0;i<=500;i+=10){
        //     contexto.fillRect(i,i,10,10);
        // }
        // contexto.fillStyle= 'rgba(70%,50%,20%,0.5)';
        // for(i=500;i>=0;i-=10){
        //     contexto.fillRect(i,500-i,10,10);
        // }
        // contexto.fillStyle= 'rgba(100,255,40,0.8)';
        // for(i=0;i<=500;i+=20){
        //     contexto.fillRect(250,500-i,10,10);
        // }
        // contexto.fillStyle= 'rgba(230,60,183,0.3)';
        // for(i=0;i<=500;i+=20){
        //     contexto.fillRect(500-i,250,10,10);
        // }
        document.getElementById("borrar").addEventListener("click", borrarParcial);
    }
})

function borrarParcial(){
    let contexto= cargaContextoCanvas("micanvas");
    if(contexto) {
        contexto.clearRect(60,0,400,400);
    }
}

function aleatorios(inferior, superior) {
    let numPosib = superior-inferior;
    let random = Math.random() * numPosib;
    return parseInt(random)+inferior;
}

function colorAleatorio () {
    return "rgb(" + aleatorios(0,255) + "," + aleatorios(0,255) + "," +  aleatorios(0,255) + ")";
}

function cuadradosAleatorios (contexto) {
    for(i=0;i<500;i+=10) {
        for(j=0;j<500;j+=10){
            contexto.fillStyle = colorAleatorio();
            contexto.fillRect(i,j,10,10);
        }
    }
}