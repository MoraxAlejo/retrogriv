<?php
session_start();
$ides = $_GET['identificacion'];
require_once('conexionbasedatos.php');
$sql = "SELECT * from estudiantes where identificacion = '$ides'";
$result = $objconexion->query($sql);
$row = mysqli_fetch_assoc($result);

?>



<!DOCTYPE html>
<html>
<head>
	<title>Editar/Estudiantes</title>
	<title>Editar/Profesores</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/Login5.css">
</head>
<body background="bomberos1.jpg">
	
	
<div class="wrapper fadeInDown">
  <div id="formContent">
	
	<form action="modificar_profesores_action.php" method="post">
		<div class="p-3 mb-2 bg-secondary text-white">Editar Estudiante <?php echo $_SESSION['nombres'] ?> (Admin)</div>
		<br>
		<br>
		
		Nombre
  <br>
 	<input type="text" name="nombre"  class="fadeIn second" value="<?=$row['nombres'] ?>" >
 	<br>
 	<br>
Apellidos
  <br>
 	<input type="text" name="apellidos"  class="fadeIn second" value="<?=$row['apellidos'] ?>" >
 	<br>
 	<br><br>
	 Identificacion
    <br>
 	<input type="text" name="identificacion_es"  class="fadeIn second" value="<?=$row['identificacion'] ?>" >
						

<br>
<br>
<br>					
Correo
  <br>
 	<input type="text" name="correo"  class="fadeIn second" value="<?=$row['correo_estudiante'] ?>" > 
<br>
<br>
Inscrito en el curso
  <br>
 	<input type="text" name="nombre_curso"  class="fadeIn second" value="<?=$row['nombre_curso'] ?>" > 
<br>
<br>
Codigo Del Curso
  <br>
 	<input type="text" name="codigo_curso"  class="fadeIn second" value="<?=$row['codigo_curso'] ?>" > 
<br>
<br>



<input onClick="window.location.reload()" class="button" type="submit" value="Modificar" class="fadeIn fourth" name="Modificar" >
</center>









	</form>

</body>
</html>