<?php 
session_start();
?> 

<!DOCTYPE html>
<html>
<head>
	<title>:C</title>
</head>
<body>
<center>
	<h2>Lo Sentimos <?php echo $_SESSION['nombres']; ?> su cuenta a sido Suspendida :c </h2> 
	<br>
	<br>
	<a href="close.php"><input type="button" name="cerrar_session" value="Regresar al inicio"></a>

</center>
</body>
</html>