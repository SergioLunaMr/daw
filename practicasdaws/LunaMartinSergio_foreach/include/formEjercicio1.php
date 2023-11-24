<?php
/*foreach.
author: Sergio Luna Martín
date: 24/11/2023
DNI: 31019692Y
Formulario del ejercicio 1.
*/
?>
<form action="index.php" method="post">
    <label for="grupo">Introduce el grupo del que quieras ver la hora:
        <select name="grupo">
            <option value="1º DAW">1º DAW</option>
            <option value="2º DAW" selected>2º DAW</option>
        </select>
    </label>
    <input type="submit" name="enviar" value="Enviar">
</form>