<?php
function conectarse ()
{
	if (!($conexion = mysql_connect("localhost","root","")))
	{
		echo "error conectando a la base de datos";
		exit();
	}
	
    if (!mysql_select_db("wichitrocov",$conexion))
	{
        echo "error seleccionando la base de datos";
		exit();	
	}
	return $conexion;
}
$conexion=conectarse();

?>