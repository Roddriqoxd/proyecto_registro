<?php


$name=$_POST['nombre'];
$lastName=$_POST['apellido'];


// echo $_POST['nombre'];
// echo $_POST['apellido'];

$conexion = mysqli_connect( "localhost", "root" , "", "nombre_de_base_de_datos");

$consulta = "INSERT INTO `nombre_tabla`( `nombre`, ``, ``, ``) VALUES ('$name','','','')";

$cualqera_name = mysqli_query($conexion,$consulta);

// header('Location: ../ruta_para_mostrar_despues_de_enviar');






?>