<?php
session_start(); 
$identificacion_es = $_GET['identificacion'];
require_once('conexionbasedatos.php');
$sql = "DELETE from estudiantes where identificacion = '$identificacion_es'";
$resultado = $objconexion->query($sql);
header("location:tabla_estudiantes.php");
