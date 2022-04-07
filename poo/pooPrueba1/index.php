<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses</title>
</head>
<body>
    <h1>Llamada de métodos desde otro archivo</h1>

    <?php
    //Llamamos al archivo externo con un require
    require('pruebameses.php');

    //Llamamos a la clase del archivo externo, igualando la clase a una variable
    $objMeses = new pruebameses();

    //LLamamos al métdo darValores del archivo externo. Igualando el método a una varaible
    $objMeses ->darValores();

    //Llamamos al método mostrar del archivo externo. igualando el método a una variable
    $objMeses->mostrar();

    ?>
</body>
</html>