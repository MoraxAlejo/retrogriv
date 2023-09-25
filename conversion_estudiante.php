<?php 
session_start();
extract($_REQUEST);
$numero_id = $_SESSION ['identificacion'];
$cargo_pago = "Estudiante";
require "conexionbasedatos.php";

$objconexion = new mysqli($host,$user,$password,$basedatos);

if ($objconexion -> connect_errno)
{
	echo "La Conexion No Tuvo exito" .$objconexion->connect_errno;
	exit();
} 


 $sql1 = "UPDATE usuario SET cargo = 'Estudiante' where identificacion = '$numero_id'" ; 
$result1 = $objconexion->query($sql1);


$sql = "INSERT INTO estudiantes(nombres,apellidos,identificacion,correo_estudiante,nombre_curso,codigo_curso )values('$_REQUEST[nombre]','$_REQUEST[apellidos]','$_REQUEST[identificacion]','$_REQUEST[correo]','$_REQUEST[nombre_curso]' , '$_REQUEST[codigo_curso]')";

if ($objconexion->query($sql))
	header("location:error.php");

else 
	header("location:conexionbasededatos.php?");

header("location:pantalla_principal_estudiante.php");

?>
