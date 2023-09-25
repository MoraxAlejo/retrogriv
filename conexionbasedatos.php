<?php

require "conexion.php";
$objconexion = new mysqli($host,$user,$password,$basedatos);

if ($objconexion-> connect_errno)
{
	echo "la conexion con la base de datos fallo" . $objconexion -> connect_errno; 
	exit();
}


?>