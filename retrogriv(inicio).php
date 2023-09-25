<?php 
session_start();
$codigo_del_curso = $_GET['codigo_curso']; 
require_once ('conexionbasedatos.php');
$objconexion = new mysqli($host,$user,$password,$basedatos);

$sql = "SELECT * from curso where codigo = '$codigo_del_curso'" ;
$resultado = $objconexion->query($sql);
$existe= mysqli_fetch_assoc($resultado);

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Retrogriv Inicio</title>
</head>
<body> 
	<center>
		<br>
			<br>
				<br>
					<h1> Bienvenido a RetroGriv <?php echo $_SESSION['nombres'] ?> Usted Esta Inscrito en el curso <?php echo $existe['nombre'] ?> </h1> 

					<br><br>




	</center>

</body>
</html>