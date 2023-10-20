<div class="container my-4">
    <div class="row my-4">
        <div class="col"><a href="../daws.html">Volver atrás -></a></div>
    </div>
    <div>Código: <a href="https://github.com/SergioLunaMr/Practica2DAWS/blob/master/Ejercicio10.php">GitHub</a></div>
</div>
<?php
/*
author: Sergio Luna Martín
date: 03/10/2023
*/
//Pon ejemplo de uso de la sintaxis heredoc en el manejo de cadenas
$heredoc="HEREDOC";
$pruebaheredoc = <<<TEXTO
    Esto es una prueba usando $heredoc
    podemos utilizar "comillas" dobles sin ningún problema
    e incluso 'comillas' simples. También podemos usar ;
    TEXTO;
echo "$pruebaheredoc"

?>