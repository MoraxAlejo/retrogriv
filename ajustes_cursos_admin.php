<?php
session_start();

require "conexionbasedatos.php";
$objconexion = new mysqli($host,$user,$password,$basedatos);

if ($objconexion->connect_errno)
{
  echo "Error de conexion";
  exit();
}

$sql="select * from curso order by costo";

$resultado=$objconexion->query($sql);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Cursos</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 </head>
 <body background="bomberos1.jpg"
 style="background-repeat: no-repeat; -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
   background-size: 120%;">
  
    <table class="table" >
      <tr align="center" class="table-danger" >
    <td>Nombre </td>
    <td> Costo </td>
    <td> Duracion  </td>
    <td>Codigo</td>
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
<td> <input class="btn btn-outline-danger" type="submit" name="" value="Editar">
</td>
<td> <a href="eliminar_curso.php?nombre=<?=$datos['nombre']?>"><input class="btn btn-outline-danger"type="submit" name="" value="Eliminar"></a></td>



<?php } ?>
    </table>
  
 </body>
 </html>
 