<?php 
session_start();
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$modo_identificacion = $_POST['modo_identificacion'];
$identificacion= $_POST['identificacion'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$contraseña = $_POST['contraseña'];
$correo = $_POST['correo'];
$cargo = $_POST['cargo'];
$estado_cuenta = $_POST['estado_cuenta'];

require_once('conexionbasedatos.php');


$sql ="UPDATE usuario SET nombre = '$nombre', apellidos = '$apellidos', modo_identificacion = '$modo_identificacion', identificacion = '$identificacion', fecha_nacimiento = '$fecha_nacimiento', password = '$contraseña' , correo = '$correo' , cargo = '$cargo' , estado_cuenta = '$estado_cuenta' WHERE usuario. identificacion = '$identificacion'";

$result = $objconexion->query($sql);

header("location:tabla_usuarios.php");

?>