
<?php
session_start()



?>

<!DOCTYPE html>
<html>
<head>
	<title>Pagina Principal</title>

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
<body background="bomberos1.jpg">
	
	<form align='center'>
			<font color="black"><h1>Bienvenido <?php echo $_SESSION['nombres'] ?></h1> </font>

			<br>
			<br>
			<font color="black"><i>Tipo de ducumento <?php echo $_SESSION['iden'] ?></i></font>
    </form>
  <br>
  <br>

<div class="text-box" style="margin-top: 0;">
    
<a href="modificar_datos.php" class="btn btn-white btn-animate" ><font color="black"> Ajustar datos</font></a>
<br>
<br><br><br>
<a href="cursos.php" class="btn btn-white btn-animate"><font color="black">Cursos disponibles</font></a>
<br><br><br>
<br>
<a href="close.php" class="btn btn-white btn-animate"><font color="black" onclick="return ConfirmClose()"> Cerrar Sesion</font></a>
</div>


</body>
</html>


