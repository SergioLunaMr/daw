let contenedor1 = document.getElementById("resultado1");
let contenedor2 = document.getElementById("resultado2");
let contenedor3 = document.getElementById("resultado3");

if (Modernizr.video) {
    contenedor1.innerHTML = `<video width="320" height="240" controls>'
    <source src="video/vidoejemplo.mp4" type="video/mp4">
  </video>`;
}
else {
    contenedor1.innerText = "<p>Tu navegador no soporta el vídeo.</p>";
}

if (Modernizr.audio) {
    contenedor2.innerHTML = `<audio controls>
    <source src="audio/piano.mp3" type="audio/mpeg">
  </audio>`;

}
else {
    contenedor2.innerText = "<p>Tu navegador no soporta el audio.</p>";
}

if (Modernizr.canvas) {
    contenedor3.innerHTML = `<canvas width="200" height="100" 
    style="border:1px solid #000000;"></canvas>`;
}
else {
    contenedor3.innerText = "<p>Tu navegador no soporta canvas.</p>";
}