<!DOCTYPE html>
<html lang='es'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='author' content='SergioLunaMartín'>
<title>Lista de numeros pares</title>
</head>
<body>
    <h1>MVC</h1>
    <h2> <?php echo $data["encabezado"]; ?> </h2>
    <p> <?php foreach($data["numeros"] as $key=>$value){
        echo $value . "</br>";
    } ?> </p>
</body>
</html>