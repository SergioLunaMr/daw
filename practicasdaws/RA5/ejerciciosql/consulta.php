<?php
function conectadb()
{
    $dsn = "mysql:host=localhost;dbname=zoologico";
    try {
        $db = new PDO($dsn, "zoologico", "zoologico");
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
        $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'UTF8'");
        return $db;
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

// $conexion = conectadb();

// //realizar consulta
// $sql = 'Select * from animales';
// $resultado = $conexion->query($sql);

// foreach ($resultado as $key => $value) {
//     echo $value['nombre'] . '<br>';
// }

?>