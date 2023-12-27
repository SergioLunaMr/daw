<?php
function getDias($mes, $anio){
/**
 * Devuelve los dias de cada mes, controlando bisiestos.
 *
 * Se usa para obtener los días del mes controlando que puedan ser bisiestos.
 *
 * @access public
 * @param string $mes Mes del que se quieren sacar los días.
 * @param string $anio Año del que se quiere comprobar si es bisiesto o no.
 * @return string Dias del mes.
 */
    $dias=30;
    switch($mes){
        case "1":
        case "3":
        case "5":
        case "7":
        case "8":
        case "10":
        case "12": {
            $dias=31;
            break;
        }
        case "2": {
            ($anio%4==0) ? $dias=29: $dias=28;
            break;
        }
    }
    return $dias;
}

function test_input($data)
/**
 * Limpia el string
 *
 * Se utiliza para limpiar el string
 *
 * @access public
 * @param string $data Cadena de texto a limpiar
 * @return string $data Cadena de texto limpia
 */
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>