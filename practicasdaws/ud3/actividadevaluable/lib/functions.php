<?php
include("../verbs/config/verbos.php");
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function num_test($num){
    is_numeric($num) ? $flag=true : $flag=false;
    return $flag;
}

function randomizerVerbs($nverbs, $naciertos) {
    $arrayVerb=array();
    $actual=0;
    $arrayAciertos=array(array(0,0,1),array(0,1,1), array(1,1,1));
    $arrayTipoVerbo=array("Infinitivo: ", "Pasado: ", "Participio: ", "Traducción: ");


    $html="";

    for($i=0;$i<$nverbs;$i++){
        $actual = rand(1,$nverbs);
        if(!in_array($actual, $arrayVerb)) {
            array_push($arrayVerb,$actual);
            
            switch ($naciertos){
                case 1: shuffle($arrayAciertos[0]);$arrayActual=$arrayAciertos[0];break;
                case 2: shuffle($arrayAciertos[1]);$arrayActual=$arrayAciertos[1];break;
                case 3: shuffle($arrayAciertos[2]);$arrayActual=$arrayAciertos[2];break;
            }
            $html =  "<div>";
            for($j=0;$j<3;$j++) {
                if($arrayActual[$j]==0){
                    $html = $html . "<span class='block'>" . $arrayTipoVerbo[$j]  . $GLOBALS['verbos'][$actual-1][$j] . "</span>";
                }
                else {
                    $html = $html . "<span class='block'>" . $arrayTipoVerbo[$j]  . "<input class='verboinsertar' type='text' name='". $actual ."'></span>";
                }
            }
            $html = $html . "<span class='block'>" . $arrayTipoVerbo[$j]  . $GLOBALS['verbos'][$actual-1][3] . "</span></div>";
            echo $html;
        }
        else {
            $i--;
        }
    }
}

?>