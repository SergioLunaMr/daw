<?php

define("DIR_BASE_URL", "/daw/practicasdaws/RA7/soapejercicio/soappaises.php/");

$listado = [];

$procesaform = false;

$cliente = new SoapClient("http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL");

$listado = $cliente->ListOfCountryNamesGroupedByContinent();

$listado_paises = $cliente->ListOfCountryNamesByName();

// $functions = $cliente->__getFunctions();

$listado2 = $listado->ListOfCountryNamesGroupedByContinentResult->tCountryCodeAndNameGroupedByContinent;

// var_dump($listado2);

// for ($i = 0; $i < count($listado_paises->ListOfCountryNamesByNameResult->tCountryCodeAndName); $i++) {
//     echo $listado_paises->ListOfCountryNamesByNameResult->tCountryCodeAndName[$i]->sName . "<br>";
// }

$request = str_replace(DIR_BASE_URL, '', $_SERVER['REQUEST_URI']);

$selected;

foreach ($listado2 as $continentInfo) {
    if ($continentInfo->Continent->sCode == $request) {
        $selectedContinentInfo = $continentInfo;
    }
}

echo "<h1> Países de " . $selectedContinentInfo->Continent->sName . "</h1>";

foreach ($selectedContinentInfo->CountryCodeAndNames->tCountryCodeAndName as $country) {
    echo "<li>{$country->sName} ({$country->sISOCode})</li>";
}
?>