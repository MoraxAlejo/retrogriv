<?php 
session_start(); 
require_once ('conexionbasedatos.php'); 
$_SESSION ['CODIGO'] = $_GET['codigo']; 
$codigo_curso = $_SESSION ['CODIGO']; 


$sql = "SELECT * from curso where codigo = '$codigo_curso' " ; 
$resultado = $objconexion->query($sql);
$existe= mysqli_fetch_assoc($resultado);
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Retrogriv (Profesor )</title>
</head>
<body>
	<center>
	Bienvenido a RETROGRIV <i> <?php echo $_SESSION['nombres'] ?> </i> instructor encargado del curso <?php echo $existe['nombre']?> 
	<br> <br> 
	Codigo del Curso = <?php echo $existe['codigo'] ?>
	</center>
</body>
</html>