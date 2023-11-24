<?php
include("../config/config.php");
/*foreach.
author: Sergio Luna Martín
date: 24/11/2023
DNI: 31019692Y
En este fichero se encuentran las funciones comunes a los ejercicios.
*/

//foreach.Esta función se encarga de, pasándole una cadena de caracteres en formato DNI, quitar la letra y dividir
//los números en un array. Luego de obtener un array númerico, realiza un sumatorio y divide entre 7, guardando
//el resto y usándolo como condición en un switch, que devuelve a la función mediante return la palabra clave, 
//en este caso: foreach.


function dniContrasena($dni)
{
    $sumatorioDni = 0;
    $arrayDni = str_split(substr($dni, 0, -1));
    for ($i = 0; $i < count($arrayDni); $i++) {
        $sumatorioDni += (int) $arrayDni[$i];
    }
    $sumatorioDni = $sumatorioDni % 7;
    switch ($sumatorioDni) {
        case 0:
            return "array";
        case 1:
            return "for";
        case 2:
            return "while";
        case 3:
            return "foreach";
        case 4:
            return "if";
        case 5:
            return "function";
        case 6:
            return "echo";
        case 7:
            return "switch";
    }
}

function horarioDia($diaSemana, $grupo)
{
    //foreach.Guardamos dentro de horario la variable global horario.
    $horario = $GLOBALS["horario"];
    //foreach.Creamos una variable que devolveremos con el horario del grupo del día
    $horarioGrupo = array();
    //foreach.Variable que nos indicará por que hora vamos.
    $hora = 1;
    //Variable que nos indicará dentro $horarioGrupo la hora que llevamos.
    $contador = 0;
    for ($i = 0; $i < count($horario[0]); $i++) {
        if ($horario[$i]["grupo"] == $grupo) {
            //Entramos dentro del índice del grupo
            while ($hora < 6) {
                foreach ($horario[$i]["horario"] as $asignatura) {
                    //Entramos en cada asignatura
                    for($j=0;$j<count($asignatura["horas"]);$j++){
                        //Entramos en las horas de cada asignatura
                        //Comprobamos si el día y la hora son adecuadas
                        if($asignatura["horas"][$j]["Dia"]== $diaSemana && $asignatura["horas"][$j]["Hora"]==$hora){
                            //En caso afirmativo, lo guardamos haciendo uso de la variable contador
                            $horarioGrupo[$contador]= array(
                                "profesor" => $asignatura["profesor"],
                                "asignatura" => $asignatura["nombre"]
                            );
                            //Añadimos contador y hora
                            $contador++;
                            $hora++;
                        }
                    }
                }
            }
        }
    }
    //Devolvemos $horarioGrupo
    return $horarioGrupo;
}
?>