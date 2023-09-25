<?php
session_start(); 
$nombre = $_GET['nombre'];

require_once('conexionbasedatos.php');


$sql = "DELETE from curso where nombre = '$nombre'";
$resultado = $objconexion->query($sql);



header("location:ajustes_cursos_admin.php");







?>