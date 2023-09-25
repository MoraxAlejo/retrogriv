<?php 
session_start();
require_once "conexionbasedatos.php";
$nombre = $_SESSION['nombres'];
$sql = "SELECT * from usuario where nombre = '$nombre'";
$result = $objconexion->query($sql);
$row = mysqli_fetch_assoc($result);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Editar Informacion</title>
 	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/Login5.css">
 </head>


 <body background="bomberos1.jpg">
 	<div class="wrapper fadeInDown">
  <div id="formContent">

 	<form action="modificar_action.php" method="post">
 	<div class="p-3 mb-2 bg-secondary text-white">Datos de <?php echo $_SESSION['nombres'];  ?></div>
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
 	<br>
 	<div class="form-group col-md-7" style="position:absolute; left:20%;">
                  <label for="inputState">Tipo de documento</label>
      <br>
      <select  name="modo_identificacion" class="form-control">
        <option>C.C.Cedula ciudadania</option>
                   <option>T.I.Tarjeta De Identidad </option>
                    <option>Pasaporte</option>
                     </select>
    </div>
    <br>
    <br>
    <br>
    <br>
    Identificacion
    <br>
 	<input type="text" name="identificacion"  class="fadeIn second" value="<?=$row['identificacion'] ?>" >
 	<br>
 	<br>
 	Fecha de Nacimiento
  <br>
 	<input type="date" name="fecha_nacimiento"  class="fadeIn second" value="<?=$row['fecha_nacimiento'] ?>" >
 	<br>
 	<br>
 	Contraseña
  <br>
 	<input type="text" name="contraseña"  class="fadeIn second" value="<?=$row['password'] ?>" >
 	<br>
 	<br>
 	Correo
  <br>
 	<input type="text" name="correo"  class="fadeIn second" value="<?=$row['correo'] ?>" >
 	<br>
 	<br>

<input onClick="window.location.reload()" type="submit" class="fadeIn fourth" name="Modificar" value="Modificar">
 	

 </form>
 </body>
 </html>