<?php
session_start();
$identificacion_estudiante = $_SESSION ['identificacion'] ; 
require_once ('conexionbasedatos.php');
$objconexion = new mysqli($host,$user,$password,$basedatos);

if ($objconexion->connect_errno)
{
  echo "Error de conexion";
  exit();
}

$sql="SELECT nombre_curso , codigo_curso from estudiantes where identificacion = '$identificacion_estudiante' ";

$resultado=$objconexion->query($sql);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Mis Cursos</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 </head>
 <script type="text/javascript">
  function Confirm() 
  {
    var respuesta = confirm("¿Deseas Ingresar Al Curso?");

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
   background-size:120%;">
  
    <table class="table" >
      <tr align="center" class="table-danger" >
    <td>Nombre del curso  </td>
    <td> Codigo </td>
  </tr>

  <?php
  while ($datos=$resultado->fetch_array())
  {
  ?>

  <tr align="center" style="background-color: #e3f2fd;">
<td> <?php echo $datos ['nombre_curso'] ?> </td>
<td><?php echo $datos ['codigo_curso'] ?> </td>

<td> <a href="pantalla_principal_retrogriv(estudent).php?codigo_curso=<?=$datos['codigo_curso']?>"><input class="btn btn-outline-danger" type="button" name="" value="🎓 Ingresar" onclick="return Confirm()"></a>
</td>



<?php } ?>
    </table>
  
 </body>
 </html>
 