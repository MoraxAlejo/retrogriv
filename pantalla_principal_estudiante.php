<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pagina Principal Del Estudiante</title>

<link rel="stylesheet" type="text/css" href="btn.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>


<script type="text/javascript">
  function ConfirmClose() 
  {
    var respuesta = confirm("¿Estas Seguro Que Deseas Irte?");

    if (respuesta == true) {
      return true;
    }
    else {
      return false;
    }
  }


</script>
<body background="bomberos1.jpg"
style="background-repeat: no-repeat; -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
   background-size: 120%;
   opacity: 1;">
	
	
		<form align='center'>
			<font color="black"><h1>Bienvenido <?php echo $_SESSION['nombres']  ?> Estudiante </h1></font>
				<br>
				<br>
				<font color="black"><i> Tipo de documento <?php echo $_SESSION['iden'] ?> </i> </font>
				<br>
				<br>
		</form>
		<br>
		<br>
		<div class="text-box" style="margin-top: 0;" >
    
<form>
<a href="modificar_datos.php" class="btn btn-white btn-animate"  ><font aling ="left"color="black" name="ajustes"> Ajustar datos</font></a>
<br>
<br><br>
<a href="miscursos(estudiante).php" class="btn btn-white btn-animate"><font color="black"name="cursos">Mis Cursos</font></a><br><br><br>

<a href="#" class="btn btn-white btn-animate" aling="right"><font color="black" name="aggcursos"> Tareas </font></a>
</form>
<br><br><br>



<form><a href="close.php" class="btn btn-white btn-animate"><font color="black" name="cerrar sesion" onclick="return ConfirmClose()"> Cerrar Sesion</font></a><br><br><br>







</div>
			
	
	
</body>
</html>  
