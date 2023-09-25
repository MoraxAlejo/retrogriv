<?php 
session_start();
require "conexionbasedatos.php";
$objconexion = new mysqli($host,$user,$password,$basedatos);

if ($objconexion->connect_errno)
{
  echo "Error de conexion";
  exit();
}
$ID = $_SESSION['identificacion'];

$sql="SELECT * FROM curso where identificacion_profesor = '$ID'";

$resultado=$objconexion->query($sql);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Cursos A Su Nombre</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 </head>
 <body background="bomberos1.jpg"
 style="background-repeat: no-repeat; -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
   background-size: 120%;
   opacity: 1;" 
 >
  

  
<h1 class="alert alert-primary" align="center">Cursos a su nombre  <a style="float: right;"
 href="pantalla_principal_profesor.php"><input class="btn btn-info" type="button" name="" value="Regresar"> </a> </h1> 
   





    <table class="table">
      <tr class="table-danger">
    <td>Nombre </td> 
    <td> Costo </td>
    <td>Duracion</td>
    <td>codigo</td>
    <td>Identificacion</td>


  </tr>

  <?php
  while ($datos=$resultado->fetch_array())
  {
  ?>

  <tr align="center" style="background-color: #e3f2fd;">
<td> <?php echo $datos ['nombre'] ?> </td>
<td><?php echo $datos ['costo'] ?> </td>
<td><?php echo $datos ['duracion'] ?> </td>
<td><?php echo $datos ['codigo'] ?> </td>
<td><?php echo $datos ['identificacion_profesor'] ?> </td>

<td> <a href="pantalla_principal_retrogriv(profe).php?codigo=<?=$datos['codigo']?>"> <input class="btn btn-danger" type="submit" name="" value="🎓Ingresar al curso"></a></td>



<?php } ?>
    </table>
