<?php
session_start();
extract($_REQUEST);
$inf_curso = $_REQUEST['codigo'];
require "conexionbasedatos.php";

$objconexion = new mysqli($host,$user,$password,$basedatos);

if ($objconexion -> connect_errno)
{
	echo "La Conexion No Tuvo exito" .$objconexion->connect_errno;
	exit();
}

$sql = "insert into curso (nombre,costo,tutor_acargo,duracion,codigo,identificacion_profesor)values('$_REQUEST[nombre_curso]','$_REQUEST[costo]','$_REQUEST[nombreprof]' ,'$_REQUEST[duracion]','$_REQUEST[codigo]' ,'$_REQUEST[iden_profe]')";

$sql2 = "CREATE TABLE IF NOT EXISTS `$_REQUEST[codigo]` (
  `id_estudiante` varchar(50) DEFAULT NULL,
  `nombre_estudiante` varchar(80) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `notas` varchar (50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";



    if ($objconexion->query($sql2) === TRUE) {
    echo "la tabla ha sido creada";
}
 if ($objconexion->query($sql) ) {
	header("location:error.php");
}



else 

	header("location:conexionbasededatos.php?");

header("location:pagina_inicio_admin.php");
  ?>