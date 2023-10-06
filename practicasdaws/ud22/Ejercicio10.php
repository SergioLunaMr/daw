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