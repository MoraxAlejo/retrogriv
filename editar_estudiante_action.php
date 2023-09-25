<?php 
session_start();
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$identificacion_es = $_POST['identificacion_es'];
$correo= $_POST['correo'];
$nombre_curso = $_POST['nombre_curso'];
$codigo_curso = $_POST['codigo_curso'];


require_once('conexionbasedatos.php');


$sql ="UPDATE estudiantes SET nombres = '$nombre', apellidos = '$apellidos', identificacion = '$identificacion_es', correo_estudiante = '$correo', nombre_curso = '$nombre_curso' , codigo_curso = '$codigo_curso' WHERE estudiantes. identificacion = '$identificacion_es'";

$result = $objconexion->query($sql);

header("location:tabla_estudiantes.php");

?>