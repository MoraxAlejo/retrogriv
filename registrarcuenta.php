<?php  
extract($_REQUEST);
$identificacion = $_REQUEST['identificacion'];
require "conexionbasedatos.php";

$objconexion = new mysqli($host,$user,$password,$basedatos);

if ($objconexion -> connect_errno)
{
	echo "La Conexion No Tuvo exito" .$objconexion->connect_errno;
	exit();
}
$sql1 = "SELECT * FROM `usuario` where identificacion = '$identificacion'";
$resultado1 = $objconexion->query($sql1);
$existe1= mysqli_fetch_assoc($resultado1);


$sql = "insert into usuario(nombre,apellidos,fecha_nacimiento,modo_identificacion,identificacion,password,correo,cargo )values('$_REQUEST[nombre]','$_REQUEST[apellidos]','$_REQUEST[nacimiento]','$_REQUEST[modo_identificacion]','$_REQUEST[identificacion]','$_REQUEST[contraseña]','$_REQUEST[correo]' , '$_REQUEST[cargo]'  )";

if ($existe1['identificacion'] == "") {
	

if ($objconexion->query($sql))
	header("location:cuenta_existente.php");


else 
	header("location:conexionbasededatos.php?");

header("location:index.php");
}
?>