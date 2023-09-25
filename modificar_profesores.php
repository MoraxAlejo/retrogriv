<?php
session_start();
$idprof = $_GET['identificacion_prof'];
require_once('conexionbasedatos.php');
$sql = "SELECT * from profesores where identificacion_prof = '$idprof'";
$result = $objconexion->query($sql);
$row = mysqli_fetch_assoc($result);

?>



<!DOCTYPE html>
<html>
<head>
	<title>Editar/Profesores</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/Login5.css">
</head>
<body background="bomberos1.jpg">
	
	
<div class="wrapper fadeInDown">
  <div id="formContent">
	
	<form action="modificar_profesores_action.php" method="post">
		<div class="p-3 mb-2 bg-secondary text-white">Editar Profesor <?php echo $_SESSION['nombres'] ?> (Admin)</div>
		<br>
		<br>
		
		
Nombre
  <br>
 	<input type="text" name="nombre"  class="fadeIn second" value="<?=$row['nombre'] ?>" >
 	<br>
 	<br>
 	Apellidos
  <br>
 	<input type="text" name="apellidos"  class="fadeIn second" value="<?=$row['apellidos'] ?>" >
 	<br>
 	<br><br>
    Identificacion
    <br>
 	<input type="text" name="identificacion_prof"  class="fadeIn second" value="<?=$row['identificacion_prof'] ?>" >
						

<br>
<br>
<br>
    Curso a cargo
    <br>
 	<input type="text" name="curso_acargo"  class="fadeIn second" value="<?=$row['curso_acargo'] ?>" >

 
<br>
<br>
Codigo de Curso
    <br>
 	<input type="text" name="codigo_curso_acargo"  class="fadeIn second" value="<?=$row['codigo_curso_acargo'] ?>" >


<br>
<br>

<input onClick="window.location.reload()" class="button" type="submit" value="Modificar" class="fadeIn fourth" name="Modificar" >
</center>









	</form>

</body>
</html>