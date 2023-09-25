<?php 
session_start();
require_once "conexionbasedatos.php";
$codigo_curso = $_GET['codigo'];
$nombre = $_SESSION['nombres'];
$sql = "SELECT * from usuario where nombre = '$nombre'";
$result = $objconexion->query($sql);
$row = mysqli_fetch_assoc($result);

$sql2 = "SELECT nombre from curso where codigo = '$codigo_curso' ;";
$result2 = $objconexion->query($sql2);
$row2 = mysqli_fetch_assoc($result2);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <title>Inscribirse </title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/Login5.css">
 </head>


 <body background="bomberos1.jpg">
  <div class="wrapper fadeInDown">
  <div id="formContent">

  <form action="conversion_estudiante.php" method="post">
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

    Identificacion
    <br>
  <input type="text" name="identificacion"  class="fadeIn second" value="<?=$row['identificacion'] ?>" >
  <br>
  <br>
  Nombre Del Curso
  <br>
<select  name="nombre_curso" class="form-control">
        <option><?php echo $row2['nombre'] ?></option>
                     </select>
  <br>
  <br>
  Codigo Del Curso
  <br>
 <select  name="codigo_curso" class="form-control">
        <option><?php echo $codigo_curso ?></option>
                     </select>
  <br>
  <br>
  Correo Electronico
  <br>
  <input type="text" name="correo"  class="fadeIn second" value="<?=$row['correo'] ?>" >
  <br>
  <br>

<input onClick="window.location.reload()" type="submit" class="fadeIn fourth" name="Modificar" value="Inscribirse">
  

 </form>
 </body>
 </html>