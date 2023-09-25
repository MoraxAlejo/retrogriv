<?php
$nombre=$_POST['nombre'];
require "conexionbasedatos.php";
$objconexion = new mysqli($host,$user,$password,$basedatos);

if ($objconexion->connect_errno)
{
  echo "Error de conexion";
  exit();
}

$sql="SELECT * FROM usuario where nombre ='$nombre'";

$resultado=$objconexion->query($sql);
?>

<!DOCTYPE html>
<html>
<head> 
  <title>Buscador De Usuarios</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<body>
<body background ="bomberos1.jpg"
style="background-repeat: no-repeat; -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
   background-size: 120%">
  
<h1 class="alert alert-primary" align="center">Usuarios  <a style="float: right;"
 href="pagina_inicio_admin.php"><input class="btn btn-info" type="button" name="" value="Regresar"> </a> </h1> 


<table class="table">
  <tr class="table-danger">
    <td>Nombres </td>
    <td> Apellidos </td>
    <td> Tipo De Indetificacion  </td>
    <td>Identificacion</td>
    <td> Fecha/Nacimiento </td>
    <td> Contraseña</td>
    <td> Correo </td>
    <td>Cargo</td>
  </tr>

  <?php
  while ($datos=$resultado->fetch_array())
  {
  ?>

  <tr align="center" style="background-color: #e3f2fd;">
<td> <?php echo $datos ['nombre'] ?> </td>
<td><?php echo $datos ['apellidos'] ?> </td>
<td><?php echo $datos ['modo_identificacion'] ?> </td>
<td><?php echo $datos ['identificacion'] ?> </td>
<td><?php echo $datos ['fecha_nacimiento'] ?> </td>
<td><?php echo $datos ['password'] ?> </td>
<td> <?php echo $datos ['correo'] ?></td>
<td> <?php echo $datos ['cargo'] ?></td>
<td> <a href="modicar_usuarios(admin).php?nombre=<?=$datos['nombre']?>"><input class ="btn btn-danger" type="submit" name="editar" value="Editar"> </a> </td>
<td> <a href="eliminaruser(admin).php?nombre=<?=$datos['nombre']?>"><input class ="btn btn-danger" type="submit" name="eliminar" value="Eliminar"> </a> </td>
  </tr>

  <?php 
}
?>
</table>



</body>
</html>



</body>
</html>
