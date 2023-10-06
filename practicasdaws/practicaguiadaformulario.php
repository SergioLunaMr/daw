<?php
/**
 * @author: Sergio Luna Martín
 * date: 03/10/2023
 */
/**
 * Función para limpiar datos de entrada
 * function: test_input
 * param: cadena procedente de un formulario
 * return: cadena limpia
 */
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Definimos las variables tipo text con valor inicial
$name = $email = $gender = $comment = $website = "";
//Declarar variables error para las restricciones de las entradas
$nameErr = $emailErr = $websiteErr = "";


//Para género trabajaremos con un array
$aGenero = array("Hombre", "Mujer", "Otro");
//Variable para error en género
$genderErr = "";

//Variables para la Movilidad
//array de opciones
$aVehiculos = array("Bici", "Coche", "Patinete");
$aVechiculosSeleccionados = array();

//Opciones con valor y literal
//Observar el resultado del procesamiento
$aOpciones = array(
    array("valor1" => 1, "literal" => "Opción 1"),
    array("valor1" => 2, "literal" => "Opción 2"),
    array("valor1" => 3, "literal" => "Opción 3"),
    array("valor1" => 4, "literal" => "Opción 4")
);
$opcionSeleccionada = 1;
//Variables con la marca de coches
$cars = array("Renault", "Mercedes", "Citroen", "Volvo", "Seat");
$carsSeleccionados = array();

$lprocesaFormulario = FALSE;
$lerror = FALSE;

//Detectamos error
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //también se utiliza isset(POST["enviar"]);
    $lprocesaFormulario = TRUE;

    //Validación de los campos del formulario
    //Validación del nombre
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $lerror = TRUE;
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $lerror = true;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de correo incorrecto";
            $lerror = true;
        }
    }

    if (isset($_POST["combo"])) {
        $opcionSeleccionada = $_POST["combo"];
    }


    if (isset($_POST["vehicle"])) {
        $aVechiculosSeleccionados = $_POST["vehicle"];
    }
    //Validacion URL
    //Propuesta Formato URL valida.
    if (isset($_POST["website"])) {
        $website = test_input($_POST["website"]);
    }
    //Validacion comentario
    //Propuesta 
    if (isset($_POST["comment"])) {
        $website = test_input($_POST["comment"]);
    }

    //Validación gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
        $lerror = true;
    } else {
        $gender = $_POST["gender"];
    }

    if ($lerror) {
        $lprocesaFormulario = FALSE;
    }
}

//Validacion del email

?>
<!DOCTYPE html>
<html lang='es'>

<head>
    <style>
        .error: {
            color: red;
        }
    </style>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='SergioLunaMartín'>
    <script src='main.js'></script>
    <title>SergioLunaMartín</title>
</head>

<body>
    <?php
    if (!$lprocesaFormulario) { ?>
        <h1>Validación formulario</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Nombre: <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error">*
                <?php echo $nameErr; ?>
            </span><br /><br />
            Email: <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">*
                <?php echo $emailErr; ?>
            </span><br /><br />
            Web: <input type="text" name="website" value="<?php echo $website; ?>">
            <span class="error">*
                <?php echo $websiteErr; ?>
            </span><br /><br />
            Comentario: <input type="text" name="comment" value="<?php echo $comment; ?>"><br /><br />



            Género:
            <?php
            foreach ($aGenero as $clave => $valor) {
                $check = "";
                if ($gender == $valor) {
                    $check = "checked";
                }
                echo "<input type=\"radio\" name=\"gender\" value=\"$valor\" $check>$valor";
            } ?>
            <span class="error">*
                <?php echo $genderErr; ?>
            </span><br /><br />
            Transporte:
            <?php echo "<br/>";
            foreach ($aVehiculos as $valor) {
                $selected = (in_array($valor, $aVechiculosSeleccionados)) ? "checked" : "";
                echo "<input type=\"checkbox\" name=\"vehicle[]\" value=\"" . $valor . "\" $selected>" . $valor . "<br/>";
            }
            ?>
            Marca de coche:

            Opción:
            <select name="combo">
                <?php
                foreach ($aOpciones as $valor) {
                    $selected = ($opcionseleccionada == $valor["valor"]) ? "selected" : "";
                    echo "<option value=\"" . $valor["valor"] . "\" $selected>" . $valor["literal"] . "</option>";
                }
                ?>
            </select>
            <button>Enviar</button>
        </form>

    <?php
    } else {
        $namep=$_POST["name"];
        $emailp=$_POST["email"];
        $websitep=$_POST["website"];
        $genderp=$_POST["gender"];
        $combop=$_POST["combo"];
        $vehiclep=$_POST["vehicle"];
        $commentp=$_POST["comment"];

        echo $namep . $emailp . $websitep . $genderp . $vehiclep[0] . $commentp;
    } ?>
</body>

</html>