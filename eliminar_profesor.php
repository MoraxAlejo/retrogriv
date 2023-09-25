<?php
session_start(); 
$identificacion_prof = $_GET['identificacion_prof'];

require_once('conexionbasedatos.php');


$sql = "DELETE from profesores where identificacion_prof = '$identificacion_prof'";
$resultado = $objconexion->query($sql);



header("location:tabla_profesores.php");
