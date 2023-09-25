<?php
session_start(); 
$nombre = $_GET['nombre'];

require_once('conexionbasedatos.php');


$sql = "DELETE from usuario where nombre = '$nombre'";
$resultado = $objconexion->query($sql);



header("location:tabla_usuarios.php");







?>