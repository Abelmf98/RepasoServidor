<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css" />
    <title>Formulario</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="">Categorías</label>
        <select name="categoria">
            <option value="navidad">navidad</option>
            <option value="semanaIgnaciana">Semana Ignaciana</option>
            <option value="fiestas">Fiestas Escolares</option>
        </select>
        <br>
        <br>
        <label>Nombre Actividad: </label>
        <input type="text" name="nombre">
        <br>
        <div>
            <h4>Etapas</h4>
            <div>
                <input type="checkbox" name=etapas[] value="primaria" />Primaria
            </div>
            <div>
                <input type="checkbox" name=etapas[] value="eso" /> ESO
            </div>
            <div>
                <input type="checkbox" name=etapas[] value="bachillerato" /> Bachillerato
            </div>
            <div>
                <input type="checkbox" name=etapas[] value="cfgm" /> CFGM
            </div>
            <div>
                <input type="checkbox" name=etapas[] value="cfgs" /> CFGS
            </div>
        </div>
        <br>
        <div>
            <input type="radio" name="actividad" /> Actividad de Sección
        </div>
        <br>
        <div>
            <input type="submit" value="Enviar" name="enviar">
        </div>
    </form>
</html>
<?php

    if(isset($_POST['enviar'])){
        
        require ("funciones.php");

        $formulario = new Formulario();


        //Hacemos la creacion de una variable que llamará a cogerDatos()
        $actividades = $formulario -> cogerDatos();

        //Ahora visualizamos
        $formulario->visualizarDatos($actividades);
    }