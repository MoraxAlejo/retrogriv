<?php 
session_start(); 
require_once ('conexionbasedatos.php'); 
$objconexion = new mysqli($host,$user,$password,$basedatos);

if ($objconexion->connect_errno)
{
  echo "Error de conexion";
  exit();
}
$id_profe = $_SESSION['identificacion'];

$sql1 = "SELECT * FROM curso WHERE identificacion_profesor = '$id_profe'";
$resultado1 = $objconexion->query($sql1);
$existe1= mysqli_fetch_assoc($resultado1); 
$codigo_curso = $existe1 ['codigo'] ;


$sql="SELECT * FROM estudiantes where codigo_curso = '$codigo_curso' ";

$resultado=$objconexion->query($sql);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Mis Estudiantes</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
 </head>
 <body background="bomberos1.jpg"
 style="background-repeat: no-repeat; -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
   background-size: 120%;
   opacity: 1;
   ">

 <h1 class="alert alert-primary" align="center">Tabla de usuarios  <a style="float: right;"
 href="pantalla_principal_profesor.php"><input class="btn btn-info" type="button" name="" value="Regresar"> </a> </h1>   
    




    <table class="table"> 
      <tr class="table-danger">

    <td>Nombre </td>
    <td> Apellidos </td>
    <td>Identificacion</td>
    <td>Notas</td>
    <td>Estado</td>
   



  </tr>



  <?php
  while ($datos=$resultado->fetch_array())
  {
  ?>

  <tr align="center"  style="background-color: #e3f2fd;">
<td> <?php echo $datos ['nombres'] ?> </td>
<td><?php echo $datos ['apellidos'] ?> </td>
<td><?php echo $datos ['identificacion'] ?> </td>
<td><?php echo $datos ['notas'] ?> </td>
<td><?php echo $datos ['estado'] ?> </td>



<td> <a href="###"> <input class="btn btn-danger" type="submit" name="" value="Editar"></a></td>


<?php } ?>


    </table>
    
    
 </body>
 </html>

 ?>