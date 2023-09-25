<?php 
session_start();
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$identificacion_prof = $_POST['identificacion_prof'];
$curso_acargo= $_POST['curso_acargo'];
$codigo_curso_acargo = $_POST['codigo_curso_acargo'];


require_once('conexionbasedatos.php');


$sql ="UPDATE profesores SET nombre = '$nombre', apellidos = '$apellidos', identificacion_prof = '$identificacion_prof', curso_acargo = '$curso_acargo', codigo_curso_acargo = '$codigo_curso_acargo' WHERE profesores. identificacion_prof = '$identificacion_prof'";

$result = $objconexion->query($sql);

header("location:tabla_profesores.php");

?>