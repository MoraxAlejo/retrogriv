<?php 
session_start();
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$modo_identificacion = $_POST['modo_identificacion'];
$identificacion= $_POST['identificacion'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$contraseña = $_POST['contraseña'];
$correo = $_POST['correo'];
$num = $_SESSION['user'];

require_once('conexionbasedatos.php');


$sql ="UPDATE usuario SET nombre = '$nombre', apellidos = '$apellidos', modo_identificacion = '$modo_identificacion', identificacion = '$identificacion', fecha_nacimiento = '$fecha_nacimiento', password = '$contraseña' , correo = '$correo' WHERE usuario. user = '$num'";

$result = $objconexion->query($sql);

	

if ($_SESSION['cargo'] == "Profesor"){  

	

header("location:pantalla_principal_profesor.php"); 
}

elseif ($_SESSION['cargo'] == "Estudiante" ){
header("location:pantalla_principal_estudiante.php");
}

elseif ($_SESSION['cargo'] == "Admin") {
	header("location:pagina_inicio_admin.php");
}

else {
header("location:pagina_inicio.php");
}

if ($contraseña !=  $_SESSION['contraseña']) {
session_destroy();
header("location:index.php");
} 

?>