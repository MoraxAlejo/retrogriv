<?php
session_start();
require "conexionbasedatos.php";
$objconexion = new mysqli($host,$user,$password,$basedatos);

if ($objconexion->connect_errno)
{
  echo "Error de conexion";
  exit();
}

$id = $_SESSION['identificacion'];

$sql="SELECT * FROM estudiantes order by nombres ";


$resultado=$objconexion->query($sql);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Informacion/Estudiantes</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
 </head>
 <body background="bomberos1.jpg"
 style="background-repeat: no-repeat; -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
   background-size: 120%;
   opacity: 1;
   ">

 <h1 class="alert alert-primary" align="center">Tabla de Estudiantes <a style="float: right;"
 href="pagina_inicio_admin.php"><input class="btn btn-info" type="button" name="" value="Regresar"> </a> </h1>   
    




    <table class="table"> 
      <tr class="table-danger">

    <td>Nombre </td>
    <td> Apellidos </td>
    <td>Identificacion</td>
    <td>Correo</td>
    <td>Inscrito al curso</td>
    <td>Codigo Del Curso</td>



  </tr>



  <?php
  while ($datos=$resultado->fetch_array())
  {
  ?>

  <tr align="center"  style="background-color: #e3f2fd;">
<td> <?php echo $datos ['nombres'] ?> </td>
<td><?php echo $datos ['apellidos'] ?> </td>
<td><?php echo $datos ['identificacion'] ?> </td>
<td><?php echo $datos ['correo_estudiante'] ?> </td>
<td><?php echo $datos ['nombre_curso'] ?> </td>
<td><?php echo $datos ['codigo_curso'] ?> </td>



<td> <a href="editar_estudiante.php?identificacion=<?=$datos['identificacion']?>"> <input class="btn btn-danger" type="submit" name="" value="Editar"></a></td>
<td> <a href="eliminar_estudiante.php?identificacion=<?=$datos['identificacion']?>"><input class="btn btn-danger"type="submit" name="" value="Eliminar"></a></td>


<?php } ?>


    </table>
    
    
 </body>
 </html>

