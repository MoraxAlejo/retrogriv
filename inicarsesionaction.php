<?php 
$ID = $_POST['modoidentificacion'] ; 
$numeroid = $_POST['numeroid'];
$contraseña = $_POST['contraseña']; 

require_once ('conexionbasedatos.php');
$objconexion = new mysqli($host,$user,$password,$basedatos);

$sql = "SELECT * FROM `usuario` WHERE modo_identificacion = '$ID' and  identificacion = '$numeroid' and password = '$contraseña'";
$resultado = $objconexion->query($sql);
$existe= mysqli_fetch_assoc($resultado);



if ($existe['identificacion'] == "" and $existe['password'] == "") {

	header("location:index.php"); 
	}
		elseif ($existe ['modo_identificacion'] == "$ID" and $existe['identificacion'] == "$numeroid" and $existe['password'] == "$contraseña" and $existe['cargo'] == "Admin") {
	session_start();
	$sql1 = "SELECT * FROM `usuario` where identificacion = $numeroid";
$resultado1 = $objconexion->query($sql1);
$existe1 = mysqli_fetch_assoc($resultado1);
	$_SESSION ['nombres'] = $existe1['nombre'];
	$_SESSION ['apellidos'] = $existe1['apellidos'];
	$_SESSION ['iden'] = $existe1['modo_identificacion'];
	$_SESSION ['identificacion'] = $existe1['identificacion'];
	$_SESSION ['contraseña'] = $existe1['password'];
	$_SESSION ['user'] = $existe1['user'];
	$_SESSION ['estado_cuenta'] = $existe1['estado_cuenta'];
		$_SESSION ['cargo'] = $existe1['cargo'];
	header("location:pagina_inicio_admin.php");

}

		elseif ($existe ['modo_identificacion'] == "$ID" and $existe['identificacion'] == "$numeroid" and $existe['password'] == "$contraseña" and $existe['cargo'] == "Profesor") {
	session_start();
	$sql1 = "SELECT * FROM `usuario` where identificacion = $numeroid";
$resultado1 = $objconexion->query($sql1);
$existe1 = mysqli_fetch_assoc($resultado1);
	$_SESSION ['nombres'] = $existe1['nombre'];
	$_SESSION ['iden'] = $existe1['modo_identificacion'];
	$_SESSION ['identificacion'] = $existe1['identificacion'];
	$_SESSION ['contraseña'] = $existe1['password'];
	$_SESSION ['user'] = $existe1['user'];
	$_SESSION ['estado_cuenta'] = $existe1['estado_cuenta'];
		$_SESSION ['cargo'] = $existe1['cargo'];
		$_SESSION ['cursos_a_mi_nombre'] = $existe1['cursos_acargo'];
	header("location:pantalla_principal_profesor.php");

}
	elseif ($existe ['modo_identificacion'] == "$ID" and $existe['identificacion'] == "$numeroid" and $existe['password'] == "$contraseña" and $existe['cargo'] == "Estudiante") {
	session_start();
	$sql1 = "SELECT * FROM `usuario` where identificacion = $numeroid";
$resultado1 = $objconexion->query($sql1);
$existe1 = mysqli_fetch_assoc($resultado1);
	$_SESSION ['nombres'] = $existe1['nombre'];
	$_SESSION ['iden'] = $existe1['modo_identificacion'];
	$_SESSION ['identificacion'] = $existe1['identificacion'];
	$_SESSION ['contraseña'] = $existe1['password'];
	$_SESSION ['user'] = $existe1['user'];
	$_SESSION ['estado_cuenta'] = $existe1['estado_cuenta'];
	$_SESSION ['cargo'] = $existe1['cargo'];
	header("location:pantalla_principal_estudiante.php");

}

	elseif ($existe ['modo_identificacion'] == "$ID" and $existe['identificacion'] == "$numeroid" and $existe['password'] == "$contraseña" and $existe['cargo'] == "Usuario") {
	session_start();
	$sql1 = "SELECT * FROM `usuario` where identificacion = $numeroid";
$resultado1 = $objconexion->query($sql1);
$existe1 = mysqli_fetch_assoc($resultado1);
	$_SESSION ['nombres'] = $existe1['nombre'];
	$_SESSION ['iden'] = $existe1['modo_identificacion'];
	$_SESSION ['identificacion'] = $existe1['identificacion'];
	$_SESSION ['contraseña'] = $existe1['password'];
	$_SESSION ['user'] = $existe1['user'];
	$_SESSION ['estado_cuenta'] = $existe1['estado_cuenta'];
	
	header("location:pagina_inicio.php");

}

else {
	header("location:error.php");
}



 ?>
