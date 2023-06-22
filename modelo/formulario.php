<?php


$name=$_POST['nombre'];
$lastName=$_POST['apellido'];


echo $_POST['nombre'];
echo $_POST['apellido'];

$medidor= "INSERT INTO `medidor`( `codigo`, `deuda`, `ubicacion`, `precio`) VALUES ('$codigo','$deuda','$ubicacion','1')";
$consulta1=mysqli_query($conexion, $medidor);

header('Location: ../vista/mostrar.php');






?>