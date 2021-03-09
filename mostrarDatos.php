<?php
require ("./conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
</head>
<body>
    <h1>Listado de Alumnos</h1>

    <table border="1">
    <thead>
    <tr>
    <th>Codigo</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Fecha Nacimiento</th>
    <th>Genero</th>
    <th>Direccion</th>
    <th>Correo</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM alumnos";
    $registros = mysqli_query($enlace, $sql);
    
    while ($arraydatos = mysqli_fetch_array($registros, MYSQLI_ASSOC)) { 
    ?>
    
            <tr>
                <td> <?php echo $arraydatos["codigoalumno"]; ?> </td>
                <td> <?php echo $arraydatos["nombre"]; ?> </td>
                <td> <?php echo $arraydatos["apellido"]; ?> </td>

                
            </tr>
    
    <?php
    }
    ?>
    </tbody>
    </table>
</body>
</html>