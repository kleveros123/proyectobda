<?php require ("./recursos.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Titulo</h1>
    <h3>A continuación se muestra un formulario en html</h3>
    <form method="POST" action="datosformulario.php">
        <p>
            <label>Nombre: </label>
            <input type="text" name="nombre">
        </p>

        <p>
            <label>Apellido: </label>
            <input type="text" name="apellido">
        </p>
        <p>
            <label>Fecha de Nacimiento</label>
            <input type="date" name="fecha_nac" id="">
        </p>
        <p>
            <label for="">Edad: </label>
            <input type="number" name="edad" id="">
        </p>
        <p>
            <label>Genero:</label>
            <select name="genero" id="">
                <option value="MASCULINO">Masculino</option>
                <option value="FEMENINO">Femenino</option>
            </select>
        </p>
        
        <p>
            <label>Dirección:</label>
            <input type="text" name="direccion">
        </p>

        <p>
            <label for="">Cedula:</label>
            <input type="text" name="cedula" id="">
        </p>

        <p>
            <label for="">Correo:</label>
            <input type="email" name="correo" id="">
        </p>

        <input type="submit" value="Aceptar">
    </form>
<br><br><br>
</body>

</html>