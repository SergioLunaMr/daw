<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Talleres</title>
</head>
<body>
    <h1>Aulas</h1>
    <p><a href='/aula/add/form'>AÑADIR AULA</a></p>
    <div class="aula-parent"></div>
    <?php
    foreach ($data as $key => $value) {
        echo "<div class='aula'><h2>Aula " . $value["num_aula"] . "</h2>";
        echo "<a href='/aula/edit/". $value["id"] ."'>EDITAR</a><br>";
        echo "<a href='/aula/delete/". $value["id"] ."'>BORRAR</a>";
        echo "</div>";
    }
    ?>
</body>
</html>