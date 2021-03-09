<?php

require ("./conexion.php");

echo "Hola este es el archivo que recibe los datos desde el formulario de la pagina web<br>";
// echo $_POST;

echo $_POST['nombre']. "<br>";
echo $_POST['apellido']. "<br>";
echo $_POST['fecha_nac']. "<br>";
echo $_POST['edad']. "<br>";
echo $_POST['genero']. "<br>";
echo $_POST['direccion']. "<br>";
echo $_POST['cedula']. "<br>";
echo $_POST['correo']. "<br>";

// Utilizando variables
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$fec = $_POST['fecha_nac'];
$gen = $_POST['genero'];
$dir = $_POST['direccion'];
$ced = $_POST['cedula'];
$cor = $_POST['correo'];

$sql1 = "INSERT INTO alumnos (nombre, apellido, fechanacimiento, genero, direccion, cedula, correo) VALUES ('$nom' , '$ape' , '$fec' , '$gen' , '$dir' , '$ced' , '$cor')";
echo $sql1;
echo "<br>";

if (mysqli_query($enlace, "$sql1") === TRUE) {
    echo "Registro insertado cporrectamente.\n";
}

header('Location: http://localhost/proyectobda/index.php');

// // Forma mas complicada
// $sql = "INSERT INTO alumnos VALUES ('" . $_POST['nombre'] . "' , '" . $_POST['apellido'] . "' , '" . $_POST['fecha_nac'] . "' , '" . $_POST['genero'] . "' , '" . $_POST['direccion'] . "' , '" . $_POST['cedula'] . "' , '" . $_POST['correo'] . "')";


// echo $sql;


?>