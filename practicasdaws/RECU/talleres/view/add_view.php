<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Talleres</title>
</head>

<body>
    <h1>AÑADIR AULA</h1>
    <form action="/aula/add" method="get">
        <label for="n_aula">Número de Aula:</label>
        <input type="number" id="n_aula" name="n_aula"><br><br>
        <label for="n_mesas">Número de mesas:</label>
        <input type="number" id="n_mesas" name="n_mesas"><br><br>
        <label for="descripcion">Descripción:</label>
        <select>
        <?php
        foreach ($data as $key => $value) {
            echo "<option>". $value["descripcion"] ."</option>";
        }
        ?>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>

</html>