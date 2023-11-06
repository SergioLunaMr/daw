<?php
$apaises = array(
    array('id' => 'es', 'pais' => 'España', 'capital' => 'Madrid'),
    array('id' => 'it', 'pais' => 'Italia', 'capital' => 'Roma'),
    array('id' => 'fr', 'pais' => 'Francia', 'capital' => 'Paris')
);

echo "Opcion 1 </br>";
$nombrePaises = array();
foreach($apaises as $pais){
    $nombrePaises[] = $pais['pais'];
}
print_r ($nombrePaises);

$nombrePaises2 = array_map(function($pais) {
    return $pais['pais'];
}, $apaises);

print_r($nombrePaises2);

$numeros=array();

for($i=1;$i<=10;$i++){
    $numeros[$i]=$i;
}

$cuadrado = array_map(function($numero) {
    return $numero*$numero;
}, $numeros);

print_r ($cuadrado);



/*
foreach($apaises as $pais) {
    foreach($pais as $key=>$valor){
        if($key == 'pais'){
            echo "${valor}";
        }
    }
}
*/
?>