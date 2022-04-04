<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulario</title>
</head>
<body>
    <form action="recogerDatos.php" method="POST">
        <label for="categoria">Seleccione categoria: </label><br>
        <select name="categoria" id="categoria">
            <option value="navidad">Navidad</option>
            <option value="ignaciana">Semana Ignaciana</option>
            <option value="escolares">Fiestas escolares</option>
        </select>
        <br>
        <br>
        <label for="Etapa">Seleccione etapa escolar: </label><br><br>
        <input type="checkbox" id="1" name="primaria" value="primaria">
        <label for="primaria">Primaria</label>
        <br>
        <input type="checkbox" id="2" name="ESO" value="ESO">
        <label for="ESO">ESO</label>
        <br>
        <input type="checkbox" id="3" name="bachillerato" value="bachillerato">
        <label for="bachillerato">Bachillerato</label>
        <br>
        <input type="checkbox" id="4" name="cfgm" value="cfgm">
        <label for="cfgm">CFGM</label>
        <br>
        <input type="checkbox" id="5" name="cfgs" value="cfgs">
        <label for="cfgs">CFGS</label>
        <br>
        <br>
        <label for="actividad">Marca si es una actividad de clase</label>
        <br>
        <input type="radio" id="actividad" name="actividad" value="si">
        <br>
        <br>
        <input type="submit" name="Enviar">
    </form>
    
</body>
</html>