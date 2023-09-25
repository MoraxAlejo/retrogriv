<?php  
extract($_REQUEST);

require "conexionbasedatos.php";

$objconexion = new mysqli($host,$user,$password,$basedatos);

if ($objconexion -> connect_errno)
{
  echo "La Conexion No Tuvo exito" .$objconexion->connect_errno;
  exit();
}


$sql = "INSERT into profesores (nombre,apellidos,identificacion_prof , curso_acargo , codigo_curso_acargo)values('$_REQUEST[nombre_prof]','$_REQUEST[apellidos]','$_REQUEST[identificacion]','$_REQUEST[curso_acargo]','$_REQUEST[codigo_curso]')";

if ($objconexion->query($sql))
  header("location:error.php");



else 
  header("location:conexionbasededatos.php?");

header("location:pagina_inicio_admin.php");

?>









$sql = "INSERT into profesores (nombre,apellidos,identificacion_prof , curso_acargo , codigo_curso_acargo)values('$_REQUEST[nombre_prof]','$_REQUEST[apellidos]','$_REQUEST[identificacion]','$_REQUEST[curso_acargo]','$_REQUEST[codigo_curso]')";