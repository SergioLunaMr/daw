<?php
require_once("app/models/Perro.php");
require_once("app/models/Persona.php");

use App\Models\Perro;
use App\Models\Persona;

$perro1 = new Perro("blanco", "Juan");
$persona1 = new Persona("Manolo", "Gutierrez", "Lopez");

$perro1->darPata();
$perro1->entrenar();
$perro1->entrenar();
$perro1->entrenar();
$perro1->entrenar();
$perro1->entrenar();
$perro1->entrenar();
$perro1->darPata();

$persona1->saluda();
echo $persona1->Nombre();


?>